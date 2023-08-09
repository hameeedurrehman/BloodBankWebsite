<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bloodgroup extends Model
{
    use HasFactory;
    public function Bloodgroups(){
        return $this->belongsToMany(Hospital::class, 'Donors');
    }
}
