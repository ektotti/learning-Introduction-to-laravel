    @extends('layouts.helloapp')

    @section('title','Add')

    @section('menubar')
        @parent
        新規作成ページ
    @endsection

    @section('content')
        <form action="/learning-Introduction-to-laravel/laravelapp/public/hello/add" method="POST">
            <table>
                @csrf
                <tr><th>name: </th><td><input type="text" name="name"></td></tr>
                <tr><th>email: </th><td><input type="text" name="email"></td></tr>
                <tr><th>password: </th><td><input type="text" name="password"></td></tr>
                <tr><th>picture: </th><td><input type="text" name="picture"></td></tr>
                <tr><th>picture: </th><td><input type="submit" value="send"></td></tr>
            </table>
        </form>
    @endsection
   
    @section('footer')
        copyright 2020 tuyano
    @endsection