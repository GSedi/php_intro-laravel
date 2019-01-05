<?php

namespace App\Http\Controllers;

use App\User;
// use Nexmo\User\User;

class UsersController extends Controller
{
    public function index()
    {

        $users = User::all();

        // return $users; JSON

        return view('users.index', compact('users'));
    }


    public function store()
    {

        // User::create(request()->all());

        $user = new User;

        $user->name = request('name');

        $user->email = request('email');

        $user->password = bcrypt(request('password'));

        $user->save();

        return back();

    }
}
