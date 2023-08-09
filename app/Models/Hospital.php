<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
    use HasFactory;
    public function Hospitals(){
        return $this->belongsToMany(Bloodgroup::class, 'Donors');
    }
}
