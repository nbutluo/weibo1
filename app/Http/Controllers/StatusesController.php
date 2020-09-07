<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class StatusesController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }
    //
    public function store(Request $request)
    {
        $this->validate($request, [
            'content' => 'required|max:140',
        ]);

        Auth::user()->statuses()->create([
            'content' => $request['content'],
        ]);

        return redirect()->back()->with('success','发表成功');
    }

    public function destroy()
    {

    }
}
