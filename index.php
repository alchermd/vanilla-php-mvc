<?php

require 'app/bootstrap.php';
use App\App\{Router, Request};

Router::load('routes.php')
    ->direct(Request::uri(), Request::method());
