@extends('layouts.app')

@section('content')

    <form action="{{ route('postCreate') }}" method="post">

        {{ csrf_field() }}

        @include('partials.errors')

        @if(Route::currentRouteName() === 'postEdit')
            <input type="hidden" name="id" value="{{ $post->id }}">
        @endif

        <div>
            <label for="title">Title</label>
            <input class="form-control" type="text" name="title" value="@if(Route::currentRouteName() === 'postCreate') {{ old('title') }} @else {{ $post->title }} @endif">
        </div>

        <div>
            <label for="body">Content</label>
            <textarea class="form-control" name="body" id="body" cols="30" rows="10">@if(Route::currentRouteName() === 'postCreate') {{ old('body') }} @else {{ $post->body }} @endif</textarea>
        </div>

        <input class="btn btn-primary" type="submit" value="@if(Route::currentRouteName() === 'postCreate') Create @else Edit @endif">

    </form>

@stop