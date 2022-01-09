    @extends('layouts.helloapp')

    @section('title','Index')

    @section('menubar')
        @parent
        インデックスページ
    @endsection

    @section('content')
        <p>ここが本文のコンテンツです。</p>
        
        <table>
            <tr><th>Name</th><th>Email</th></tr>
            @foreach($items as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->mail}}</td>
            </tr>
            @endforeach
        </table>
    @endsection
   
    @section('footer')
        copyright 2020 tuyano
    @endsection