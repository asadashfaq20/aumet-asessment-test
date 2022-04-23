<?php

namespace Database\Seeders;

use App\Models\Car;
use Illuminate\Database\Seeder;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Car::insert([
            [
                "type" => "Sedan",
                "model" => "Bmw 530e",
                "year" => "2021",
                "color" => "red",
                "number_of_passengers" => 5,
                "created_at" => now()
            ],
            [
                "type" => "Sedan",
                "model" => "Mercedes e200",
                "year" => "2021",
                "color" => "black",
                "number_of_passengers" => 5,
                "created_at" => now()
            ],
            [
                "type" => "Sport",
                "model" => "Ford Mustang",
                "year" => "2017",
                "color" => "white",
                "number_of_passengers" => 2,
                "created_at" => now()
            ],
        ]);
    }
}
