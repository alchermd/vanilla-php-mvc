<?php

// A simple die and dump function for debugging.
function dd($obj)
{
    echo '<pre>';
    die(var_dump($obj));
    echo '</pre>';
}