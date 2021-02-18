<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function navItems()
    {
        return $this->hasManyThrough(NavDropdown::class,NavList::class, 'menu_id', 'nav_list_id')
            ->select('nav_dropdowns.id', 'nav_dropdowns.name', 'nav_dropdowns.link');
    }

}
