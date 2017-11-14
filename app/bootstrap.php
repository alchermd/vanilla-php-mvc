<?php

require 'vendor/autoload.php';

App::bind('config', require 'config.php');

if (App::get('config')['DEBUG']) {
    require 'helpers/dd.php';
}

App::bind(
    'db',
    new QueryBuilder(Connection::make(App::get('config')['database']))
);