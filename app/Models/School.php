<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'link',
        'description',
    ];

    public function staffList()
    {
        return $this->hasMany(StaffList::class);
    }

    public function departments()
    {
        return $this->hasMany(Department::class);
    }

    public function events()
    {
        return $this->hasMany(Event::class);
    }
}
