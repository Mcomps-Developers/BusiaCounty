<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ward extends Model
{
    use HasFactory;
    public function subCounty(){
        return $this->belongsTo(Subcounty::class,'subcounty_id');
    }
}
