<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class NavList extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'menu_id',
        'status'
    ];

    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }

    public function navDropdown()
    {
        $this->hasMany(NavDropdown::class);
    }
}
