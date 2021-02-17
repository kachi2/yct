<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'password',
        'provider_id',
        'provider',
        'image',
        'role_id'
    ];

    public function role()
    {
        return $this->hasOne(Role::class);
    }

    public function staffList()
    {
        return $this->hasMany(StaffList::class);
    }

    public function activities()
    {
        return $this->hasMany(Activity::class);
    }
}
