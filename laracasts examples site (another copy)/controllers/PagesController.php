<?php

class PagesController

{
    public function home()
    {

        $tasks = App::get('database')->selectAll('todos', 'Task');

        // require 'views/index.view.php';
        return view(
            'index',
            [
                'tasks' => $tasks,
            ]
        );

    }

    public function about()
    {

        // require 'views/about.view.php';
        return view('about');

    }

    public function aboutCulture()
    {

        // require 'views/about-culture.view.php';
        return view('about-culture');

    }

    public function contact()
    {

        // require 'views/contact.view.php';
        return view('contact');

    }
}