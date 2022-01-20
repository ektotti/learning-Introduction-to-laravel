@extends('layouts.helloapp')

@section('title','Auth')

@section('menubar')
    @parent
    ログインページ
@endsection

@section('content')
<p>{{$message}} </p>
    <form action="/learning-Introduction-to-laravel/laravelapp/public/hello/auth" method="POST">
        <table>
            @csrf
            <tr><th>email: </th><td><input type="text" name="email"></td></tr>
            <tr><th>password: </th><td><input type="password" name="password"></td></tr>
            <tr><th></th><td><input type="submit" value="send"></td></tr>
        </table>
    </form>
@endsection

@section('footer')
    copyright 2020 tuyano
@endsection