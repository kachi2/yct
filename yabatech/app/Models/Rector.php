<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rector extends Model
{
    use HasFactory;

    protected $fillable = [

        'name', 'staff_id', 'designation', 'about', 'message', 'image', 'link', 'is_active'
    ];
}
