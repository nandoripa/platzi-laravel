@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

            <h1>Welcome to the Platzi Laravel test project</h1>
            <h2>This is a blog test. Below is a the most recent 3 posts.</h2>

            @foreach($posts as $post)
                <h3><a href="{{ route('postShow',['id' => $post->id])}}">{{ $post->title }}</h3>
                <small>by {{ $post->author->name }}</small>
            @endforeach
        </div>
    </div>
</div>
@endsection
