@extends('layouts.helloapp')

@section('title', 'Person.index')

@section('menubar')
    @parent
     検索ページ
@endsection

@section('content')
    <form action="/learning-Introduction-to-laravel/laravelapp/public/person/find" method="POST">
        @csrf
        <input type="text" name="input" value="{{$input}}">
        <input type="submit" value="find">
    </form>
    @if (isset($item))
        <table>
            <tr><th>Name</th><th>Mail</th><th>Age</th></tr>
                <tr>
                    <td>{{$item->getData()}} </td>
                </tr>
        </table>
    @endif
@endsection

@section('footer')
copyright 2020 tuyano.
@endsection