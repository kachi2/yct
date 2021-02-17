<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
      'name',
      'image',
      'link',
      'description',
      'event_date',
      'school_id'
    ];
    public function school () {
        return $this->belongsTo(School::class);
    }
}
