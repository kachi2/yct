<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;

    protected $fillable = [

        'name', 'image', 'email', 'department_id', 'school_id', 'category_id', 'departments', 'designation', 'qualification', 'Publications', 'research_areas'
    ];

    public function category(){
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function department(){
        return $this->belongsTo(Department::class, 'department_id', 'id');
    }

    public function school(){
        return $this->belongsTo(school::class, 'school_id', 'id');
    }

    public function image($image, $staff){
        if(request()->hasfile('image')){
        $image = $image;
        $name =  $image->getClientOriginalName();
        $ext =  $image->getClientOriginalExtension();
        $dd = md5(time());
        $fileName = $dd.'.'.$ext;
        $image->move('assets/profile/', $fileName);
        $staff->image = $fileName;
        }
    }
}
