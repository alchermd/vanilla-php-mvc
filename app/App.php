<?php

namespace App\App;

// A Dependency-Injection Container
class App
{
    protected static $registry = [];

    public static function bind(string $key, $val)
    {
        static::$registry[$key] = $val;
    }

    public static function get(string $key)
    {
        return static::$registry[$key];
    }
}