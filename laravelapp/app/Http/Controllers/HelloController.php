<?php

namespace App\Http\Controllers;

use App\Http\Requests\HelloRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HelloController extends Controller
{
    public function index(Request $request){
        $validator = Validator::make($request->all(), 
        [
            'id'=>'required',
            'age'=>'numeric|between:0,150',
        ]);
        if($validator->fails()){
            $msg = 'クエリ文に問題があります。';
        }else{
            $msg = '正しく入力されました。';
        }
        return view('hello.index', ['msg' => $msg, ] );
    }

    public function post(HelloRequest $request){

        // $rules = [
        //     'name'=>'required',
        //     'mail'=>'email',
        //     'age'=>'numeric',
        // ];

        // $messages = [
        //     'name.required'=>'名前の入力は必須です。',
        //     'mail.email'=>'メールアドレスが必要です。',
        //     'age.numeric'=>'年齢は数字で入力下さい。',
        //     'age.min'=>'年齢は0以上で入力下さい',
        //     'age.max'=>'年齢は200以下で入力下さい。',
        // ];

        // $validator = FacadesValidator::make($request->all(), $rules, $messages);

        // $validator->sometimes('age', 'min:0',function($input){
        //     return is_numeric($input->age);
        // });

        // $validator->sometimes('age', 'max:200',function($input){
        //     return is_numeric($input->age);
        // });
        
        // if($validator->fails()){
        //     return redirect('/hello')
        //                     ->withErrors($validator)
        //                     ->withInput();
        // }
        return view('hello.index',['msg'=>'正しく入力されました！']);
    }
}
