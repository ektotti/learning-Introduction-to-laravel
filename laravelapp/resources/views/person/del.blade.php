@extends('layouts.helloapp')

@section('title', 'Person.index')

@section('menubar')
    @parent
     削除ページ
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
    <form action="/learning-Introduction-to-laravel/laravelapp/public/person/del" method="POST">
        @csrf
        <input type="hidden" name="id" value="{{$form->id}}">
        <table>
            <tr>
                <th>
                    name:
                </th>
                <td>
                    {{$form->name}}
                </td>
            </tr>
            <tr>
                <th>
                    mail:
                </th>
                <td>
                    {{$form->mail}}
                </td>
            </tr>
            <tr>
                <th>
                    age:
                </th>
                <td>
                    {{$form->age}}
                </td>
            </tr>
        </table>
        <input type="submit" value="delete">
    </form>
        @endsection

@section('footer')
copyright 2020 tuyano.
@endsection