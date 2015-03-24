<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use App\Quality;

class QualitySeeder extends Seeder{

    protected $quality;

    public function __construct(Quality $quality){
        $this->quality = $quality;
    }

    public function run(){
        $this->quality->truncate();

        // ======================================== //
        $this->quality->create([
            'car_id' => 1,
            'name'   => 'overall',
            'rating' => 1
        ]);

        $this->quality->create([
            'car_id' => 1,
            'name'   => 'mechanical',
            'rating' => 4
        ]);

        $this->quality->create([
            'car_id' => 1,
            'name'   => 'powertrain',
            'rating' => 2
        ]);

        $this->quality->create([
            'car_id' => 1,
            'name'   => 'body',
            'rating' => 4
        ]);

        $this->quality->create([
            'car_id' => 1,
            'name'   => 'interior',
            'rating' => 3
        ]);

        $this->quality->create([
            'car_id' => 1,
            'name'   => 'accessories',
            'rating' => 2
        ]);
        // ======================================== //

        // ======================================== //
        $this->quality->create([
            'car_id' => 2,
            'name'   => 'overall',
            'rating' => 8
        ]);

        $this->quality->create([
            'car_id' => 2,
            'name'   => 'mechanical',
            'rating' => 5
        ]);

        $this->quality->create([
            'car_id' => 2,
            'name'   => 'powertrain',
            'rating' => 6
        ]);

        $this->quality->create([
            'car_id' => 2,
            'name'   => 'body',
            'rating' => 1
        ]);

        $this->quality->create([
            'car_id' => 2,
            'name'   => 'interior',
            'rating' => 3
        ]);

        $this->quality->create([
            'car_id' => 2,
            'name'   => 'accessories',
            'rating' => 7
        ]);
        // ======================================== //
    }
}
