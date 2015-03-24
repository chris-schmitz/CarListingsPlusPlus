<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use App\Car;

class CarSeeder extends Seeder{

    protected $car;

    public function __construct(Car $car){
        $this->car = $car;
    }

    public function run(){
        $this->car->truncate();

        $this->car->create([
            'manufacturer' => 'CS',
            'model'        => 'tester',
            'price'        => 123,
            'wiki'         => 'http://www.google.com',
            'img'          => 'tester.png'
        ]);
    }
}
