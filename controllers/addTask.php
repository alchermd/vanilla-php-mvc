<?php

// Save the task.
$app['db']->save('tasks', 'description', $_POST['description']);

// Set page data.
$title = "Success!";
$message = "Task added.";

// Load up a view
require "views/addTask.php";