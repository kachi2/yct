<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{
    use HasFactory, SoftDeletes;

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
