<?php

namespace App\Http\Controllers\Api\v1;

use Exception;
use Carbon\Carbon;
use App\Models\Package;
use App\Models\Reservation;
use Illuminate\Http\Request;
use App\Models\ReservationAsset;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    public function store_reservation(Request $request){
        
        DB::beginTransaction();
        
        try{

            $request->validate([
                'package_id' => 'required|exists:packages,id',
                'car_id' => 'required|exists:cars,id',
                'house_id' => 'required|exists:mini_houses,id',
            ]);

            $package = Package::find($request->package_id);

            $reservation = Reservation::create([
                'user_id' => Auth::user()->id,
                'expire_at' => Carbon::now()->addDays($package->number_of_days)->toDateTimeString()
            ]);

            ReservationAsset::insert([
                [
                    'reservation_id' => $reservation->id,
                    'reservation_asset_id' => $request->car_id,
                    'reservation_asset_type' => '\App\Models\Car',
                    'created_at' => now()
                ],
                [
                    'reservation_id' => $reservation->id,
                    'reservation_asset_id' => $request->house_id,
                    'reservation_asset_type' => '\App\Models\MiniHouse',
                    'created_at' => now()
                ]
            ]);

            DB::commit();

            return response()->json([
                'success' => true,
                'msg' => 'Reservation Saved Successfully.'
            ]);

        }catch( Exception $e ){

            DB::rollback();
            
            return response()->json([
                "success" => false,
                "msg" => "Invalid Request For Reservation"
            ],422);

        } 
    }
}
