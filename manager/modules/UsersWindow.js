/*!
 * Ext JS Library 4.0
 * Copyright(c) 2006-2011 Sencha Inc.
 * licensing@sencha.com
 * http://www.sencha.com/license
 */
var sexRender = function (val) {
    if (val == 1) {
        return '<span style="color:green;">男</span>';
    } else if (val == 2) {
        return '<span style="color:red;">女</span>';
    } else {
        return '<span style="color:gray;">未知</span>';
    }
    return val;
}

//设置图片路径
function getpicPathUserModify()
{
    var PICTURE_URL = Ext.getCmp("user_cover_url_modify").getValue();
    if (!Ext.isEmpty(PICTURE_URL)) {
        Ext.getCmp("imageUserPathshow").getEl().dom.src = PICTURE_URL;
    } else {
        Ext.getCmp("imageUserPathshow").getEl().dom.src = "";
    }
}

var userStore = Ext.create('Ext.data.Store', {
    fields: ['id', 'name', 'sex', 'career', 'intro', 'cover_url', 'delete_'],
    autoLoad: false,
    proxy: {
        extraParams: {},
        type: 'rest',
        url: '/structure/group/controller/manager_listuser.php',// get_order_list.htm',
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
var userSelModel = null;

function getUserSelModel(){
   userSelModel = Ext.create('Ext.selection.CheckboxModel', {
        mode: 'SINGLE',
        listeners: {
            beforeselect: function (catgegory, record, index, obj) {
            },
            selectionchange: function (sm, selections) {
            },
            select: function (user, record, index, obj) {
                currentSel = record;
                Ext.getCmp("user_modify_button").setDisabled(false);
                Ext.getCmp("user_delete_button").setDisabled(false);
            }
        }
    });
    return userSelModel;
}


Ext.define('MyDesktop.UsersWindow', {
    extend: 'Ext.ux.desktop.Module',
    requires: [
        'Ext.data.ArrayStore',
        'Ext.util.Format',
        'Ext.grid.Panel',
        'Ext.grid.RowNumberer'
    ],

    id: 'user-win',

    init: function () {
        this.launcher = {
            text: '教师管理'
        };
    },

    store: userStore,

    createWindow: function () {
        var this_ = this;
        var desktop = this_.app.getDesktop();
        var win = desktop.getWindow('user-win');
        if (!win) {
            win = desktop.createWindow({
                id: 'user-win',
                title: '教师信息管理',
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
                        selModel: getUserSelModel(),
                        columns: [
                            {
                                text: "id",
                                width: 30,
                                sortable: true,
                                dataIndex: 'id'
                            },
                            {
                                text: "姓名",
                                width: 70,
                                sortable: true,
                                dataIndex: 'name'
                            },
                            {
                                text: "性別",
                                width: 45,
                                sortable: true,
                                dataIndex: 'sex',
                                renderer: sexRender
                            },
                            {
                                text: "职位",
                                width: 120,
                                sortable: true,
                                dataIndex: 'career'
                            },
                            {
                                text: "简介",
                                width: 350,
                                sortable: true,
                                dataIndex: 'intro'
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
                    id: 'user_add_button',
                    text: '添加教师',
                    tooltip: '添加教师填报信息',
                    handler: function () {
                        Ext.getCmp('userAddForm').form.reset();
                        this_.userAddForm.show();
                    }
                }, '-', {
                    id: 'user_modify_button',
                    text: '修改教师',
                    disabled: true,
                    tooltip: '修改某个教师填报的信息',
                    handler: function () {
                        Ext.getCmp('userModifyForm').form.loadRecord(currentSel);
                        this_.userModifyForm.show();
                        getpicPathUserModify();
                    }
                }, '-', {
                    id: 'user_delete_button',
                    text: '删除信息',
                    disabled: true,
                    tooltip: '删除某个教师填报的信息',
                    handler: function () {
                        Ext.MessageBox.confirm('确定', '是否要删除 ' + currentSel.data.name + ' ?', function (btn, text) {
                            if (btn == "yes") {
                                Ext.Ajax.request({
                                    url: '/structure/group/controller/manager_deluser.php',
                                    params: {
                                        id: currentSel.data.id
                                    },
                                    success: function (response) {
                                        this_.store.reload();
                                        userSelModel.deselectAll();
                                        Ext.getCmp("user_modify_button").setDisabled(true);
                                        Ext.getCmp("user_delete_button").setDisabled(true);
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
    userModifyForm: Ext.create('Ext.window.Window', {
        id : 'userModifyWindow',
        layout: 'fit',
        title: '修改用户信息',
        closeAction: 'hide',
        width: 740,
        height: 480,
        border: false,
        modal: true,
        items: [{
            id: 'userModifyForm',
            xtype: 'form',
            bodyPadding: 5,
            frame: true,
            url: '/structure/group/controller/manager_user_modify.php',
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
                fieldLabel: '用户姓名',
                name: 'name',
                allowBlank: false
            }, {
                fieldLabel: '性别',
                name: 'sex',
                size: 5,
                allowBlank: false,
                xtype: 'combo',
                mode: 'local',
                value: '0',
                forceSelection: true,
                editable: false,
                typeAhead: true,
                displayField: 'name',
                valueField: 'value',
                queryMode: 'local',
                store: Ext.create('Ext.data.Store', {
                    fields: ['name', 'value'],
                    data: [{
                        name: '未知',
                        value: '0'
                    }, {
                        name: '男',
                        value: '1'
                    }, {
                        name: '女',
                        value: '2'
                    }]
                })
            }, {
                name : 'cover_url',
                id : 'user_cover_url_modify',
                xtype : 'hidden'
            }, {
                xtype : 'image',
                fieldLabel : '原始头像',
                width : 115,
                height : 150,
                id : 'imageUserPathshow',
                src : ''
            }, {
                fieldLabel : '重新上传头像',
                name : 'image',
                xtype : 'filefield',
                vtype:'imageUpload',
                allowBlank : true
            }, {
                fieldLabel: '职业',
                name: 'career',
                allowBlank: false
            }, {
                fieldLabel: '简介',
                name: 'intro',
                xtype : 'textfield',
                allowBlank: true
            }],
            buttons: [
                {
                    text: '重置',
                    handler: function () {
                        Ext.getCmp('userModifyForm').getForm().reset();
                    }
                },
                {
                    text: '提交',
                    formBind: true, // only enabled once the form is valid
                    disabled: false,
                    handler: function () {
                        var form = Ext.getCmp('userModifyForm').getForm();
                        if (form.isValid()) {
                            form.submit({
                                success: function (form1, action) {
                                    Ext.Msg.alert('成功', '修改成功。');
                                    Ext.getCmp('userModifyWindow').close();
                                    Ext.getCmp("user_modify_button").setDisabled(true);
                                    Ext.getCmp("user_delete_button").setDisabled(true);
                                    userSelModel.deselectAll();
                                    userStore.reload();
                                },
                                failure: function (form, action) {
                                    userSelModel.deselectAll();
                                    Ext.getCmp("user_modify_button").setDisabled(true);
                                    Ext.getCmp("user_delete_button").setDisabled(true);
                                    Ext.Msg.alert('失败', '请刷新后重试。');
                                }
                            });
                        }
                    }
                }]
        }]
    }),
    userAddForm: Ext.create('Ext.window.Window', {
        id : 'userAddWindow',
        layout: 'fit',
        title: '添加用户信息',
        closeAction: 'hide',
        width: 740,
        height: 480,
        border: false,
        modal: true,
        items: [{
            id: 'userAddForm',
            xtype: 'form',
            bodyPadding: 5,
            frame: true,
            url: '/structure/group/controller/manager_user_add.php',
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
                fieldLabel: '用户姓名',
                name: 'name',
                allowBlank: false
            }, {
                fieldLabel: '性别',
                name: 'sex',
                size: 5,
                allowBlank: false,
                xtype: 'combo',
                mode: 'local',
                value: '0',
                forceSelection: true,
                editable: false,
                typeAhead: true,
                displayField: 'name',
                valueField: 'value',
                queryMode: 'local',
                store: Ext.create('Ext.data.Store', {
                    fields: ['name', 'value'],
                    data: [{
                        name: '未知',
                        value: '0'
                    }, {
                        name: '男',
                        value: '1'
                    }, {
                        name: '女',
                        value: '2'
                    }]
                })
            }, {
                fieldLabel : '上传头像',
                name : 'image',
                xtype : 'filefield',
                vtype:'imageUpload',
                allowBlank : false
            }, {
                fieldLabel: '职业',
                name: 'career',
                allowBlank: false
            }, {
                fieldLabel: '简介',
                name: 'intro',
                xtype : 'textfield',
                allowBlank: true
            }],
            buttons: [
                {
                    text: '重置',
                    handler: function () {
                        Ext.getCmp('userAddForm').getForm().reset();
                    }
                },
                {
                    text: '提交',
                    formBind: true, // only enabled once the form is valid
                    disabled: false,
                    handler: function () {
                        var form = Ext.getCmp('userAddForm').getForm();
                        if (form.isValid()) {
                            form.submit({
                                success: function (form1, action) {
                                    Ext.Msg.alert('成功', '添加成功。');
                                    Ext.getCmp('userAddWindow').close();
                                    Ext.getCmp("user_modify_button").setDisabled(true);
                                    Ext.getCmp("user_delete_button").setDisabled(true);
                                    userSelModel.deselectAll();
                                    userStore.reload();
                                },
                                failure: function (form, action) {
                                    userSelModel.deselectAll();
                                    Ext.getCmp("user_modify_button").setDisabled(true);
                                    Ext.getCmp("user_delete_button").setDisabled(true);
                                    Ext.Msg.alert('失败', '请刷新后重试。');
                                }
                            });
                        }
                    }
                }]
        }]
    })
});
