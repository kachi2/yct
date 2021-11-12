<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NoticeBoard extends Model
{
    use HasFactory;

    protected $fillable = [
        'headline', 'content', 'updated_at', 'status', 'posted_by'

    ];

    public function user(){
        return $this->belongsTo('App\Models\User', 'posted_by', 'id');
    }
    public function school(){
        return $this->belongsTo('App\Models\School', 'school_id', 'id');
    }
}
