<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class SessionsController extends Controller
{
    public function create()
    {
        return view('sessions.create');
    }

    public function store(Request $request)
    {
        $credentials = $this->validate($request, [
            'password' => 'required',
            'email' => 'required|email|max:255',
        ]);

        if (Auth::attempt($credentials)) {
            session()->flash('success','登录成功，欢迎回来');
            return redirect()->route('users.show', [Auth::user()]);
        } else {
            session()->flash('danger','邮箱或密码错误');
            return redirect()->back()->withInput();
        }
        return;
    }

    public function destroy()
    {

    }
}
