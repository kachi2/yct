<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Menu extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'status'
    ];

    public function navItems()
    {
        return $this->hasManyThrough(NavDropdown::class, NavList::class, 'menu_id', 'nav_list_id')
            ->select('nav_dropdowns.id', 'nav_dropdowns.name', 'nav_dropdowns.link');
    }

}
