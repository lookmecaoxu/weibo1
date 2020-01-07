<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UsersController extends Controller
{
    //注册页面
    public function create()
    {
        return view('users.create');
    }
    public function show(User $user)
    {
        $user->gravatar();
        return view('users.show', compact('user'));
    }
}
