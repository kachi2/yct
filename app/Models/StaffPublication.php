<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StaffPublication extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'publication_date'
    ];

    public function staffProfile()
    {
        return $this->belongsTo(StaffProfile::class);
    }
}
