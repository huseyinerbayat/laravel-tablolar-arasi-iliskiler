<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        $posts =Post::with('user')->take(10)->get();

        return view('posts.index', compact('posts'));
    }
    
}
