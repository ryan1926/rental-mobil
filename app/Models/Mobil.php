<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mobil extends Model
{
    use HasFactory;
<<<<<<< HEAD
    protected $guarded = [];
}
=======

    protected $guarded = [];
    public function rentalMobil()
    {
        return $this->belongsTo(RentalMobil::class);
    }
}
>>>>>>> ac37d0b2 (pertemuan-12)
