<?php

// A class responsible for accessing request-related data.
class Request
{
    public static function uri()
    {
        return trim($_SERVER['REQUEST_URI'], '/');
    }
}