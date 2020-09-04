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

        if (Auth::attempt($credentials,$request->has('remember'))) {
            session()->flash('success','登录成功，欢迎回来');
            $fallback = route('users.show', Auth::user());
            return redirect()->intended($fallback);
        } else {
            session()->flash('danger','邮箱或密码错误');
            return redirect()->back()->withInput();
        }
        return;
    }

    public function destroy()
    {
        Auth::logout();
        session()->flash('success','退出成功');
        return redirect('login');
    }
}
