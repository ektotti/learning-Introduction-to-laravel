<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use App\Scope\ScopePerson;
// use App\Models\Board;

class Person extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public static $rules = [
        'name' => 'required',
        'mail' => 'email',
        'age' => 'integer|min:0|max:150',
    ];

    public function getData(){
        return $this->name.'は'.$this->age.'歳です。';
    }

    public function scopeNameEqual($query, $str){
        return $query->where('name', $str);
    }

    public function scopeAgeGreaterThan($query, $n){
        return $query->where('age', '>', $n);
    }

    public function scopeAgeLessThan($query, $n){
        return $query->where('age','<',$n);
    }

    protected static function boot() {
        parent::boot();

        // static::addGlobalScope(new ScopePerson);

    }

    public function board(){
        return $this->hasOne('App\Models\Board');
    }
    
    public function boards(){
        return $this->hasMany('App\Models\Board');
    }

}
