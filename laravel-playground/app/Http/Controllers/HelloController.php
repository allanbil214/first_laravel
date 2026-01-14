<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class HelloController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('hello', compact('posts'));
    }    
}
