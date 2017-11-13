<?php

// Load all the necessary data to bootstrap the application.
require 'app/database/Connection.php';
require 'app/database/QueryBuilder.php';
require 'app/Router.php';
require 'app/Request.php';
require 'models/Task.php';

$app['config'] = require 'config.php';
$app['db'] = new QueryBuilder(Connection::make($app['config']['database']));