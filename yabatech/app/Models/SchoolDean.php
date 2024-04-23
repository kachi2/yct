<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SchoolDean extends Model
{
    use HasFactory;

    protected $fillable = [

        'school_id', 'name', 'image', 'message', 'status', 'expired_at', 'staff_id'
        
    ];

    public function school(){
        return $this->belongsTo(School::class);
    }

    public function staff(){
        return $this->belongsTo(Staff::class, 'staff_id', 'id');
    }
}
