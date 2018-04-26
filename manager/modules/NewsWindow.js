/*!
 * Ext JS Library 4.0
 * Copyright(c) 2006-2011 Sencha Inc.
 * licensing@sencha.com
 * http://www.sencha.com/license
 */
var newsContentContainerId = "";

var newsInsertIndex = -1;
/**
 * 获得将要插入的段落的下标
 * @param parent
 * @param child
 * @returns {number}
 */
var getContentIndex = function (parent, child) {
    var items = parent.items.items;
    var childId = child.getId();

    if (items && items.length) {
        for (var i = 0; i < items.length; i++) {
            var item = items[i];
            var itemId = item.getId();
            if(childId == itemId){
                return i;
            }
        }
    }

    return 0;
}

//设置图片路径
function getpicPathNewsModify()
{
    var PICTURE_URL = Ext.getCmp("cover_url_modify").getValue();
    if (!Ext.isEmpty(PICTURE_URL)) {
        Ext.getCmp("imageNewsPathshow").getEl().dom.src = PICTURE_URL;
    } else {
        Ext.getCmp("imageNewsPathshow").getEl().dom.src = "";
    }
}

var newsStore = Ext.create('Ext.data.Store', {
    fields: ['id', 'title', 'author', 'create_date', 'sub_title', 'type', 'delete_','cover_url', 'index_show', 'news_content'],
    autoLoad: false,
    pageSize: 20,
    proxy: {
        extraParams: {},
        type: 'rest',
        url: '/structure/news/controller/manager_listnews.php',
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

var newsAddContentForm = Ext.create('Ext.window.Window', {
    id : 'newsAddContentWindow',
    layout: 'fit',
    title: '增加文章内容',
    closeAction: 'hide',
    width: 600,
    height: 200,
    border: false,
    modal: true,
    items: [{
        id: 'newsAddContentForm',
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
            id : 'newsAddContentContent',
            fieldLabel: '内容',
            name: 'title',
            xtype : 'textarea',
            allowBlank: false
        }],
        buttons: [
            {
                text: '重置',
                handler: function () {
                    Ext.getCmp('newsAddContentForm').getForm().reset();
                }
            },
            {
                text: '确定',
                formBind: true, // only enabled once the form is valid
                disabled: false,
                handler: function () {
                    var form = Ext.getCmp('newsAddContentForm').getForm();
                    var content = Ext.getCmp('newsAddContentContent').getValue();
                    if (form.isValid()) {
                        newsAddContent(content,1);
                        Ext.getCmp('newsAddContentForm').getForm().reset();
                        Ext.getCmp('newsAddContentWindow').close();
                    }
                }
            }]
    }]
});

var newsAddContent = function (content, type) {
    var newsContentContainer = Ext.getCmp(newsContentContainerId);
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
                    }, {
                        xtype : 'button',
                        text : '向上插入段落',
                        handler : function()
                        {
                            newsInsertIndex = getContentIndex(newsContentContainer, _checkField);
                            newsAddContentForm.show();
                        }
                    }, {
                        xtype : 'button',
                        text : '向上插入图片',
                        allowBlank: false,
                        handler : function(){
                            newsInsertIndex = getContentIndex(newsContentContainer, _checkField);
                            newsAddImageForm.show();
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
                }, {
                    xtype : 'button',
                    text : '向上插入段落',
                    handler : function()
                    {
                        newsInsertIndex = getContentIndex(newsContentContainer, _checkField);
                        newsAddContentForm.show();
                    }
                }, {
                    xtype : 'button',
                    text : '向上插入图片',
                    allowBlank: false,
                    handler : function(){
                        newsInsertIndex = getContentIndex(newsContentContainer, _checkField);
                        newsAddImageForm.show();
                    }
                }]
            });
    }
    if (newsInsertIndex != -1) {
        newsContentContainer.insert(newsInsertIndex, _checkField);
    } else {
        newsContentContainer.add(_checkField);
    }

}

var newsAddImageForm = Ext.create('Ext.window.Window', {
    id : 'newsAddImageWindow',
    layout: 'fit',
    title: '增加文章图片',
    closeAction: 'hide',
    width: 600,
    height: 200,
    border: false,
    modal: true,
    items: [{
        id: 'newsAddImageForm',
        xtype: 'form',
        bodyPadding: 5,
        frame: true,
        url: '/structure/news/controller/manager_news_add_image.php',
        layout: 'anchor',
        defaultType: 'textfield',
        fieldDefaults: {
            labelAlign: 'left',
            labelWidth: 80,
            anchor: '80%'
        },
        items: [{
            id : 'newsAddImageContent',
            fieldLabel: '图片',
            name: 'image',
            xtype : 'filefield',
            allowBlank: false
        }],
        buttons: [
            {
                text: '上传',
                handler: function () {
                    var form = Ext.getCmp('newsAddImageForm').getForm();
                    if (form.isValid()) {
                        form.submit({
                            success: function (form1, action ,c, d) {
                                newsAddContent(action.result.content,2);
                                Ext.getCmp('newsAddImageForm').getForm().reset();
                                Ext.getCmp('newsAddImageWindow').close();
                            },
                            failure: function (form, action) {
                                Ext.getCmp('newsAddImageWindow').close();
                                Ext.Msg.alert('失败', '请刷新后重试。');
                            }
                        });
                    }
                }
            }]
    }]
});

