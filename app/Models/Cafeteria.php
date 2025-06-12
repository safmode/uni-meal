<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Cafeteria extends Authenticatable
{
    use Notifiable;

    protected $guard = 'cafeteria';
    protected $primaryKey = 'cafeteria_id';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'cafeteria_id',
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
}
