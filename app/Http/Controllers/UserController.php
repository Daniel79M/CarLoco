<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showAllUser()
    {
        $users = User::all();

        return view('users.index',
        ['users' => $users]);
    }
}
