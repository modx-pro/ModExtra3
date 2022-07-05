let ModExtra = function (config) {
    config = config || {};
    ModExtra.superclass.constructor.call(this, config);
};
Ext.extend(ModExtra, Ext.Component, {
    page: {}, window: {}, grid: {}, tree: {}, panel: {}, combo: {}, config: {}, view: {}, utils: {}
});
Ext.reg('modextra', ModExtra);

ModExtra = new ModExtra();