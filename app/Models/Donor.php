<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donor extends Model
{
    protected $primaryKey = 'cnic'; // Set as primary key
    public $incrementing = false;

    public function bloodgroup() 
    {
        return $this->belongsTo(Bloodgroup::class, 'Bloodgroup'); 
    }

    public function hospital() 
    {
        return $this->belongsTo(Hospital::class, 'Hospital'); 
    }
}