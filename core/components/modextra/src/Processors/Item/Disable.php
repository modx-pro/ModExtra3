<?php

namespace ModExtra\Processors\Item;

use ModExtra\Model\ModExtraItem;
use MODX\Revolution\Processors\Processor;

class Disable extends Processor
{
    public $objectType = 'ModExtraItem';
    public $classKey = ModExtraItem::class;
    public $languageTopics = ['modextra'];
    //public $permission = 'save';


    /**
     * @return array|string
     */
    public function process()
    {
        if (!$this->checkPermissions()) {
            return $this->failure($this->modx->lexicon('access_denied'));
        }

        $ids = $this->modx->fromJSON($this->getProperty('ids'));
        if (empty($ids)) {
            return $this->failure($this->modx->lexicon('modextra_item_err_ns'));
        }

        foreach ($ids as $id) {
            /** @var ModExtraItem $object */
            if (!$object = $this->modx->getObject($this->classKey, $id)) {
                return $this->failure($this->modx->lexicon('modextra_item_err_nf'));
            }

            $object->set('active', false);
            $object->save();
        }

        return $this->success();
    }
}
