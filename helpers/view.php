<?php

function view(string $viewName, $context)
{
    extract($context);
    require "views/{$viewName}.php";
}