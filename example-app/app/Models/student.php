<?php

namespace App\Models;
use App\Models\track;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    use HasFactory;

    function track(){
        return $this->belongsTo(track::class);
    }
    
}
