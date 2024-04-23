<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hod extends Model
{
    use HasFactory;

    protected $fillable = [

        'school_id', 'name', 'department_id', 'image', 'message', 'status', 'expired_at', 'staff_id'
    ];

    public function staff(){
        return $this->belongsTo(Staff::class, 'staff_id', 'id');
    }

    public function department(){
        return $this->belongsTo(Department::class, 'department_id', 'id');
    }
}
