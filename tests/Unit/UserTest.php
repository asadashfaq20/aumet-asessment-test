<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;

class UserTest extends TestCase
{
    use WithoutMiddleware;
    
    
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_get_user_detail()
    {  
        $response = $this->call("GET","/api/user");

        $response->assertStatus(200);
    }
}
