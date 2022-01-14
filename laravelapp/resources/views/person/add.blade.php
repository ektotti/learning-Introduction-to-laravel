@extends('layouts.helloapp')

@section('title', 'Person.index')

@section('menubar')
    @parent
     新規作成ページ
@endsection

@section('content')
    @if (count($errors) > 0)
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }} </li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="/learning-Introduction-to-laravel/laravelapp/public/person/add" method="POST">
        @csrf
        <table>
            <tr>
                <th>
                    name:
                </th>
                <td>
                    <input type="text" name="name">
                </td>
            </tr>
            <tr>
                <th>
                    mail:
                </th>
                <td>
                    <input type="text" name="mail">
                </td>
            </tr>
            <tr>
                <th>
                    age:
                </th>
                <td>
                    <input type="number" name="age">
                </td>
            </tr>
        </table>
        <input type="submit" value="create">
    </form>
        @endsection

@section('footer')
copyright 2020 tuyano.
@endsection