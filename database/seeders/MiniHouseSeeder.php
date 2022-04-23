<?php

namespace Database\Seeders;

use App\Models\MiniHouse;
use Illuminate\Database\Seeder;

class MiniHouseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MiniHouse::insert([
            [
                "area" => 160,
                "number_of_rooms" => 4,
                "number_of_bath_rooms" => 3,
                "has_internet" => true,
                "has_parking" => true,
                "created_at" => now()
            ],
            [
                "area" => 110,
                "number_of_rooms" => 2,
                "number_of_bath_rooms" => 1,
                "has_internet" => true,
                "has_parking" => false,
                "created_at" => now()
            ],
            [
                "area" => 125,
                "number_of_rooms" => 3,
                "number_of_bath_rooms" => 2,
                "has_internet" => true,
                "has_parking" => true,
                "created_at" => now()
            ],
        ]);
    }
}
