<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Auth;

class FollowersController extends Controller
{
    public function store(User $user)
    {
        $this->authorize('follow', $user);
        if (!Auth::user()->isFollowings($user->id)) {
            Auth::user()->follow($user->id);
        }
        return redirect()->route('users.show', $user->id);
    }

    public function destroy(User $user)
    {
        $this->authorize('follow', $user);
        if (Auth::user()->isFollowings($user->id)) {
            Auth::user()->unfollow($user->id);
        }
        return redirect()->route('users.show', $user->id);
    }
}
