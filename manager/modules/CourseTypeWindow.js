/*!
 * Ext JS Library 4.0
 * Copyright(c) 2006-2011 Sencha Inc.
 * licensing@sencha.com
 * http://www.sencha.com/license
 */
var courseTypeStore = Ext.create('Ext.data.Store', {
    fields: ['id', 'name', 'delete_'],
    autoLoad: false,
    proxy: {
        extraParams: {},
        type: 'rest',
        url: '/structure/course_introduce/controller/manager_listcourse_type.php',// get_order_list.htm',
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

var currentSel = null;
var courseTypeSelModel = null;

function getCourseTypeSelModel(){
   courseTypeSelModel = Ext.create('Ext.selection.CheckboxModel', {
        mode: 'SINGLE',
        listeners: {
            beforeselect: function (catgegory, record, index, obj) {
            },
            selectionchange: function (sm, selections) {
            },
            select: function (courseType, record, index, obj) {
                currentSel = record;
                Ext.getCmp("coursetype_modify_button").setDisabled(false);
                Ext.getCmp("coursetype_delete_button").setDisabled(false);
            }
        }
    });
    return courseTypeSelModel;
}


Ext.define('MyDesktop.CourseTypeWindow', {
    extend: 'Ext.ux.desktop.Module',
    requires: [
        'Ext.data.ArrayStore',
        'Ext.util.Format',
        'Ext.grid.Panel',
        'Ext.grid.RowNumberer'
    ],

    id: 'courseType-win',

    init: function () {
        this.launcher = {
            text: '类型管理'
        };
    },

    store: courseTypeStore,

    createWindow: function () {
        var this_ = this;
        var desktop = this_.app.getDesktop();
        var win = desktop.getWindow('courseType-win');
        if (!win) {
            win = desktop.createWindow({
                id: 'courseType-win',
                title: '类型信息管理',
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
                        selModel: getCourseTypeSelModel(),
                        columns: [
                            {
                                text: "id",
                                width: 30,
                                sortable: true,
                                dataIndex: 'id'
                            },
                            {
                                text: "名称",
                                width: 300,
                                sortable: true,
                                dataIndex: 'name'
                            },
                            {
                                text: "是否删除",
                                width: 70,
                                sortable: true,
                                dataIndex: 'delete_',
                                renderer: deleteRender
                            }
                        ]
                    }
                ],
                tbar: [{
                    id: 'coursetype_add_button',
                    text: '添加类型',
                    tooltip: '添加类型填报信息',
                    handler: function () {
                        Ext.getCmp('courseTypeAddForm').form.reset();
                        this_.courseTypeAddForm.show();
                    }
                }, '-', {
                    id: 'coursetype_modify_button',
                    text: '修改类型',
                    disabled: true,
                    tooltip: '修改某个类型填报的信息',
                    handler: function () {
                        Ext.getCmp('courseTypeModifyForm').form.loadRecord(currentSel);
                        this_.courseTypeModifyForm.show();
                    }
                }, '-', {
                    id: 'coursetype_delete_button',
                    text: '删除信息',
                    disabled: true,
                    tooltip: '删除某个类型填报的信息',
                    handler: function () {
                        Ext.MessageBox.confirm('确定', '是否要删除 ' + currentSel.data.name + ' ?', function (btn, text) {
                            if (btn == "yes") {
                                Ext.Ajax.request({
                                    url: '/structure/course_introduce/controller/manager_delcourse_type.php',
                                    params: {
                                        id: currentSel.data.id
                                    },
                                    success: function (response) {
                                        this_.store.reload();
                                        courseTypeSelModel.deselectAll();
                                        Ext.getCmp("coursetype_modify_button").setDisabled(true);
                                        Ext.getCmp("coursetype_delete_button").setDisabled(true);
                                    }
                                });
                            }
                        });
                    }
                }]
            });
            this.store.load();
        }
        return win;
    },
    courseTypeModifyForm: Ext.create('Ext.window.Window', {
        id : 'courseTypeModifyWindow',
        layout: 'fit',
        title: '修改类型信息',
        closeAction: 'hide',
        width: 740,
        height: 480,
        border: false,
        modal: true,
        items: [{
            id: 'courseTypeModifyForm',
            xtype: 'form',
            bodyPadding: 5,
            frame: true,
            url: '/structure/course_introduce/controller/manager_coursetype_modify.php',
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
                fieldLabel: '类型',
                name: 'name',
                allowBlank: false
            }],
            buttons: [
                {
                    text: '重置',
                    handler: function () {
                        Ext.getCmp('courseTypeModifyForm').getForm().reset();
                    }
                },
                {
                    text: '提交',
                    formBind: true, // only enabled once the form is valid
                    disabled: false,
                    handler: function () {
                        var form = Ext.getCmp('courseTypeModifyForm').getForm();
                        if (form.isValid()) {
                            form.submit({
                                success: function (form1, action) {
                                    Ext.Msg.alert('成功', '修改成功。');
                                    Ext.getCmp('courseTypeModifyWindow').close();
                                    Ext.getCmp("coursetype_modify_button").setDisabled(true);
                                    Ext.getCmp("coursetype_delete_button").setDisabled(true);
                                    courseTypeSelModel.deselectAll();
                                    courseTypeStore.reload();
                                },
                                failure: function (form, action) {
                                    courseTypeSelModel.deselectAll();
                                    Ext.getCmp("coursetype_modify_button").setDisabled(true);
                                    Ext.getCmp("coursetype_delete_button").setDisabled(true);
                                    Ext.Msg.alert('失败', '请刷新后重试。');
                                }
                            });
                        }
                    }
                }]
        }]
    }),
    courseTypeAddForm: Ext.create('Ext.window.Window', {
        id : 'courseTypeAddWindow',
        layout: 'fit',
        title: '添加类型信息',
        closeAction: 'hide',
        width: 740,
        height: 480,
        border: false,
        modal: true,
        items: [{
            id: 'courseTypeAddForm',
            xtype: 'form',
            bodyPadding: 5,
            frame: true,
            url: '/structure/course_introduce/controller/manager_coursetype_add.php',
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
                fieldLabel: '类型',
                name: 'name',
                allowBlank: false
            }],
            buttons: [
                {
                    text: '重置',
                    handler: function () {
                        Ext.getCmp('courseTypeAddForm').getForm().reset();
                    }
                },
                {
                    text: '提交',
                    formBind: true, // only enabled once the form is valid
                    disabled: false,
                    handler: function () {
                        var form = Ext.getCmp('courseTypeAddForm').getForm();
                        if (form.isValid()) {
                            form.submit({
                                success: function (form1, action) {
                                    Ext.Msg.alert('成功', '添加成功。');
                                    Ext.getCmp('courseTypeAddWindow').close();
                                    Ext.getCmp("coursetype_modify_button").setDisabled(true);
                                    Ext.getCmp("coursetype_delete_button").setDisabled(true);
                                    courseTypeSelModel.deselectAll();
                                    courseTypeStore.reload();
                                },
                                failure: function (form, action) {
                                    courseTypeSelModel.deselectAll();
                                    Ext.getCmp("coursetype_modify_button").setDisabled(true);
                                    Ext.getCmp("coursetype_delete_button").setDisabled(true);
                                    Ext.Msg.alert('失败', '请刷新后重试。');
                                }
                            });
                        }
                    }
                }]
        }]
    })
});
