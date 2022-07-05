ModExtra.window.CreateItem = function (config) {
    config = config || {};
    if (!config.id) {
        config.id = 'modextra-item-window-create';
    }
    Ext.applyIf(config, {
        title: _('modextra_item_create'),
        width: 550,
        autoHeight: true,
        url: ModExtra.config.connector_url,
        action: 'ModExtra\\Processors\\Item\\Create',
        fields: this.getFields(config),
        keys: [{
            key: Ext.EventObject.ENTER, shift: true, fn: function () {
                this.submit()
            }, scope: this
        }]
    });
    ModExtra.window.CreateItem.superclass.constructor.call(this, config);
};
Ext.extend(ModExtra.window.CreateItem, MODx.Window, {

    getFields: function (config) {
        return [{
            xtype: 'textfield',
            fieldLabel: _('modextra_item_name'),
            name: 'name',
            id: config.id + '-name',
            anchor: '99%',
            allowBlank: false,
        }, {
            xtype: 'textarea',
            fieldLabel: _('modextra_item_description'),
            name: 'description',
            id: config.id + '-description',
            height: 150,
            anchor: '99%'
        }, {
            xtype: 'xcheckbox',
            boxLabel: _('modextra_item_active'),
            name: 'active',
            id: config.id + '-active',
            checked: true,
        }];
    },

    loadDropZones: function () {
    }

});
Ext.reg('modextra-item-window-create', ModExtra.window.CreateItem);


ModExtra.window.UpdateItem = function (config) {
    config = config || {};
    if (!config.id) {
        config.id = 'modextra-item-window-update';
    }
    Ext.applyIf(config, {
        title: _('modextra_item_update'),
        width: 550,
        autoHeight: true,
        url: ModExtra.config.connector_url,
        action: 'ModExtra\\Processors\\Item\\Update',
        fields: this.getFields(config),
        keys: [{
            key: Ext.EventObject.ENTER, shift: true, fn: function () {
                this.submit()
            }, scope: this
        }]
    });
    ModExtra.window.UpdateItem.superclass.constructor.call(this, config);
};
Ext.extend(ModExtra.window.UpdateItem, MODx.Window, {

    getFields: function (config) {
        return [{
            xtype: 'hidden',
            name: 'id',
            id: config.id + '-id',
        }, {
            xtype: 'textfield',
            fieldLabel: _('modextra_item_name'),
            name: 'name',
            id: config.id + '-name',
            anchor: '99%',
            allowBlank: false,
        }, {
            xtype: 'textarea',
            fieldLabel: _('modextra_item_description'),
            name: 'description',
            id: config.id + '-description',
            anchor: '99%',
            height: 150,
        }, {
            xtype: 'xcheckbox',
            boxLabel: _('modextra_item_active'),
            name: 'active',
            id: config.id + '-active',
        }];
    },

    loadDropZones: function () {
    }

});
Ext.reg('modextra-item-window-update', ModExtra.window.UpdateItem);