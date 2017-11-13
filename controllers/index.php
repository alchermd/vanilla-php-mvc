<?php

// Fetch all the tasks.
$tasks = $app['db']->selectAll('tasks', Task::class);

// Set a page title.
$title = 'Home';

// Load up the view.
require 'views/index.php';