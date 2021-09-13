<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Illuminate\Support\Arr;
use App\Models\NavDropdown;
use App\Models\School;
use App\Models\SchoolDean;
use App\Models\News;
use App\Models\NoticeBoard;
use App\Models\SchoolGallery;
use App\Models\TetfundSupport;
use App\Models\TetfundBook;
use App\Models\TetfundResearch;
use App\Models\TetfundHousing;
use App\Models\TetFundsIct;
use App\Models\TetfundTraining;

class SchoolController extends Controller
{
    
    public function index(){
        $subdomain = Arr::first(explode('.', request()->getHost()));
        $link = NavDropdown::where('external_link', $subdomain)->first();
        $ss = School::where('slug', $link->external_link)->first();
        return view('users.schools.index')
            ->with('news', News::where(['school_id'=> $ss->id, 'status'=>1])->get())
            ->with('notice', NoticeBoard::where(['school_id'=>$ss->id, 'status'=>1])->get())
            ->with('gallery', SchoolGallery::where(['school_id'=>$ss->id, 'status'=>1])->first())
            ->with('dean', SchoolDean::where(['school_id' => $ss->id])->first())
            ->with('school',School::where('slug', $link->external_link)->first());
    }

    public function TetFundResearch(){
      return view('users.tetfunds.research')
                ->with('research', TetfundResearch::get());
    }

    public function TetFundTraining(){
      return view('users.tetfunds.training')
                ->with('training', TetfundTraining::get());
    }

    public function TetFundBooks(){
      return view('users.tetfunds.books')
                ->with('books', TetFundBook::get());
    }

    public function TetFundSupport(){
      return view('users.tetfunds.supports')
                ->with('support', TetFundSupport::get());
    }

    public function TetFundICT(){
      return view('users.tetfunds.ict')
                ->with('ict', TetFundsIct::get());
    }
}
