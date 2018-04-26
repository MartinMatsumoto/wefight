/*!
 * Ext JS Library 4.0
 * Copyright(c) 2006-2011 Sencha Inc.
 * licensing@sencha.com
 * http://www.sencha.com/license
 */
var companyStore = Ext.create('Ext.data.Store', {
    fields: ['id', 'open_id', 'name', 'career_type', 'company_nature', 'location', 'contactor', 'tel', 'email', 'descript'],
    autoLoad: false,
    pageSize: 20,
    proxy: {
        extraParams: {},
        type: 'rest',
        url: '/structure/company/controller/manager_listcompany.php',
        reader: {
            type: 'json',
            root: 'content',// JSON数组对象名
            totalProperty: 'count'// 数据集记录总数
        },
        actionMethods: {
            read: 'POST'
        },
        limitParam: 'pageSize',
        //pageParam : 'currentPage',
        startParam: 'begin'
    }
});

var companySelModel = null;
function getCompanySelModel(){
    companySelModel = Ext.create('Ext.selection.CheckboxModel', {
        mode: 'SINGLE',
        listeners: {
            beforeselect: function (catgegory, record, index, obj) {
            },
            selectionchange: function (sm, selections) {
            },
            select: function (company, record, index, obj) {
                currentSel = record;
                Ext.getCmp("company_modify_button").setDisabled(false);
                Ext.getCmp("company_delete_button").setDisabled(false);
            }
        }
    });
    return companySelModel;
}

