<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SchoolDean extends Model
{
    use HasFactory;

    protected $fillable = [

        'school_id', 'name', 'image', 'message'
        
    ];

    public function school(){
        return $this->belongsTo(School::class);
    }
}
