<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\MiniHouse;
use Illuminate\Http\Request;

class MiniHouseController extends Controller
{
    public function get_minihouses_list(){

        return response()->json(MiniHouse::all(),200);
        
    }
}
