    @extends('layouts.helloapp')

    @section('title','Index')

    @section('menubar')
        @parent
        インデックスページ
    @endsection

    @section('content')
        <p>ここが本文のコンテンツです。</p>
        <?php phpinfo(); ?>
        {{--<table>
            @foreach($data as $item)
            <tr><th>{{$item['name']}}</th><td>{{$item['mail']}}</td></tr>
            @endforeach
        </table>--}}
        
        {{--<p>これは,<middleware>google.com</middleware>へのリンクです</p>
            <p>これは,<middleware>yahoo.co.jp</middleware>へのリンクです</p>--}}
        
            @if (count($errors) > 0) 
                <p>入力に問題があります。再入力して下さい</p>
            @endif

        <p>{{$msg}}</p>
        <form action="/hello" method="POST">
        @csrf
             {{-- @if ($errors->has('name')) 
                <p>{{$errors->first('name')}}</p>
            @endif --}}

            @error('name')
                <p>{{$message}}</p> 
            @enderror
                <tr><th>name: </th><td><input type="text" name="name" value="{{old('name')}}"></td></tr>

            @if ($errors->has('mail')) 
                <p>{{$errors->first('mail')}}</p>
            @endif
            <tr><th>mail:</th><td><input type="text" name="mail" value="{{old('mail')}}"></td></tr>
            
            @if ($errors->has('age')) 
                <p>{{$errors->first('age')}}</p>
            @endif
            <tr><th>age:</th><td><input type="text" name="age" value="{{old('age')}}"></td></tr>
            
            <input type="submit" value="send">
        </form>

    @endsection
   
    @section('footer')
        copyright 2020 tuyano
    @endsection