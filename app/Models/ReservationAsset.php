<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReservationAsset extends Model
{
    use HasFactory;

    protected $fillable = ["reservation_id","reservation_asset_id","reservation_asset_type"];
}
