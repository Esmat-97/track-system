<?php

namespace App\Models;
use App\Models\student;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class track extends Model
{
    use HasFactory;

    protected $fillable=["tilte","description","track_id","image"];

    function students(){

        return $this->hasMany(student::class);
        
    }

}
