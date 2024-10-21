<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable

{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'email',
        'password',
        'provider_id',
        'provider',
        'image',
        'role_id',
        'otp',
        'is_verified',
        'last_login', 
        'login_ip',
    ];

    public function role()
    {
        return $this->hasOne(Role::class);
    }

    public function staffList()
    {
        return $this->hasMany(Staff::class);
    }

    public function activities()
    {
        return $this->hasMany(Activity::class);
    }
}
