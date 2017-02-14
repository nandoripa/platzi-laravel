@extends('layouts.app')

@section('content')

    <form action="" method="post">
        {{ csrf_token() }}
        <input type="text" name="email" value="">
        <input type="password" name="password">
    </form>

@stop