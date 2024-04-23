<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Unit;
class UnitsController extends Controller
{
    //


    //get all units routes


    public function Index($slug){
      $slug = Unit::where('slug', $slug)->first();
      return view('users.units', compact('slug', $slug));

    }
}
