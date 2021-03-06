<?php

namespace App\Http\Controllers;

use App\User;


class UserController extends Controller
{
    public function show(User $user)
    {
        $count = $user->countVote();
        return view('user.show', compact('user', 'count'));
    }

}
