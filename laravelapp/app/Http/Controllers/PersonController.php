<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;
use Hamcrest\Type\IsInteger;
use Hamcrest\Type\IsString;

class PersonController extends Controller
{
    public function index(Request $request){

        $items = Person::all();
        return view('person.index', ['items'=>$items]);
    
    }

    public function find(Request $request){
        return view('person.find', ['input' => '']);
    }

    public function search(Request $request){
        
        $min = $request->input;
        $max = $min + 40;
        
            // $item = Person::nameEqual($input)->first();
            // $param = ['input' => $input, 'item' => $item];
        
            $item = Person::ageGreaterThan($min)->ageLessThan($max)->first();
            $param = ['input' => '', 'item' => $item];
        
        return view('person.find', $param);
    }

    public function add(Request $request){
        return view('person.add');
    }

    public function create(Request $request){
        $this->validate($request, Person::$rules);
        $person = new Person;
        $form = $request->all();
        unset($form['_token']);
        $person->fill($form)->save();

        return redirect('/person');
    }

    public function edit(Request $request) {
        $form = Person::find($request->id);
        return view('person.edit', ['form' => $form]);
    }

    public function update(Request $request) {
        $this->validate($request, Person::$rules);
        $person = Person::find($request->id);
        $form = $request->all();
        unset($form['_token']);
        $person->fill($form)->save();
        return redirect('/person');
    }

    public function del(Request $request) {
        $person = Person::find($request->id);
        return view('person.del', ['form' => $person]);
    }
    public function remove(Request $request) {
        $person = Person::find($request->id);
        $person ->delete();
        return redirect('/person');
    }

}