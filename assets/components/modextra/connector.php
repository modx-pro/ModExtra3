<?php

/** @var  MODX\Revolution\modX $modx */
/** @var  ModExtra\ModExtra $ModExtra */

if (file_exists(dirname(__FILE__, 4) . '/config.core.php')) {
    require_once dirname(__FILE__, 4) . '/config.core.php';
} else {
    require_once dirname(__FILE__, 5) . '/config.core.php';
}

require_once MODX_CORE_PATH . 'config/' . MODX_CONFIG_KEY . '.inc.php';
require_once MODX_CONNECTORS_PATH . 'index.php';
$ModExtra = $modx->services->get('ModExtra');
$modx->lexicon->load('modextra:default');

// handle request
$path = $modx->getOption(
    'processorsPath',
    $ModExtra->config,
    $modx->getOption('core_path') . 'components/modextra/' . 'Processors/'
);
$modx->getRequest();

/** @var MODX\Revolution\modConnectorRequest $request */
$request = $modx->request;
$request->handleRequest([
    'processors_path' => $path,
    'location' => '',
]);
