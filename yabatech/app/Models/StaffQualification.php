<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class StaffQualification extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'year',
        'school'
    ];

    public function staffProfile()
    {
        return $this->belongsTo(StaffProfile::class);
    }
}
