<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index(){
        $fruits = ['melon', 'orange', 'peach', 'cacao'];
        $sport = ['football', 'baseball', 'tennis', 'sprint'];

        return view('hello.index',compact('fruits', 'sport'));
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
