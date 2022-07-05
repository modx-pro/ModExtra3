<?php

namespace ModExtra\Model\mysql;

use xPDO\xPDO;

class ModExtraItem extends \ModExtra\Model\ModExtraItem
{
    public static $metaMap = array(
        'package' => 'ModExtra\\Model',
        'version' => '3.0',
        'table' => 'superpack_items',
        'extends' => 'xPDO\\Om\\xPDOSimpleObject',
        'tableMeta' =>
            array(
                'engine' => 'InnoDB',
            ),
        'fields' =>
            array(
                'name' => '',
                'description' => '',
                'active' => 1,
            ),
        'fieldMeta' =>
            array(
                'name' =>
                    array(
                        'dbtype' => 'varchar',
                        'precision' => '100',
                        'phptype' => 'string',
                        'null' => false,
                        'default' => '',
                    ),
                'description' =>
                    array(
                        'dbtype' => 'text',
                        'phptype' => 'string',
                        'null' => true,
                        'default' => '',
                    ),
                'active' =>
                    array(
                        'dbtype' => 'tinyint',
                        'precision' => '1',
                        'phptype' => 'boolean',
                        'null' => true,
                        'default' => 1,
                    ),
            ),
        'indexes' =>
            array(
                'name' =>
                    array(
                        'alias' => 'name',
                        'primary' => false,
                        'unique' => false,
                        'type' => 'BTREE',
                        'columns' =>
                            array(
                                'name' =>
                                    array(
                                        'length' => '',
                                        'collation' => 'A',
                                        'null' => false,
                                    ),
                            ),
                    ),
                'active' =>
                    array(
                        'alias' => 'active',
                        'primary' => false,
                        'unique' => false,
                        'type' => 'BTREE',
                        'columns' =>
                            array(
                                'active' =>
                                    array(
                                        'length' => '',
                                        'collation' => 'A',
                                        'null' => false,
                                    ),
                            ),
                    ),
            ),
    );
}
