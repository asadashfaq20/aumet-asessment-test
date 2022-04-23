<?php

namespace Tests\Unit;

use App\Models\Car;
use Tests\TestCase;
use App\Models\User;
use App\Models\Package;
use App\Models\MiniHouse;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;


class ReservationTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_store_reservation()
    {

        $faker = \Faker\Factory::create();

        $user = User::create([
            'name' => $faker->name,
            'email' => $faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => Hash::make("password"),
            'api_token' => Str::random(60),
            'remember_token' => Str::random(10),
        ]);

        $package = Package::first();
        $car = Car::first();
        $house = MiniHouse::first();

        $response = $this->call('POST', '/api/reservation',[
            'package_id' => $package->id,
            'car_id' => $car->id,
            'house_id' => $house->id,
            'api_token' => $user->api_token
        ]);

        $response->assertStatus(200);
    }
}
