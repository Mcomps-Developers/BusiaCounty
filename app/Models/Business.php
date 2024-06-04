<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    use HasFactory;

    public function market()
    {
        return $this->belongsTo(Market::class, 'market_id');
    }
    public function license()
    {
        return $this->belongsTo(License::class, 'license_id');
    }
}
