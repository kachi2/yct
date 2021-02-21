<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Department extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'school_id',
        'description',
        'image',
        'link',

    ];

    public function staffList()
    {
        return $this->hasMany(StaffList::class);
    }

    public function school()
    {
        return $this->belongsTo(School::class);
    }
}
