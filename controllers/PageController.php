<?php

class PageController
{
    public function index()
    {
        $title = 'Home';
        return view('pages.index', compact('title'));
    }

    public function about()
    {
        // Set a page title.
        $title = 'About';

        // Load up the view.
        return view('pages.about', compact('title'));
    }

    public function contact()
    {
        // Set a page title.
        $title = 'Contact';

        // Load up the view.
        return view('pages.contact', compact('title'));
    }
}