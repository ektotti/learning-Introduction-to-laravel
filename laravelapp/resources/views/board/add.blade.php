@extends('layouts.helloapp')

@section('title', 'Board.Add')

@section('menubar')
    @parent
     投稿ページ
@endsection

@section('content')
    <form action="/learning-Introduction-to-laravel/laravelapp/public/board/add" method="POST">
        @csrf
        <table>
            <tr>
                <th>
                    person_id:
                </th>
                <td>
                    <input type="number" name="person_id">
                </td>
            </tr>
            <tr>
                <th>
                    title:
                </th>
                <td>
                    <input type="text" name="title">
                </td>
            </tr>
            <tr>
                <th>
                    message:
                </th>
                <td>
                    <input type="text" name="message">
                </td>
            </tr>
        </table>
        <input type="submit" value="create">
    </form>
        @endsection

@section('footer')
copyright 2020 tuyano.
@endsection