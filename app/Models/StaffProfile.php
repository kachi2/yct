<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class StaffProfile extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'cv',
        'email',
        'research_areas',
        'staff_publication_id',
        'staff_qualification_id',
        'staff_list_id'
    ];

    public function staffList()
    {
        return $this->belongsTo(StaffList::class);
    }

    public function staffPublication()
    {
        return $this->hasMany(StaffPublication::class);
    }

    public function staffQualification()
    {
        return $this->hasMany(StaffQualification::class);
    }
}
