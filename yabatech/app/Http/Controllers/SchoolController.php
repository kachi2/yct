<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Illuminate\Support\Arr;
use App\Models\NavDropdown;
use App\Models\School;
use App\Models\SchoolDean;
use App\Models\Event;


class SchoolController extends Controller
{
    
    public function index(){
        $subdomain = Arr::first(explode('.', request()->getHost()));
        $link = NavDropdown::where('external_link', $subdomain)->first();
      //  dd($link->external_link);
        $ss = School::where('slug', $link->external_link)->first();
       // dd($ss);
        $events = Event::where('school_id', $ss->id)->first();
        $dean = SchoolDean::where('school_id', $ss->id)->first();

       // dd($ss);

        return view('users.schools.index')
            ->with('events', Event::where(['school_id'=> $ss->id])->first())
            ->with('dean', SchoolDean::where(['school_id' => $ss->id])->first())
            ->with('school',School::where('slug', $link->external_link)->first());
    }
}
