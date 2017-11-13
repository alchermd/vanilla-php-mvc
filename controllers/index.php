<?php

// Get all the tasks.
$tasks = $app['db']->selectAll('tasks', Task::class);

// Load up the view.
require 'views/index.php';