<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'links', 'content', 'image', 'school_id', 'status', 'posted_by'
    ];

    public function school(){
        return $this->belongsTo('App\Models\School', 'school_id', 'id');
    }

    public function user(){
        return $this->belongsTo('App\Models\User', 'posted_by', 'id');
    }
}
