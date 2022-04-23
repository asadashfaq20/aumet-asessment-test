<?php

namespace App\Http\Controllers\Api\v1;

use App\Models\Car;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CarController extends Controller
{
    public function get_cars_list(){

        return response()->json(Car::all(),200);
        
    }
}
