@extends('layouts.helloapp')

@section('title', 'Person.index')

@section('menubar')
    @parent
     編集ページ
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
    <form action="/learning-Introduction-to-laravel/laravelapp/public/person/edit" method="POST">
        @csrf
        <input type="hidden" name="id" value="{{$form->id}}">
        <table>
            <tr>
                <th>
                    name:
                </th>
                <td>
                    <input type="text" name="name" value="{{$form->name}}">
                </td>
            </tr>
            <tr>
                <th>
                    mail:
                </th>
                <td>
                    <input type="text" name="mail" value="{{$form->mail}}">
                </td>
            </tr>
            <tr>
                <th>
                    age:
                </th>
                <td>
                    <input type="number" name="age" value="{{$form->age}}">
                </td>
            </tr>
        </table>
        <input type="submit" value="update">
    </form>
        @endsection

@section('footer')
copyright 2020 tuyano.
@endsection