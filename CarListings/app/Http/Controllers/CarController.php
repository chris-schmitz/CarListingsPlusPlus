<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class CarController extends Controller {


    public function index(){
        $data[] = 
            [
                "manufacturer" =>  'Hyundai',
                "model" =>  'Elantra',
                "price" =>  135000,
                "wiki" =>  'http://en.wikipedia.org/wiki/Porsche_997',
                "img" =>  '2004_Porsche_911_Carrera_type_997.jpg',
                "quality" =>  [ 
                    ["name" => 'overall', "rating"=> 1 ], 
                    ["name"=> 'mechanical', "rating"=> 4], 
                    ["name"=> 'powertrain', "rating"=> 2], 
                    ["name"=> 'body', "rating"=> 4],
                    ["name"=> 'interior', "rating"=> 3],
                    ["name"=> 'accessories', "rating"=> 2] 
                ]
            ];
        $data[] = 
            [
                "manufacturer" =>  'Toyota',
                "model" =>  'Celica',
                "price" =>  35000,
                "wiki" =>  'http://en.wikipedia.org/wiki/Porsche_997',
                "img" =>  '2004_Porsche_911_Carrera_type_997.jpg',
                "quality" =>  [ 
                    ["name" => 'overall', "rating"=> 4 ], 
                    ["name"=> 'mechanical', "rating"=> 2], 
                    ["name"=> 'powertrain', "rating"=> 8], 
                    ["name"=> 'body', "rating"=> 8],
                    ["name"=> 'interior', "rating"=> 0],
                    ["name"=> 'accessories', "rating"=> 2] 
                ]
            ];
        return compact('data');
    }
}
