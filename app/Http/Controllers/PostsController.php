<?php

namespace PlatziLaravel\Http\Controllers;

use PlatziLaravel\Post;

class PostsController extends Controller
{

    public function index() {

        return Post::all();
    }

    public function get($id) {

        return Post::find($id);
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
