<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NavList extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'menu_id'
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
