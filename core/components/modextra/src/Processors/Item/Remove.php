<?php

namespace ModExtra\Processors\Item;

use ModExtra\Model\ModExtraItem;
use MODX\Revolution\Processors\Processor;

class Remove extends Processor
{
    public $objectType = 'ModExtraItem';
    public $classKey = ModExtraItem::class;
    public $languageTopics = ['modextra'];
    //public $permission = 'remove';


    /**
     * @return array|string
     */
    public function process()
    {
        if (!$this->checkPermissions()) {
            return $this->failure($this->modx->lexicon('access_denied'));
        }

        $ids = json_decode($this->getProperty('ids'), true);
        if (empty($ids)) {
            return $this->failure($this->modx->lexicon('modextra_item_err_ns'));
        }

        foreach ($ids as $id) {
            /** @var ModExtraItem $object */
            if (!$object = $this->modx->getObject($this->classKey, $id)) {
                return $this->failure($this->modx->lexicon('modextra_item_err_nf'));
            }

            $object->remove();
        }

        return $this->success();
    }
}
