ModExtra.page.Home = function (config) {
    config = config || {};
    Ext.applyIf(config, {
        components: [{
            xtype: 'modextra-panel-home',
            renderTo: 'modextra-panel-home-div'
        }]
    });
    ModExtra.page.Home.superclass.constructor.call(this, config);
};
Ext.extend(ModExtra.page.Home, MODx.Component);
Ext.reg('modextra-page-home', ModExtra.page.Home);