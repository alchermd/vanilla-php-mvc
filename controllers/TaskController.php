<?php

namespace App\Controllers;
use App\App\App;
use App\Models\Task;

class TaskController
{
    public static function index()
    {
        $tasks = App::get('db')->selectAll('tasks', Task::class);
        $title = 'Tasks';

        return view('tasks.index', compact('tasks', 'title'));
    }

    public static function store()
    {  
        // Save the task.
        try {
            App::get('db')->insert('tasks', ['description' => $_POST['description']]);
        }
        catch (Exception $e) {
            require "views/500.php";
        }

        // Redirect to tasks.
        return redirect('tasks');
    }
}