<?php

namespace Database\Seeders;

use App\Models\Package;
use Illuminate\Database\Seeder;

class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Package::insert([
            [
                'name' => 'Plan A',
                'number_of_days' => 2,
                'created_at' => now(),
            ],
            [
                'name' => 'Plan B',
                'number_of_days' => 14,
                'created_at' => now(),
            ],
            [
                'name' => 'Plan C',
                'number_of_days' => 30,
                'created_at' => now(),
            ],
        ]);
    }
}
