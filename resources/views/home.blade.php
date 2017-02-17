@extends('layouts.app')

@section('content')

    <h1>Welcome to the Platzi Laravel test project</h1>
    <h2>This is a blog test. Below is a the most recent 3 posts.</h2>

    @foreach($posts as $post)
        <h3><a href="{{ route('postShow',['id' => $post->id])}}">{{ $post->title }}</h3>
        <p><small>by {{ $post->author->name }}</small>&nbsp;
            <a class="glyphicon glyphicon-remove-circle btnActionPost delete" href="{{ route('postDelete',['id' => $post->id])}}"></a>
            <a class="glyphicon glyphicon-pencil btnActionPost" href="{{ route('postEdit',['id' => $post->id])}}"></a>
        </p>
    @endforeach

    <div>
        <a class="btn btn-primary" href="{{ route('postCreate') }}">New post</a>
    </div>

@endsection
