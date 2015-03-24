<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model {

	//
    protected $fillable = ['manufacturer', 'model', 'price', 'wiki', 'img'];

    public function qualities(){
        return $this->hasMany('App\Quality');
    }
}
