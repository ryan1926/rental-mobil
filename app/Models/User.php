<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
<<<<<<< HEAD
        'name',
        'email',
=======
        'username',
>>>>>>> ac37d0b2 (pertemuan-12)
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
<<<<<<< HEAD
        'password' => 'hashed',
    ];
    public function roles(){
        return $this->belongsToMany(Role::class);
    }
=======
    ];


    public function roles() {
        return $this->belongsToMany(Role::class);
    }

    public function rentalMobil()
    {
        return $this->hasOne(RentalMobil::class);
    }

    public function konsumen()
    {
        return $this->hasOne(Konsumen::class);
    }
>>>>>>> ac37d0b2 (pertemuan-12)
}