Ext.define('MyDesktop.CompanyWindow', {
    extend: 'Ext.ux.desktop.Module',
    requires: [
        'Ext.data.ArrayStore',
        'Ext.util.Format',
        'Ext.grid.Panel',
        'Ext.grid.RowNumberer'
    ],

    id: 'company-win',

    init: function () {
        this.launcher = {
            text: '校友管理'
        };
    },

    store: companyStore,

    createWindow: function () {
        var this_ = this;
        var desktop = this_.app.getDesktop();
        var win = desktop.getWindow('company-win');
        if (!win) {
            win = desktop.createWindow({
                id: 'company-win',
                title: '校友信息管理',
                width: 740,
                height: 480,
                iconCls: 'icon-grid',
                animCollapse: false,
                constrainHeader: true,
                layout: 'fit',
                items: [
                    {
                        border: false,
                        xtype: 'grid',
                        store: this.store,
                        selModel: getCompanySelModel(),
                        columns: [
                            {
                                text: "id",
                                width: 30,
                                sortable: true,
                                dataIndex: 'id'
                            },
                            {
                                text: "企业全称",
                                width: 70,
                                sortable: true,
                                dataIndex: 'name'
                            },
                            {
                                text: "行业类别",
                                width: 70,
                                sortable: true,
                                dataIndex: 'career_type'
                            },
                            {
                                text: "企业性质",
                                width: 120,
                                sortable: true,
                                dataIndex: 'company_nature'
                            },
                            {
                                text: "办公地址",
                                width: 120,
                                sortable: true,
                                dataIndex: 'location'
                            },
                            {
                                text: "联系人",
                                width: 70,
                                sortable: true,
                                dataIndex: 'contactor'
                            },
                            {
                                text: "联系电话",
                                width: 120,
                                sortable: true,
                                dataIndex: 'tel'
                            },
                            {
                                text: "邮箱",
                                width: 70,
                                sortable: true,
                                dataIndex: 'email'
                            },
                            {
                                text: "您认为校友会能为您做些什么",
                                width: 200,
                                sortable: true,
                                dataIndex: 'descript'
                            }
                        ]
                    }
                ],
                tbar: [{
                    id: 'company_modify_button',
                    text: '修改信息',
                    disabled: true,
                    tooltip: '修改某个校友填报的信息',
                    handler: function () {
                        Ext.getCmp('companyModifyForm').form.loadRecord(currentSel);
                        this_.companyModifyForm.show();
                    }
                }, '-', {
                    id: 'company_delete_button',
                    text: '删除信息',
                    disabled: true,
                    tooltip: '删除某个校友填报的信息',
                    handler: function () {
                        Ext.MessageBox.confirm('确定', '是否要删除 ' + currentSel.data.name + ' ?', function (btn, text) {
                            if (btn == "yes") {
                                Ext.Ajax.request({
                                    url: '/structure/company/controller/manager_delcompany.php',
                                    params: {
                                        id: currentSel.data.id
                                    },
                                    success: function (response) {
                                        this_.store.reload();
                                        companySelModel.deselectAll();
                                        Ext.getCmp("company_modify_button").setDisabled(true);
                                        Ext.getCmp("company_delete_button").setDisabled(true);
                                    }
                                });
                            }
                        });
                    }
                }],
                bbar: Ext.create('Ext.PagingToolbar', {
                    store: this.store,
                    displayInfo: true,
                    displayMsg: '显示 {0} - {1} 条，共计 {2} 条',
                    emptyMsg: "没有数据"
                })
            });
            this.store.load();
        }
        return win;
    },
    currentSel: null,
    companyModifyForm: Ext.create('Ext.window.Window', {
        id : 'companyModifyWindow',
        layout: 'fit',
        title: '修改用户信息',
        closeAction: 'hide',
        width: 740,
        height: 480,
        border: false,
        modal: true,
        items: [{
            id: 'companyModifyForm',
            xtype: 'form',
            bodyPadding: 5,
            frame: true,
            url: '/structure/company/controller/manager_company_modify.php',
            layout: 'anchor',
            defaultType: 'textfield',
            fieldDefaults: {
                labelAlign: 'left',
                labelWidth: 80,
                anchor: '80%'
            },
            items: [{
                xtype: 'hidden',
                name: 'id'
            }, {
                xtype: 'hidden',
                name: 'open_id'
            }, {
                fieldLabel: '企业全称',
                name: 'name',
                allowBlank: false
            }, {
                fieldLabel: '行业类别',
                name: 'career_type',
                allowBlank: false
            }, {
                fieldLabel: '企业性质',
                name: 'company_nature',
                allowBlank: false
            }, {
                fieldLabel: '办公地址',
                name: 'location',
                allowBlank: false
            }, {
                fieldLabel: '联系人',
                name: 'contactor',
                allowBlank: false
            }, {
                fieldLabel: '联系电话',
                name: 'tel',
                allowBlank: false
            }, {
                fieldLabel: '邮箱',
                name: 'email',
                allowBlank: false
            }, {
                fieldLabel: '您认为校友会能为贵单位做些什么',
                name: 'descript',
                xtype : 'textfield',
                allowBlank: true
            }],
            buttons: [
                {
                    text: '重置',
                    handler: function () {
                        Ext.getCmp('companyModifyForm').getForm().reset();
                    }
                },
                {
                    text: '提交',
                    formBind: true, // only enabled once the form is valid
                    disabled: false,
                    handler: function () {
                        var form = Ext.getCmp('companyModifyForm').getForm();
                        if (form.isValid()) {
                            form.submit({
                                success: function (form1, action) {
                                    Ext.getCmp("company_modify_button").setDisabled(true);
                                    Ext.getCmp("company_delete_button").setDisabled(true);
                                    Ext.Msg.alert('成功', '修改成功。');
                                    Ext.getCmp('companyModifyWindow').close();
                                    companySelModel.deselectAll();
                                    companyStore.reload();
                                },
                                failure: function (form, action) {
                                    Ext.getCmp("company_modify_button").setDisabled(true);
                                    Ext.getCmp("company_delete_button").setDisabled(true);
                                    companySelModel.deselectAll();
                                    Ext.Msg.alert('失败', '请刷新后重试。');
                                }
                            });
                        }
                    }
                }]
        }]
    })
});
