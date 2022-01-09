    @extends('layouts.helloapp')

    @section('title','Add')

    @section('menubar')
        @parent
        新規作成ページ
    @endsection

    @section('content')
        <form action="/learning-Introduction-to-laravel/laravelapp/public/hello/edit" method="POST">
            <table>
                @csrf
                <input type="hidden" name="id" value="{{$item->id}}">
                <tr><th>name: </th><td><input type="text" name="name" value="{{$item->name}}"></td></tr>
                <tr><th>email: </th><td><input type="text" name="email" value="{{$item->email}}"></td></tr>
                <tr><th>password: </th><td><input type="text" name="password" value="{{$item->password}}"></td></tr>
                <tr><th>picture: </th><td><input type="text" name="picture" value="{{$item->picture}}"></td></tr>
                <tr><td><input type="submit" value="send"></td></tr>
            </table>
        </form>
    @endsection
   
    @section('footer')
        copyright 2020 tuyano
    @endsection