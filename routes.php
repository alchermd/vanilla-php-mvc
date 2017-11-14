<?php

$router->get('', 'PageController@index');
$router->get('about', 'PageController@about');
$router->get('contact', 'PageController@contact');
$router->get('tasks', 'TaskController@index');
$router->post('tasks', 'TaskController@store');