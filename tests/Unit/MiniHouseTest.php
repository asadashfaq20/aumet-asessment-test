<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;

class MiniHouseTest extends TestCase
{
    use WithoutMiddleware;

    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_get_minihouses_list()
    {
        $response = $this->call("GET","/api/minihouses");

        $response->assertStatus(200);
    }
}
