<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DailyParking extends Model
{
    use HasFactory;

    public function vehicleType(){
        return $this->belongsTo(Vehicle::class,'vehicle_id');
    }
    public function zone(){
        return $this->belongsTo(Zone::class,'zone_id');
    }
}
