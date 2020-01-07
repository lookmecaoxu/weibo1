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

    # 个人信息 /user/1
    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

    # 注册提交 /users post
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:50',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|confirmed|min:6'
        ]);
        return;
    }
}
