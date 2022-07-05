<?php

use MODX\Revolution\modExtraManagerController;

/**
 * The home manager controller for ModExtra.
 *
 */
class ModExtraHomeManagerController extends modExtraManagerController
{
    /** @var ModExtra\ModExtra $ModExtra */
    public $ModExtra;


    /**
     *
     */
    public function initialize()
    {
        $this->ModExtra = $this->modx->services->get('ModExtra');
        parent::initialize();
    }


    /**
     * @return array
     */
    public function getLanguageTopics()
    {
        return ['modextra:default'];
    }


    /**
     * @return bool
     */
    public function checkPermissions()
    {
        return true;
    }


    /**
     * @return null|string
     */
    public function getPageTitle()
    {
        return $this->modx->lexicon('modextra');
    }


    /**
     * @return void
     */
    public function loadCustomCssJs()
    {
        $this->addCss($this->ModExtra->config['cssUrl'] . 'mgr/main.css');
        $this->addJavascript($this->ModExtra->config['jsUrl'] . 'mgr/modextra.js');
        $this->addJavascript($this->ModExtra->config['jsUrl'] . 'mgr/misc/utils.js');
        $this->addJavascript($this->ModExtra->config['jsUrl'] . 'mgr/misc/combo.js');
        $this->addJavascript($this->ModExtra->config['jsUrl'] . 'mgr/widgets/items.grid.js');
        $this->addJavascript($this->ModExtra->config['jsUrl'] . 'mgr/widgets/items.windows.js');
        $this->addJavascript($this->ModExtra->config['jsUrl'] . 'mgr/widgets/home.panel.js');
        $this->addJavascript($this->ModExtra->config['jsUrl'] . 'mgr/sections/home.js');

        $this->addHtml('<script type="text/javascript">
        ModExtra.config = ' . json_encode($this->ModExtra->config) . ';
        ModExtra.config.connector_url = "' . $this->ModExtra->config['connectorUrl'] . '";
        Ext.onReady(function() {MODx.load({ xtype: "modextra-page-home"});});
        </script>');
    }


    /**
     * @return string
     */
    public function getTemplateFile()
    {
        $this->content .= '<div id="modextra-panel-home-div"></div>';
        return '';
    }
}
