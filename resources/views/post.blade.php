@extends('layouts.app')

@section('title', 'Posts')

@section('content')

    <h2>{{$post->title}}</h2>
    <small>by {{$post->author->name}}</small>
    <p>{{ $post->body }}</p>
@endsection