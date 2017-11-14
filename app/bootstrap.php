<?php

use App\App\App;
use App\App\Database\{QueryBuilder, Connection};


require 'vendor/autoload.php';
require 'helpers/view.php';
require 'helpers/redirect.php';

App::bind('config', require 'config.php');

if (App::get('config')['DEBUG']) {
    require 'helpers/dd.php';
}

App::bind(
    'db',
    new QueryBuilder(Connection::make(App::get('config')['database']))
);