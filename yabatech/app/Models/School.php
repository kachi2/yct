<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class School extends Model
{
    use HasFactory, SoftDeletes;

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
        return $this->hasMany(Department::class, 'school_id', 'id');
    }

    public function events()
    {
        return $this->hasMany(Event::class);
    }

    public function gallery(){
        return $this->hasMany(SchoolGallery::class);
    }

    public function deans(){
        return $this->hasMany(SchoolDean::class, 'school_id', 'id');
    }

    function staff(){
        return $this->hasManyThrough(Staff::class, Department::class);
    
    }

}
