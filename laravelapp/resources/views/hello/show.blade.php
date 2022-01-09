    @extends('layouts.helloapp')

    @section('title','show')

    @section('menubar')
        @parent
        詳細ページ
    @endsection

    @section('content')
        <p>ここが本文のコンテンツです。</p>
        
        <table>
            <tr><th>Id</th><th>Name</th><th>Email</th><th>Pass</th></tr>
            @foreach($items as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->password}}</td>
            </tr>
            @endforeach
        </table>
    @endsection
   
    @section('footer')
        copyright 2020 tuyano
    @endsection