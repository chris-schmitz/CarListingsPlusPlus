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
            'wiki'         => 'http://en.wikipedia.org/wiki/Porsche_997',
            'img'          => '2004_Porsche_911_Carrera_type_997.jpg'
        ]);

        $this->car->create([
            'manufacturer' => 'Hyundai',
            'model'        => 'Elantra',
            'price'        => 500,
            'wiki'         => 'https://www.hyundaiusa.com/elantra/index.aspx',
            'img'          => '2002_hyundai_elantra_sedan_gls_fq_oem_1_500.jpg'
        ]);
    }
}
