/*!
 * Ext JS Library 4.0
 * Copyright(c) 2006-2011 Sencha Inc.
 * licensing@sencha.com
 * http://www.sencha.com/license
 */
Ext.apply(Ext.form.VTypes, {
    imageUpload: function(val, field) {
        var fileName = /^.*\.(png|jpg|jpeg)$/i;
        return fileName.test(val);
    },
    imageUploadText: '图片文件必须是 png,jpg,jpeg 后缀的文件'
});

var indexContentStore = Ext.create('Ext.data.Store', {
    fields: ['id', 'content', 'title'],
    autoLoad: false,
    pageSize: 20,
    proxy: {
        extraParams: {},
        type: 'rest',
        url: '/structure/index_content/controller/get_index_content.php',
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

var indexContentSelModel = null;
function getIndexContentSelModel(){
    indexContentSelModel = Ext.create('Ext.selection.CheckboxModel', {
        mode: 'SINGLE',
        listeners: {
            beforeselect: function (catgegory, record, index, obj) {
            },
            selectionchange: function (sm, selections) {
            },
            select: function (indexContent, record, index, obj) {
                currentSel = record;
                Ext.getCmp("indexContent_modify_button").setDisabled(false);
            }
        }
    });
    return indexContentSelModel;
}

Ext.define('MyDesktop.IndexContentWindow', {
    extend: 'Ext.ux.desktop.Module',
    requires: [
        'Ext.data.ArrayStore',
        'Ext.util.Format',
        'Ext.grid.Panel',
        'Ext.grid.RowNumberer'
    ],

    id: 'indexcontent-win',

    init: function () {
        this.launcher = {
            text: 'indexContent管理'
        };
    },

    store: indexContentStore,

    createWindow: function () {
        var this_ = this;
        var desktop = this_.app.getDesktop();
        var win = desktop.getWindow('indexcontent-win');
        if (!win) {
            win = desktop.createWindow({
                id: 'indexcontent-win',
                title: '四格内容信息管理',
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
                        selModel: getIndexContentSelModel(),
                        columns: [
                            {
                                text: "id",
                                width: 30,
                                sortable: true,
                                dataIndex: 'id'
                            },
                            {
                                text: "题目",
                                width: 120,
                                sortable: true,
                                dataIndex: 'title'
                            },
                            {
                                text: "内容",
                                width: 500,
                                sortable: true,
                                dataIndex: 'content'
                            }
                        ]
                    }
                ],
                tbar: [{
                    id: 'indexContent_modify_button',
                    text: '修改信息',
                    disabled: true,
                    tooltip: '修改某个四格内容填报的信息',
                    handler: function () {
                        Ext.getCmp('indexContentModifyForm').form.loadRecord(currentSel);
                        this_.indexContentModifyForm.show();
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
    indexContentModifyForm: Ext.create('Ext.window.Window', {
        id : 'indexContentModifyWindow',
        layout: 'fit',
        title: '修改四格内容信息',
        closeAction: 'hide',
        width: 650,
        height: 400,
        border: false,
        modal: true,
        items: [{
            id: 'indexContentModifyForm',
            xtype: 'form',
            bodyPadding: 5,
            frame: true,
            url: '/structure/index_content/controller/manager_indexcontent_modify.php',
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
            },{
                fieldLabel: '题目',
                name: 'title',
                allowBlank: true
            }, {
                fieldLabel: '内容',
                name: 'content',
                allowBlank: true
            }],
            buttons: [
                {
                    text: '重置',
                    handler: function () {
                        Ext.getCmp('indexContentModifyForm').getForm().reset();
                    }
                },
                {
                    text: '提交',
                    formBind: true, // only enabled once the form is valid
                    disabled: false,
                    handler: function () {
                        var form = Ext.getCmp('indexContentModifyForm').getForm();
                        if (form.isValid()) {
                            form.submit({
                                success: function () {
                                    Ext.getCmp("indexContent_modify_button").setDisabled(true);
                                    Ext.Msg.alert('成功', '修改成功。');
                                    Ext.getCmp('indexContentModifyWindow').close();
                                    indexContentSelModel.deselectAll();
                                    indexContentStore.reload();
                                },
                                failure: function () {
                                    Ext.getCmp("indexContent_modify_button").setDisabled(true);
                                    indexContentSelModel.deselectAll();
                                    Ext.Msg.alert('失败', '请刷新后重试。');
                                }
                            });
                        }
                    }
                }]
        }]
    })
});
