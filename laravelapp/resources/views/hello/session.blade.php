@extends('layouts.helloapp')

@section('title', 'Session')

@section('menubar')
    @parent
    セッションページ
@endsection

@section('content')

    <p>{{$session_data}}</p>
    <form action="/learning-Introduction-to-laravel/laravelapp/public/hello/session" method="POST">
        @csrf
        <input type="text" name="input">
        <input type="submit" name="send">
    </form>

@endsection

@section('footer')
copyright 2020 totani
@endsection