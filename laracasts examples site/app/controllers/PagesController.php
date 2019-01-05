<?php

namespace App\Controllers;

use App\Core\App;

class PagesController

{
    public function home()
    {

        $tasks = App::get('database')->selectAll('todos', 'Task');

        return view(
            'index',
            [
                'tasks' => $tasks,
            ]
        );

    }

    public function about()
    {

        return view('about');

    }

    public function aboutCulture()
    {

        return view('about-culture');

    }

    public function contact()
    {

        return view('contact');

    }
}