<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function profile()
    {
        return view('users.profile');
    }
    public function edit()
    {
        return view('users.edit');
    }
}
