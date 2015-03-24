<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Quality extends Model {

	//
    protected $table = "quality";
    
    protected $fillable = ['name', 'rating', 'car_id'];

    public function car(){
        return $this->belongsTo('App\Car');
    }

}
