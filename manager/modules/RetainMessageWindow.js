/*!
 * Ext JS Library 4.0
 * Copyright(c) 2006-2011 Sencha Inc.
 * licensing@sencha.com
 * http://www.sencha.com/license
 */
var retainmessageStore = Ext.create('Ext.data.Store', {
    fields: ['id', 'name', 'tel', 'message'],
    autoLoad: false,
    pageSize: 20,
    proxy: {
        extraParams: {},
        type: 'rest',
        url: '/structure/contact_us/controller/manager_listretainmessage.php',
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

var retainmessageSelModel = null;
function getRetainMessageSelModel(){
    retainmessageSelModel = Ext.create('Ext.selection.CheckboxModel', {
        mode: 'SINGLE',
        listeners: {
            beforeselect: function (catgegory, record, index, obj) {
            },
            selectionchange: function (sm, selections) {
            },
            select: function (retainmessage, record, index, obj) {
                currentSel = record;
                Ext.getCmp("retainmessage_modify_button").setDisabled(false);
                Ext.getCmp("retainmessage_delete_button").setDisabled(false);
                Ext.getCmp("retainmessage_enable_button").setDisabled(false);
                Ext.getCmp("retainmessage_show_button").setDisabled(false);
                Ext.getCmp("retainmessage_hide_button").setDisabled(false);
            }
        }
    });
    return retainmessageSelModel;
}

Ext.define('MyDesktop.RetainMessageWindow', {
    extend: 'Ext.ux.desktop.Module',
    requires: [
        'Ext.data.ArrayStore',
        'Ext.util.Format',
        'Ext.grid.Panel',
        'Ext.grid.RowNumberer'
    ],

    id: 'retainMessage-win',

    init: function () {
        this.launcher = {
            text: '客户留言管理'
        };
    },

    store: retainmessageStore,

    createWindow: function () {
        var this_ = this;
        var desktop = this_.app.getDesktop();
        var win = desktop.getWindow('retainmessage-win');
        if (!win) {
            win = desktop.createWindow({
                id: 'retainmessage-win',
                title: '客户留言信息管理',
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
                        selModel: getRetainMessageSelModel(),
                        columns: [
                            {
                                text: "id",
                                width: 30,
                                sortable: true,
                                dataIndex: 'id'
                            },
                            {
                                text: "名字",
                                width: 70,
                                sortable: true,
                                dataIndex: 'name'
                            },
                            {
                                text: "电话",
                                width: 90,
                                sortable: true,
                                dataIndex: 'tel'
                            },
                            {
                                text: "留言",
                                width: 700,
                                sortable: true,
                                dataIndex: 'message'
                            }
                        ]
                    }
                ],
                tbar: [{
                    id: 'retainmessage_delete_button',
                    text: '删除客户留言',
                    disabled: true,
                    hidden : true,
                    tooltip: '删除某个客户留言填报的信息',
                    handler: function () {
                        Ext.MessageBox.confirm('确定', '是否要删除客户留言?', function (btn, text) {
                            if (btn == "yes") {
                                Ext.Ajax.request({
                                    url: '/structure/retainmessage_introduce/controller/manager_delretainmessage.php',
                                    params: {
                                        id: currentSel.data.id
                                    },
                                    success: function (response) {
                                        this_.store.reload();
                                        retainmessageSelModel.deselectAll();
                                        Ext.getCmp("retainmessage_modify_button").setDisabled(true);
                                        Ext.getCmp("retainmessage_delete_button").setDisabled(true);
                                        Ext.getCmp("retainmessage_enable_button").setDisabled(true);
                                        Ext.getCmp("retainmessage_show_button").setDisabled(true);
                                        Ext.getCmp("retainmessage_hide_button").setDisabled(true);
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
    currentSel: null
});
