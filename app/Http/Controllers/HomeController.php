<?php

namespace PlatziLaravel\Http\Controllers;

use PlatziLaravel\Post;

class HomeController extends Controller
{
    public function index() {

        $posts = Post::with('author')->orderBy('created_at','desc')->take(3)->get();

        return view('home',[
            'posts' => $posts
        ]);
    }
}
