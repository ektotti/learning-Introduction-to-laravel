    @extends('layouts.helloapp')

    @section('title','Index')

    @section('menubar')
        @parent
        インデックスページ
    @endsection

    @section('content')
        <p>ここが本文のコンテンツです。</p>
        {{--@component('components.message')
            @slot('msg_title')
                CAUTION!
            @endslot

             @slot('msg_content')
                これはコンポーネントメッセージです。
            @endslot 
        @endcomponent--}}

        {{--@include('components.message', ['msg_title'=>'CAUTION!','msg_content'=>'これはコンポーネントメッセージです。'])--}}
 
        <ul>
        @each('components.items', $data, 'item')
        </ul>
        
        {{$compose_msg}}

    @endsection
   
    @section('footer')
        copyright 2020 tuyano
    @endsection