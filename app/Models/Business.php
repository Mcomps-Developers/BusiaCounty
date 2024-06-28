<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Business extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function market()
    {
        return $this->belongsTo(Market::class, 'market_id');
    }
    public function license()
    {
        return $this->belongsTo(License::class, 'license_id');
    }
}
