<?php

require 'app/bootstrap.php';

Router::load('routes.php')
    ->direct(Request::uri(), Request::method());
