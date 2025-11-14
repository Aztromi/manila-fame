<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'username',
        'password',
        'type_of_participation',
    ];

    protected $hidden = ['password'];

    public function company()
    {
        return $this->hasOne(Company::class);
    }
}
