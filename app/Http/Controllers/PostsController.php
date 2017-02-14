<?php

namespace PlatziLaravel\Http\Controllers;

use PlatziLaravel\Post;

class PostsController extends Controller
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

    public function show($id) {

        $post = Post::with('author')->findOrFail($id);

        return view('post', [
            'post' => $post
        ]);
    }

    public function create($name) {

        $post = Post::create([
            'author_id' => 3,
            'title' => 'This is the post #'.random_int(1,10)
        ]);

        $post->save();

        return $post;
    }
}
