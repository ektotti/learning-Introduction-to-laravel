<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index(Request $request){
        return view('hello.index', ['msg' => 'フォームを入力' ]);
    }

    public function post(Request $request){
        $validateRule = [
            'name' => 'required',
            'mail' => 'email',
            'age' => 'numeric:between0,150',
        ];
        $this->validate($request, $validateRule);
        return view('hello.index',['msg'=>'正しく入力されました！']);
    }
}
