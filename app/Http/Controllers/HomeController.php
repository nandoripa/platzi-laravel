<?php

namespace PlatziLaravel\Http\Controllers;

use Illuminate\Http\Request;
use PlatziLaravel\Post;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application home.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::with('author')->orderBy('created_at','desc')->take(3)->get();

        return view('home',[
            'posts' => $posts
        ]);
    }
}
