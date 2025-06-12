<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Student extends Authenticatable
{
    protected $primaryKey = 'matric_no';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = ['matric_no', 'name', 'email', 'password'];

    public function getAuthPassword()
    {
        return $this->password;
    }
}
