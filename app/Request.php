<?php

namespace App\App;

// A class responsible for accessing request-related data.
class Request
{
    public static function uri()
    {
        // Requests to /foo?bar=12 should be
        // redirected to /foo
        return trim(
            parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/'
        );
    }

    public static function method()
    {
        return $_SERVER['REQUEST_METHOD'];
    }
}