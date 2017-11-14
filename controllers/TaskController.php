<?php

class TaskController
{
    public static function store()
    {  
        // Save the task.
        try {
            App::get('db')->insert('tasks', ['description' => $_POST['description']]);
        }
        catch (Exception $e) {
            require "views/500.php";
        }

        // Redirect to home.
        header('Location: /');
    }
}