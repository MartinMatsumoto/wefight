/*!
 * Ext JS Library 4.0
 * Copyright(c) 2006-2011 Sencha Inc.
 * licensing@sencha.com
 * http://www.sencha.com/license
 */
var courseRender = function (val) {
    if (val == 1) {
        return '醉聚绵职';
    } else if (val == 2) {
        return '首善蓉城';
    }
    return val;
}

var courseContentContainerId = "";

var courseStore = Ext.create('Ext.data.Store', {
    fields: ['id', 'title', 'author', 'create_date', 'sub_title', 'type', 'delete_', 'course_content'],
    autoLoad: false,
    pageSize: 20,
    proxy: {
        extraParams: {},
        type: 'rest',
        url: '/structure/course/controller/manager_listcourse.php',
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

var courseAddContentForm = Ext.create('Ext.window.Window', {
    id : 'courseAddContentWindow',
    layout: 'fit',
    title: '增加文章内容',
    closeAction: 'hide',
    width: 600,
    height: 200,
    border: false,
    modal: true,
    items: [{
        id: 'courseAddContentForm',
        xtype: 'form',
        bodyPadding: 5,
        frame: true,
        layout: 'anchor',
        defaultType: 'textfield',
        fieldDefaults: {
            labelAlign: 'left',
            labelWidth: 80,
            anchor: '80%'
        },
        items: [{
            id : 'courseAddContentContent',
            fieldLabel: '内容',
            name: 'title',
            xtype : 'textarea',
            allowBlank: false
        }],
        buttons: [
            {
                text: '重置',
                handler: function () {
                    Ext.getCmp('courseAddContentForm').getForm().reset();
                }
            },
            {
                text: '确定',
                formBind: true, // only enabled once the form is valid
                disabled: false,
                handler: function () {
                    var form = Ext.getCmp('courseAddContentForm').getForm();
                    var content = Ext.getCmp('courseAddContentContent').getValue();
                    if (form.isValid()) {
                        courseAddContent(content,1);
                        Ext.getCmp('courseAddContentForm').getForm().reset();
                        Ext.getCmp('courseAddContentWindow').close();
                    }
                }
            }]
    }]
});

var courseAddContent = function (content, type) {
    var courseContentContainer = Ext.getCmp(courseContentContainerId);
    var _checkField;
    if(type == 1){
        _checkField = new Ext.form.FieldSet(
            {
                items :
                    [{
                        xtype : 'displayfield',
                        value : content
                    }, {
                        xtype : 'hidden',
                        name : 'content[]',
                        value : content
                    }, {
                        xtype : 'hidden',
                        name : 'content_type[]',
                        value : type
                    }, {
                        xtype : 'button',
                        text : '删除',
                        handler : function()
                        {
                            _checkField.destroy();
                        }
                    }]
            });
    } else {
        _checkField = new Ext.form.FieldSet(
            {
                items : [{
                    xtype: 'hidden',
                    name : 'content[]',
                    value: content
                }, {
                    xtype : 'image',
                    fieldLabel : '图片',
                    height : 90,
                    src : content
                }, {
                    xtype : 'hidden',
                    name : 'content_type[]',
                    value : type
                }, {
                    xtype: 'button',
                    text: '删除',
                    handler: function () {
                        _checkField.destroy();
                    }
                }]
            });
    }
    courseContentContainer.add(_checkField);
}

var courseAddImageForm = Ext.create('Ext.window.Window', {
    id : 'courseAddImageWindow',
    layout: 'fit',
    title: '增加文章图片',
    closeAction: 'hide',
    width: 600,
    height: 200,
    border: false,
    modal: true,
    items: [{
        id: 'courseAddImageForm',
        xtype: 'form',
        bodyPadding: 5,
        frame: true,
        url: '/structure/course/controller/manager_course_add_image.php',
        layout: 'anchor',
        defaultType: 'textfield',
        fieldDefaults: {
            labelAlign: 'left',
            labelWidth: 80,
            anchor: '80%'
        },
        items: [{
            id : 'courseAddImageContent',
            fieldLabel: '图片',
            name: 'image',
            xtype : 'filefield',
            allowBlank: false
        }],
        buttons: [
            {
                text: '上传',
                handler: function () {
                    var form = Ext.getCmp('courseAddImageForm').getForm();
                    if (form.isValid()) {
                        form.submit({
                            success: function (form1, action ,c, d) {
                                courseAddContent(action.result.content,2);
                                Ext.getCmp('courseAddImageForm').getForm().reset();
                                Ext.getCmp('courseAddImageWindow').close();
                            },
                            failure: function (form, action) {
                                Ext.getCmp('courseAddImageWindow').close();
                                Ext.Msg.alert('失败', '请刷新后重试。');
                            }
                        });
                    }
                }
            }]
    }]
});

var courseSelModel = null;
function getCourseSelModel(){
    courseSelModel = Ext.create('Ext.selection.CheckboxModel', {
        mode: 'SINGLE',
        listeners: {
            beforeselect: function (catgegory, record, index, obj) {
            },
            selectionchange: function (sm, selections) {
            },
            select: function (course, record, index, obj) {
                currentSel = record;
                Ext.getCmp("course_modify_button").setDisabled(false);
                Ext.getCmp("course_delete_button").setDisabled(false);
                Ext.getCmp("course_enable_button").setDisabled(false);
            }
        }
    });
    return courseSelModel;
}

var initModifyCourse = function(id){
    Ext.Ajax.request({
        url: '/structure/course/controller/manager_listcourse_content.php',
        params: {
            id: id
        },
        method: 'POST',
        success: function (response, options) {
            var json = Ext.decode(response.responseText);
            if(json.content){
                var contents = json.content;
                for (var i = 0; i < contents.length; i++) {
                    courseAddContent(contents[i].content,contents[i].type);
                }
            }
        },
        failure: function (response, options) {
            Ext.MessageBox.alert('失败', '请求超时或网络故障,错误编号：'+ response.status);
        }
    });
}

Ext.define('MyDesktop.CourseWindow', {
    extend: 'Ext.ux.desktop.Module',
    requires: [
        'Ext.data.ArrayStore',
        'Ext.util.Format',
        'Ext.grid.Panel',
        'Ext.grid.RowNumberer'
    ],

    id: 'course-win',

    init: function () {
        this.launcher = {
            text: '文章管理'
        };
    },

    store: courseStore,

    createWindow: function () {
        var this_ = this;
        var desktop = this_.app.getDesktop();
        var win = desktop.getWindow('course-win');
        if (!win) {
            win = desktop.createWindow({
                id: 'course-win',
                title: '文章信息管理',
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
                        selModel: getCourseSelModel(),
                        columns: [
                            {
                                text: "id",
                                width: 30,
                                sortable: true,
                                dataIndex: 'id'
                            },
                            {
                                text: "标题",
                                width: 70,
                                sortable: true,
                                dataIndex: 'title'
                            },
                            {
                                text: "作者",
                                width: 70,
                                sortable: true,
                                dataIndex: 'author'
                            },
                            {
                                text: "创建时间",
                                width: 120,
                                sortable: true,
                                dataIndex: 'create_date'
                            },
                            {
                                text: "副标题",
                                width: 120,
                                sortable: true,
                                dataIndex: 'sub_title'
                            },
                            {
                                text: "类型",
                                width: 70,
                                sortable: true,
                                dataIndex: 'type',
                                renderer: courseRender
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
                    id: 'course_add_button',
                    text: '增加文章',
                    tooltip: '增加文章',
                    handler: function () {
                        this_.courseAddForm.show();
                    }
                }, '-', {
                    id: 'course_modify_button',
                    text: '修改信息',
                    disabled: true,
                    tooltip: '修改某个文章填报的信息',
                    handler: function () {
                        Ext.getCmp('courseModifyForm').form.loadRecord(currentSel);
                        this_.courseModifyForm.show();
                        initModifyCourse(currentSel.data.id);

                    }
                }, '-', {
                    id: 'course_delete_button',
                    text: '删除文章',
                    disabled: true,
                    tooltip: '删除某个文章填报的信息',
                    handler: function () {
                        Ext.MessageBox.confirm('确定', '是否要删除文章?', function (btn, text) {
                            if (btn == "yes") {
                                Ext.Ajax.request({
                                    url: '/structure/course/controller/manager_delcourse.php',
                                    params: {
                                        id: currentSel.data.id
                                    },
                                    success: function (response) {
                                        this_.store.reload();
                                        courseSelModel.deselectAll();
                                        Ext.getCmp("course_modify_button").setDisabled(true);
                                        Ext.getCmp("course_delete_button").setDisabled(true);
                                        Ext.getCmp("course_enable_button").setDisabled(true);
                                    }
                                });
                            }
                        });
                    }
                }, '-', {
                    id: 'course_enable_button',
                    text: '恢复文章',
                    disabled: true,
                    tooltip: '恢复某个文章填报的信息',
                    handler: function () {
                        Ext.MessageBox.confirm('确定', '是否要恢复文章?', function (btn, text) {
                            if (btn == "yes") {
                                Ext.Ajax.request({
                                    url: '/structure/course/controller/manager_enablecourse.php',
                                    params: {
                                        id: currentSel.data.id
                                    },
                                    success: function (response) {
                                        this_.store.reload();
                                        courseSelModel.deselectAll();
                                        Ext.getCmp("course_modify_button").setDisabled(true);
                                        Ext.getCmp("course_delete_button").setDisabled(true);
                                        Ext.getCmp("course_enable_button").setDisabled(true);
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
    courseModifyForm: Ext.create('Ext.window.Window', {
        id : 'courseModifyWindow',
        layout: 'fit',
        title: '修改用户信息',
        closeAction: 'hide',
        width: 740,
        height: 480,
        border: false,
        modal: true,
        listeners :
        {
            show :
            {
                fn : function()
                {
                    courseContentContainerId = "course_modify_content_container";
                }
            },
            hide : {
                fn : function(){
                    Ext.getCmp('course_modify_content_container').removeAll();
                }
            }
        },
        items: [{
            id: 'courseModifyForm',
            autoScroll : true,
            xtype: 'form',
            bodyPadding: 5,
            frame: true,
            url: '/structure/course/controller/manager_course_modify.php',
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
                name: 'type',
                size: 5,
                allowBlank: false,
                xtype: 'combo',
                mode: 'local',
                value: '1',
                forceSelection: true,
                editable: false,
                typeAhead: true,
                displayField: 'name',
                valueField: 'value',
                queryMode: 'local',
                store: Ext.create('Ext.data.Store', {
                    fields: ['name', 'value'],
                    data: [{
                        name: '醉聚绵职',
                        value: '1'
                    }, {
                        name: '首善蓉城',
                        value: '2'
                    }]
                })
            }, {
                fieldLabel: '标题',
                name: 'title',
                allowBlank: false
            }, {
                fieldLabel: '作者',
                name: 'author',
                allowBlank: false
            }, {
                fieldLabel: '创建时间',
                xtype : 'datefield',
                format : 'Y-m-d',
                editable : false,
                name: 'create_date',
                allowBlank: false
            }, {
                fieldLabel: '副标题',
                name: 'sub_title',
                allowBlank: false
            }, {
                id : 'course_modify_content_container',
                title : '内容',
                xtype : 'fieldset',
                items : []
            }, {
                xtype : 'button',
                text : '插入段落',
                allowBlank: false,
                handler : function(){
                    courseAddContentForm.show();
                }
            }, {
                xtype : 'button',
                text : '插入图片',
                allowBlank: false,
                handler : function(){
                    courseAddImageForm.show();
                }
            }],
            buttons: [
                {
                    text: '重置',
                    handler: function () {
                        Ext.getCmp('courseModifyForm').getForm().reset();
                    }
                },
                {
                    text: '提交',
                    formBind: true, // only enabled once the form is valid
                    disabled: false,
                    handler: function () {
                        var form = Ext.getCmp('courseModifyForm').getForm();
                        if (form.isValid()) {
                            form.submit({
                                success: function (form1, action) {
                                    Ext.getCmp("course_modify_button").setDisabled(true);
                                    Ext.getCmp("course_delete_button").setDisabled(true);
                                    Ext.getCmp("course_enable_button").setDisabled(true);
                                    Ext.getCmp('courseModifyForm').getForm().reset();
                                    Ext.getCmp('course_modify_content_container').removeAll();
                                    Ext.Msg.alert('成功', '文章修改成功。');
                                    Ext.getCmp('courseModifyWindow').close();
                                    courseSelModel.deselectAll();
                                    courseStore.reload();
                                },
                                failure: function (form, action) {
                                    Ext.getCmp("course_modify_button").setDisabled(true);
                                    Ext.getCmp("course_delete_button").setDisabled(true);
                                    Ext.getCmp("course_enable_button").setDisabled(true);
                                    courseSelModel.deselectAll();
                                    Ext.Msg.alert('失败', '请刷新后重试。');
                                }
                            });
                        }
                    }
                }]
        }]
    }),
    courseAddForm: Ext.create('Ext.window.Window', {
        id : 'courseAddWindow',
        layout: 'fit',
        title: '增加文章',
        closeAction: 'hide',
        width: 740,
        height: 480,
        border: false,
        modal: true,
        listeners :
        {
            show :
            {
                fn : function()
                {
                    courseContentContainerId = "course_content_container";
                }
            }
        },
        items: [{
            id: 'courseAddForm',
            xtype: 'form',
            bodyPadding: 5,
            frame: true,
            autoScroll : true,
            url: '/structure/course/controller/manager_course_add.php',
            layout: 'anchor',
            defaultType: 'textfield',
            fieldDefaults: {
                labelAlign: 'left',
                labelWidth: 80,
                anchor: '80%'
            },
            items: [{
                fieldLabel: '类型',
                name: 'type',
                size: 5,
                allowBlank: false,
                xtype: 'combo',
                mode: 'local',
                value: '1',
                forceSelection: true,
                editable: false,
                typeAhead: true,
                displayField: 'name',
                valueField: 'value',
                queryMode: 'local',
                store: Ext.create('Ext.data.Store', {
                    fields: ['name', 'value'],
                    data: [{
                        name: '醉聚绵职',
                        value: '1'
                    }, {
                        name: '首善蓉城',
                        value: '2'
                    }]
                })
            }, {
                fieldLabel: '标题',
                name: 'title',
                allowBlank: false
            }, {
                fieldLabel: '作者',
                name: 'author',
                allowBlank: false
            }, {
                fieldLabel: '创建时间',
                xtype : 'datefield',
                format : 'Y-m-d',
                editable : false,
                name: 'create_date',
                allowBlank: false
            }, {
                fieldLabel: '副标题',
                name: 'sub_title',
                allowBlank: false
            }, {
                id : 'course_content_container',
                title : '内容',
                xtype : 'fieldset',
                items : []
            }, {
                xtype : 'button',
                text : '插入段落',
                allowBlank: false,
                handler : function(){
                    courseAddContentForm.show();
                }
            }, {
                xtype : 'button',
                text : '插入图片',
                allowBlank: false,
                handler : function(){
                    courseAddImageForm.show();
                }
            }],
            buttons: [
                {
                    text: '重置',
                    handler: function () {
                        Ext.getCmp('courseAddForm').getForm().reset();
                        Ext.getCmp('course_content_container').removeAll();
                    }
                },
                {
                    text: '提交',
                    formBind: true, // only enabled once the form is valid
                    disabled: false,
                    handler: function () {
                        var form = Ext.getCmp('courseAddForm').getForm();
                        if (form.isValid()) {
                            form.submit({
                                success: function (form1, action) {
                                    Ext.getCmp("course_modify_button").setDisabled(true);
                                    Ext.getCmp("course_delete_button").setDisabled(true);
                                    Ext.getCmp("course_enable_button").setDisabled(true);
                                    Ext.getCmp('courseAddForm').getForm().reset();
                                    Ext.getCmp('course_content_container').removeAll();
                                    Ext.Msg.alert('成功', '文章添加成功。');
                                    Ext.getCmp('courseAddWindow').close();
                                    courseSelModel.deselectAll();
                                    courseStore.reload();
                                },
                                failure: function (form, action) {
                                    Ext.getCmp("course_modify_button").setDisabled(true);
                                    Ext.getCmp("course_delete_button").setDisabled(true);
                                    Ext.getCmp("course_enable_button").setDisabled(true);
                                    courseSelModel.deselectAll();
                                    Ext.Msg.alert('失败', '请刷新后重试。');
                                }
                            });
                        }
                    }
                }]
        }]
    })
});
