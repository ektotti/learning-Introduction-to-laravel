    @extends('layouts.helloapp')

    @section('title','Index')

    @section('menubar')
        @parent
        インデックスページ
    @endsection

    @section('content')
        <p>ここが本文のコンテンツです。</p>
        
        <table>
            <tr><th><a href="/learning-Introduction-to-laravel/laravelapp/public/hello?sort=id">ID</a></th>
                <th><a href="/learning-Introduction-to-laravel/laravelapp/public/hello?sort=name">NAME</a></th>
                <th><a href="/learning-Introduction-to-laravel/laravelapp/public/hello?sort=age">AGE</a></th>
            </tr>
            @foreach($items as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->age}}</td>
            </tr>
            @endforeach
        </table>
        {{$items->appends(['sort' => $sort])->links()}}
    @endsection
   
    @section('footer')
        copyright 2020 tuyano
    @endsection