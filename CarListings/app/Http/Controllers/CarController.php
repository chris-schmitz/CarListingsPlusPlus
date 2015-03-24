<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Car;

use Illuminate\Http\Request;

class CarController extends Controller {


    public function index(Car $car){

        $data = $car->with('qualities')->get()->toArray();
        return compact('data');
    }
}
