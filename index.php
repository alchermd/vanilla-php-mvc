<?php

require 'app/bootstrap.php';

require Router::load(require 'routes.php')
    ->direct(Request::uri());
