<?php

// Save the task.
try {
    $app['db']->insert('tasks', ['description' => $_POST['description']]);
}
catch (Exception $e) {
    require "views/500.php";
}

// Redirect to home.
header('Location: /');