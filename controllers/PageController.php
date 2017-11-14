<?php

class PageController
{
    public function index()
    {
        // Fetch all the tasks.
        $tasks = App::get('db')->selectAll('tasks', Task::class);

        // Set a page title.
        $title = 'Home';

        // Load up the view.
        return view('index', compact('tasks', 'title'));
    }

    public function about()
    {
        // Set a page title.
        $title = 'About';

        // Load up the view.
        return view('about', compact('title'));
    }

    public function contact()
    {
        // Set a page title.
        $title = 'Contact';

        // Load up the view.
        return view('contact', compact('title'));
    }
}