var newsSelModel = null;
function getNewsSelModel(){
    newsSelModel = Ext.create('Ext.selection.CheckboxModel', {
        mode: 'SINGLE',
        listeners: {
            beforeselect: function (catgegory, record, index, obj) {
            },
            selectionchange: function (sm, selections) {
            },
            select: function (news, record, index, obj) {
                currentSel = record;
                Ext.getCmp("news_modify_button").setDisabled(false);
                Ext.getCmp("news_delete_button").setDisabled(false);
                Ext.getCmp("news_enable_button").setDisabled(false);
            }
        }
    });
    return newsSelModel;
}

var initModifyNews = function(id){
    Ext.Ajax.request({
        url: '/structure/news/controller/manager_listnews_content.php',
        params: {
            id: id
        },
        method: 'POST',
        success: function (response, options) {
            var json = Ext.decode(response.responseText);
            if(json.content){
                var contents = json.content;
                for (var i = 0; i < contents.length; i++) {
                    newsAddContent(contents[i].content,contents[i].type);
                }
            }
        },
        failure: function (response, options) {
            Ext.MessageBox.alert('失败', '请求超时或网络故障,错误编号：'+ response.status);
        }
    });
}

Ext.define('MyDesktop.NewsWindow', {
    extend: 'Ext.ux.desktop.Module',
    requires: [
        'Ext.data.ArrayStore',
        'Ext.util.Format',
        'Ext.grid.Panel',
        'Ext.grid.RowNumberer'
    ],

    id: 'news-win',

    init: function () {
        this.launcher = {
            text: '文章管理'
        };
    },

    store: newsStore,

    createWindow: function () {
        var this_ = this;
        var desktop = this_.app.getDesktop();
        var win = desktop.getWindow('news-win');
        if (!win) {
            win = desktop.createWindow({
                id: 'news-win',
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
                        selModel: getNewsSelModel(),
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
                    id: 'news_add_button',
                    text: '增加文章',
                    tooltip: '增加文章',
                    handler: function () {
                        Ext.getCmp('newsAddForm').getForm().reset();
                        this_.newsAddForm.show();
                    }
                }, '-', {
                    id: 'news_modify_button',
                    text: '修改信息',
                    disabled: true,
                    tooltip: '修改某个文章填报的信息',
                    handler: function () {
                        Ext.getCmp('newsModifyForm').getForm().reset();
                        Ext.getCmp('newsModifyForm').form.loadRecord(currentSel);
                        this_.newsModifyForm.show();
                        getpicPathNewsModify();
                        initModifyNews(currentSel.data.id);
                    }
                }, '-', {
                    id: 'news_delete_button',
                    text: '删除文章',
                    disabled: true,
                    tooltip: '删除某个文章填报的信息',
                    handler: function () {
                        Ext.MessageBox.confirm('确定', '是否要删除文章?', function (btn, text) {
                            if (btn == "yes") {
                                Ext.Ajax.request({
                                    url: '/structure/news/controller/manager_delnews.php',
                                    params: {
                                        id: currentSel.data.id
                                    },
                                    success: function (response) {
                                        this_.store.reload();
                                        newsSelModel.deselectAll();
                                        Ext.getCmp("news_modify_button").setDisabled(true);
                                        Ext.getCmp("news_delete_button").setDisabled(true);
                                        Ext.getCmp("news_enable_button").setDisabled(true);
                                    }
                                });
                            }
                        });
                    }
                }, '-', {
                    id: 'news_enable_button',
                    text: '恢复文章',
                    disabled: true,
                    tooltip: '恢复某个文章填报的信息',
                    handler: function () {
                        Ext.MessageBox.confirm('确定', '是否要恢复文章?', function (btn, text) {
                            if (btn == "yes") {
                                Ext.Ajax.request({
                                    url: '/structure/news/controller/manager_enablenews.php',
                                    params: {
                                        id: currentSel.data.id
                                    },
                                    success: function (response) {
                                        this_.store.reload();
                                        newsSelModel.deselectAll();
                                        Ext.getCmp("news_modify_button").setDisabled(true);
                                        Ext.getCmp("news_delete_button").setDisabled(true);
                                        Ext.getCmp("news_enable_button").setDisabled(true);
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
    newsModifyForm: Ext.create('Ext.window.Window', {
        id : 'newsModifyWindow',
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
                    newsContentContainerId = "news_modify_content_container";
                }
            },
            hide : {
                fn : function(){
                    Ext.getCmp('news_modify_content_container').removeAll();
                }
            }
        },
        items: [{
            id: 'newsModifyForm',
            autoScroll : true,
            xtype: 'form',
            bodyPadding: 5,
            frame: true,
            url: '/structure/news/controller/manager_news_modify.php',
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
                name : 'cover_url',
                id : 'cover_url_modify',
                xtype : 'hidden'
            }, {
                xtype : 'image',
                fieldLabel : '原始封面',
                width : 180,
                height : 90,
                id : 'imageNewsPathshow',
                src : ''
            }, {
                fieldLabel : '重新上传封面',
                name : 'image',
                xtype : 'filefield',
                vtype:'imageUpload',
                allowBlank : true
            }, {
                id : 'news_modify_content_container',
                title : '内容',
                xtype : 'fieldset',
                items : []
            }, {
                xtype : 'button',
                text : '增加段落',
                allowBlank: false,
                handler : function(){
                    newsInsertIndex = -1;
                    newsAddContentForm.show();
                }
            }, {
                xtype : 'button',
                text : '增加图片',
                allowBlank: false,
                handler : function(){
                    newsInsertIndex = -1;
                    newsAddImageForm.show();
                }
            }],
            buttons: [
                {
                    text: '重置',
                    handler: function () {
                        Ext.getCmp('newsModifyForm').getForm().reset();
                    }
                },
                {
                    text: '提交',
                    formBind: true, // only enabled once the form is valid
                    disabled: false,
                    handler: function () {
                        var form = Ext.getCmp('newsModifyForm').getForm();
                        if (form.isValid()) {
                            form.submit({
                                success: function (form1, action) {
                                    Ext.getCmp("news_modify_button").setDisabled(true);
                                    Ext.getCmp("news_delete_button").setDisabled(true);
                                    Ext.getCmp("news_enable_button").setDisabled(true);
                                    Ext.getCmp('newsModifyForm').getForm().reset();
                                    Ext.getCmp('news_modify_content_container').removeAll();
                                    Ext.Msg.alert('成功', '文章修改成功。');
                                    Ext.getCmp('newsModifyWindow').close();
                                    newsSelModel.deselectAll();
                                    newsStore.reload();
                                },
                                failure: function (form, action) {
                                    Ext.getCmp("news_modify_button").setDisabled(true);
                                    Ext.getCmp("news_delete_button").setDisabled(true);
                                    Ext.getCmp("news_enable_button").setDisabled(true);
                                    newsSelModel.deselectAll();
                                    Ext.Msg.alert('失败', '请刷新后重试。');
                                }
                            });
                        }
                    }
                }]
        }]
    }),
    newsAddForm: Ext.create('Ext.window.Window', {
        id : 'newsAddWindow',
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
                    newsContentContainerId = "news_content_container";
                }
            }
        },
        items: [{
            id: 'newsAddForm',
            xtype: 'form',
            bodyPadding: 5,
            frame: true,
            autoScroll : true,
            url: '/structure/news/controller/manager_news_add.php',
            layout: 'anchor',
            defaultType: 'textfield',
            fieldDefaults: {
                labelAlign: 'left',
                labelWidth: 80,
                anchor: '80%'
            },
            items: [{
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
                fieldLabel : '上传封面',
                name : 'image',
                xtype : 'filefield',
                vtype:'imageUpload',
                allowBlank : true
            }, {
                id : 'news_content_container',
                title : '内容',
                xtype : 'fieldset',
                items : []
            }, {
                xtype : 'button',
                text : '增加段落',
                allowBlank: false,
                handler : function(){
                    newsInsertIndex = -1;
                    newsAddContentForm.show();
                }
            }, {
                xtype : 'button',
                text : '增加图片',
                allowBlank: false,
                handler : function(){
                    newsInsertIndex = -1;
                    newsAddImageForm.show();
                }
            }],
            buttons: [
                {
                    text: '重置',
                    handler: function () {
                        Ext.getCmp('newsAddForm').getForm().reset();
                        Ext.getCmp('news_content_container').removeAll();
                    }
                },
                {
                    text: '提交',
                    formBind: true, // only enabled once the form is valid
                    disabled: false,
                    handler: function () {
                        var form = Ext.getCmp('newsAddForm').getForm();
                        if (form.isValid()) {
                            form.submit({
                                success: function (form1, action) {
                                    Ext.getCmp("news_modify_button").setDisabled(true);
                                    Ext.getCmp("news_delete_button").setDisabled(true);
                                    Ext.getCmp("news_enable_button").setDisabled(true);
                                    Ext.getCmp('newsAddForm').getForm().reset();
                                    Ext.getCmp('news_content_container').removeAll();
                                    Ext.Msg.alert('成功', '文章添加成功。');
                                    Ext.getCmp('newsAddWindow').close();
                                    newsSelModel.deselectAll();
                                    newsStore.reload();
                                },
                                failure: function (form, action) {
                                    Ext.getCmp("news_modify_button").setDisabled(true);
                                    Ext.getCmp("news_delete_button").setDisabled(true);
                                    Ext.getCmp("news_enable_button").setDisabled(true);
                                    newsSelModel.deselectAll();
                                    Ext.Msg.alert('失败', '请刷新后重试。');
                                }
                            });
                        }
                    }
                }]
        }]
    })
});
