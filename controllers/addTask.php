<?php

// Save the task.
try {
    $app['db']->insert('tasks', ['description' => $_POST['description']]);
}
catch (Exception $e) {
    require "views/500.php";
}
// Set page data.
$title = "Success!";
$message = "Task added.";

// Load up a view
require "views/addTask.php";