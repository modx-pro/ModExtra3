<?php

/**
 * @var \MODX\Revolution\modX $modx
 * @var array $namespace
 */

// Load the classes
$modx->addPackage('ModExtra\Model', $namespace['path'] . 'src/', null, 'ModExtra\\');

$modx->services->add('ModExtra', function ($c) use ($modx) {
    return new ModExtra\ModExtra($modx);
});
