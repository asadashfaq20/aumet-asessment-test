<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;

class CarTest extends TestCase
{
    use WithoutMiddleware;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_get_cars_list()
    {
        $response = $this->call("GET","/api/cars");

        $response->assertStatus(200);
    }
}
