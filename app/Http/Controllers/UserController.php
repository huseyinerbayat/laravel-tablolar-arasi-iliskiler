<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        $users = User::with(['phone', 'latestPost', 'oldestPost'])->take(5)->get();

        return view('users.index', compact(['users']));
    }

    public function posts() {
        $users = User::with('posts')->get();

        return view('users.posts', compact('users'));
    }
}
