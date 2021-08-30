<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class StaffList extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'department_id',
        'category_id',
        'designation',
        'school_id',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function school()
    {
       return $this->belongsTo(School::class);
    }

    public function department()
    {
       return $this->belongsTo(Department::class);
    }

    public function category()
    {
        return $this->hasMany(Category::class);
    }

    public function staffProfile()
    {
        return $this->hasOne(StaffProfile::class);
    }
}
