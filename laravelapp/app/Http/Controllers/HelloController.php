<?php

namespace App\Http\Controllers;

use App\Http\Requests\HelloRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class HelloController extends Controller
{
    public function index(Request $request){
        $items = DB::table('people')
            ->orderBy('id', 'desc')
            ->get();
        return view('hello.index', ['items' => $items, ]);
    }

    public function show(Request $request){
        $min = $request->min;
        $max = $request->max;
        $items = DB::table('people')
        ->whereRaw('id > ? and id < ?' , [$min, $max])->get();
        return view('hello.show', ['items' => $items, ]);
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

    public function add(){
        return view('hello.add');
    }

    public function create(Request $request){

        $params = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'picture' => $request->picture,
        ];
        DB::table('people')->insert($params);
        return redirect('/hello');
    }

    public function edit(Request $request){
        $item = DB::table('people')
            ->where('id', $request->id)
            ->first();
        return view('hello.edit',['item'=>$item]);
    }

    public function update(Request $request){

        $params = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'picture' => $request->picture,
        ];
        DB::table('people')
        ->where('id', $request->id)
        ->update($params);
        return redirect('/hello');
    }
}
