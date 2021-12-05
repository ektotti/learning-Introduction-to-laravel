<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index(){
        $fruits = ['melon', 'orange', 'peach', 'cacao'];
        $sport = ['football', 'baseball', 'tennis', 'sprint'];
        $data = [
            ['name'=>'戸谷志乃','age'=>27],
            ['name'=>'山田花子','age'=>99],
            ['name'=>'宮田淳二','age'=>30]
        ];
        return view('hello.index', ['data' => $data]);
    }

    // public function post(Request $request){
    //     $data = [
    //         'msg' => $request->msg
    //     ];

    //     $items = "apple";
    //     $result = compact('data','items');
    //     return view('hello.index',$result);
    // }
}
