<?php

namespace PlatziLaravel\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use PlatziLaravel\Http\Requests\PostStore;
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

        return view('posts.detail', [
            'post' => $post
        ]);
    }

    public function create() {

        return view('posts.form');
    }

    public function edit($id) {

        $post = Post::with('author')->findOrFail($id);

        return view('posts.form', [
            'post' => $post
        ]);
    }

    public function store(PostStore $request) {

        $post = Post::firstOrNew(['id' => $request->get('id')]);

        $post->title = $request->get('title');
        $post->body = $request->get('body');
        $post->author_id = Auth::id();

        $post->save();

        return redirect()->route('home');
    }

    public function delete($id) {

        Post::destroy($id);

        return redirect()->route('home');
    }
}
