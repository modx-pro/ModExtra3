<?php

namespace ModExtra\Processors\Item;

use MODX\Revolution\Processors\Model\GetProcessor;
use ModExtra\Model\ModExtraItem;

class Get extends GetProcessor
{
    public $objectType = 'ModExtraItem';
    public $classKey = ModExtraItem::class;
    public $languageTopics = ['modextra:default'];
    //public $permission = 'view';


    /**
     * We doing special check of permission
     * because of our objects is not an instances of modAccessibleObject
     *
     * @return mixed
     */
    public function process()
    {
        if (!$this->checkPermissions()) {
            return $this->failure($this->modx->lexicon('access_denied'));
        }

        return parent::process();
    }
}
