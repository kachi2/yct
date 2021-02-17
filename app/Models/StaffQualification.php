<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StaffQualification extends Model
{
    use HasFactory;

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
