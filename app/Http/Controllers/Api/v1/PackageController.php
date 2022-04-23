<?php

namespace App\Http\Controllers\Api\v1;

use App\Models\Package;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PackageController extends Controller
{
    public function get_packages_list(){

        return response()->json(Package::all(),200);
        
    }
}
