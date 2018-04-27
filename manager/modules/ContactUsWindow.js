/*!
 * Ext JS Library 4.0
 * Copyright(c) 2006-2011 Sencha Inc.
 * licensing@sencha.com
 * http://www.sencha.com/license
 */

//设置图片路径
function getpicPathContactUsModify()
{
    var PICTURE_URL = Ext.getCmp("contact_us_cover_url_modify").getValue();
    if (!Ext.isEmpty(PICTURE_URL)) {
        Ext.getCmp("imageContactUsPathshow").getEl().dom.src = PICTURE_URL;
    } else {
        Ext.getCmp("imageContactUsPathshow").getEl().dom.src = "";
    }
}

Ext.define('MyDesktop.ContactUsWindow', {
    extend: 'Ext.ux.desktop.Module',
    requires: [
        'Ext.data.ArrayStore',
        'Ext.util.Format',
        'Ext.grid.Panel',
        'Ext.grid.RowNumberer'
    ],

    id: 'contactUs-win',
    indexContentId : 1,

    init: function () {
        this.launcher = {
            text: '联系我们管理'
        };
    },
    createWindow: function () {
        var this_ = this;
        var desktop = this_.app.getDesktop();
        var win = desktop.getWindow('contactUs-win');
        if (!win) {
            win = desktop.createWindow({
                id : 'contactUsModifyWindow',
                layout: 'fit',
                title: '修改联系我们信息',
                closeAction: 'hide',
                width: 650,
                height: 400,
                border: false,
                modal: true,
                items: [{
                    id: 'contactUsModifyForm',
                    xtype: 'form',
                    bodyPadding: 5,
                    frame: true,
                    url: '/structure/contact_us/controller/manager_contactus_modify.php',
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
                        fieldLabel: 'qq',
                        name: 'qq',
                        allowBlank: false
                    }, {
                        fieldLabel: '联系地址',
                        name: 'address',
                        allowBlank: false
                    }, {
                        fieldLabel: '手机号码',
                        name: 'phone',
                        allowBlank: false
                    }, {
                        fieldLabel: '联系邮箱',
                        name: 'email',
                        allowBlank: false
                    }, {
                        fieldLabel: '联系电话',
                        name: 'tel',
                        allowBlank: false
                    }, {
                        fieldLabel: '经度',
                        name: 'longitude',
                        allowBlank: false
                    }, {
                        fieldLabel: '纬度',
                        name: 'latitude',
                        allowBlank: false
                    }, {
                        fieldLabel: '温馨提示',
                        xtype : 'displayfield',
                        value : '经度纬度用来显示地图，请在百度地图上定好坐标。'
                    }],
                    buttons: [
                        {
                            text: '重置',
                            handler: function () {
                                Ext.getCmp('contactUsModifyForm').getForm().reset();
                            }
                        },
                        {
                            text: '提交',
                            formBind: true,
                            disabled: false,
                            handler: function () {
                                var form = Ext.getCmp('contactUsModifyForm').getForm();
                                if (form.isValid()) {
                                    form.submit({
                                        success: function () {
                                            Ext.Msg.alert('成功', '修改成功。');
                                            Ext.getCmp('contactUsModifyWindow').close();
                                        },
                                        failure: function () {
                                            Ext.Msg.alert('失败', '请刷新后重试。');
                                        }
                                    });
                                }
                            }
                        }]
                }],
                listeners :
                {
                    show :
                    {
                        fn : function()
                        {
                            Ext.Ajax.request({
                                url: '/structure/contact_us/controller/get_index_contact_us.php',
                                params: {
                                    id: this_.indexContentId
                                },
                                method: 'POST',
                                success: function (response, options) {
                                    var json = Ext.decode(response.responseText);
                                    if(json.content){
                                        var contents = json.content;
                                        var content = {
                                            data : contents,
                                            getData : function(){
                                                return this.data;
                                            }
                                        }
                                        Ext.getCmp('contactUsModifyForm').form.loadRecord(content);
                                        getpicPathContactUsModify();
                                    }
                                },
                                failure: function (response, options) {
                                    Ext.MessageBox.alert('失败', '请求超时或网络故障,错误编号：'+ response.status);
                                }
                            });
                        }
                    }
                }
            });
        }
        return win;
    }
});
