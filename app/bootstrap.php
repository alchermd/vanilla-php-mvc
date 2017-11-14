<?php

require 'vendor/autoload.php';

$app['config'] = require 'config.php';

if ($app['config']['DEBUG']) {
    require 'helpers/dd.php';
}

$app['db'] = new QueryBuilder(Connection::make($app['config']['database']));