/*!
 * Ext JS Library 4.0
 * Copyright(c) 2006-2011 Sencha Inc.
 * licensing@sencha.com
 * http://www.sencha.com/license
 */

Ext.define('MyDesktop.App', {
    extend: 'Ext.ux.desktop.App',

    requires: [
        'Ext.window.MessageBox',
        'Ext.ux.desktop.ShortcutModel',
        'MyDesktop.SystemStatus',
        'MyDesktop.VideoWindow',
        'MyDesktop.GridWindow',
        'MyDesktop.TabWindow',
        'MyDesktop.UsersWindow',
        'MyDesktop.ContactUsWindow',
        'MyDesktop.EssayWindow',
        'MyDesktop.NewsWindow',
        'MyDesktop.CourseWindow',
        'MyDesktop.BannerWindow',
        'MyDesktop.CourseTypeWindow',
        'MyDesktop.AboutUsWindow',
        'MyDesktop.IndexContentWindow',
        'MyDesktop.Notepad',
        'MyDesktop.BogusMenuModule',
        'MyDesktop.BogusModule',
        'MyDesktop.RetainMessageWindow',

//        'MyDesktop.Blockalanche',
        'MyDesktop.Settings'
    ],

    init: function() {
        // custom logic before getXYZ methods get called...

        this.callParent();

        // now ready...
    },

    getModules : function(){
        return [
            new MyDesktop.VideoWindow(),
            new MyDesktop.SystemStatus(),
            new MyDesktop.GridWindow(),
            new MyDesktop.TabWindow(),
            new MyDesktop.UsersWindow(),
            new MyDesktop.ContactUsWindow(),
            new MyDesktop.EssayWindow(),
            new MyDesktop.NewsWindow(),
            new MyDesktop.CourseWindow(),
            new MyDesktop.RetainMessageWindow(),
            new MyDesktop.BannerWindow(),
            new MyDesktop.IndexContentWindow(),
            new MyDesktop.CourseTypeWindow(),
            new MyDesktop.AboutUsWindow(),
            new MyDesktop.Notepad(),
            new MyDesktop.BogusMenuModule(),
            new MyDesktop.BogusModule()
        ];
    },

    getDesktopConfig: function () {
        var me = this, ret = me.callParent();

        return Ext.apply(ret, {
            //cls: 'ux-desktop-black',

            contextMenuItems: [
                { text: 'Change Settings', handler: me.onSettings, scope: me }
            ],

            shortcuts: Ext.create('Ext.data.Store', {
                model: 'Ext.ux.desktop.ShortcutModel',
                data: [
                    { name: 'banner管理', iconCls: 'banner-shortcut', module: 'banner-win' },
                    { name: '四格管理', iconCls: 'notepad-shortcut', module: 'indexcontent-win' },
                    { name: '新闻管理', iconCls: 'essay-shortcut', module: 'news-win' },
                    { name: '课程类型管理', iconCls: 'companyactive-shortcut', module: 'courseType-win' },
                    { name: '课程管理', iconCls: 'essay-shortcut', module: 'course-win' },
                    { name: '团队介绍', iconCls: 'accordion-shortcut', module: 'user-win' },
                    { name: '联系我们', iconCls: 'company-shortcut', module: 'contactUs-win' },
                    { name: '关于我们', iconCls: 'direction-shortcut', module: 'aboutUs-win' },
                    { name: '客户留言', iconCls: 'retain_message-shortcut', module: 'retainMessage-win' }
                ]
            }),

            wallpaper: 'wallpapers/Blue-Sencha.jpg',
            wallpaperStretch: false
        });
    },

    // config for the start menu
    getStartConfig : function() {
        var me = this, ret = me.callParent();

        return Ext.apply(ret, {
            title: 'Don Griffin',
            iconCls: 'user',
            height: 300,
            toolConfig: {
                width: 100,
                items: [
                    {
                        text:'Settings',
                        iconCls:'settings',
                        handler: me.onSettings,
                        scope: me
                    },
                    '-',
                    {
                        text:'Logout',
                        iconCls:'logout',
                        handler: me.onLogout,
                        scope: me
                    }
                ]
            }
        });
    },

    getTaskbarConfig: function () {
        var ret = this.callParent();

        return Ext.apply(ret, {
            quickStart: [
                { name: 'Accordion Window', iconCls: 'accordion', module: 'user-win' },
                { name: 'Grid Window', iconCls: 'icon-grid', module: 'grid-win' }
            ],
            trayItems: [
                { xtype: 'trayclock', flex: 1 }
            ]
        });
    },

    onLogout: function () {
        Ext.Msg.confirm('Logout', 'Are you sure you want to logout?');
    },

    onSettings: function () {
        var dlg = new MyDesktop.Settings({
            desktop: this.desktop
        });
        dlg.show();
    }
});
