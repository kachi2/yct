<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;
use \Illuminate\Support\Arr;
use App\Models\NavDropdown;
use App\Models\School;
use App\Models\SchoolDean;
use App\Models\News;
use App\Models\NoticeBoard;
use App\Models\Staff;
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
            ->with('departments', Department::where('school_id', 1)->get())
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

    public function StaffList(){
      $data['staffs'] = Staff::get();
      $data['schools'] = School::get();
      return view('users.staffs.index', $data);
    }

    public function StaffDetails($id){
      $id = decrypt($id);
      $staff = Staff::where('id', $id)->first();
      return view('users.staffs.details', compact('staff'));

    }

    public function StaffEmail(){
      return redirect()->intended('https://www.google.com/intl/en-GB/gmail/about/#'); 
    }

    public function StaffPortal(){
      return redirect()->intended('https://staff.yabatech.edu.ng/index.php'); 
    }

    public function StaffLearning(){
      return redirect()->intended('https://edu.google.com/intl/en-GB/products/classroom/'); 
    }

    public function StaffHousing(){
      return redirect()->intended('https://portal.yabatech.edu.ng/Accomodation/login.aspx'); 
    }

    public function schoolStaff($id){
      dd(decrypt($id));
       $dpt = Department::where('school_id', decrypt($id))->first();
      return view('users.schools.staffs')
            ->with('staffs', Staff::where('department_id', $dpt->school_id)->get())
          ->with('school', School::where('id', $dpt->school_id)->first())
          ->with('dean', SchoolDean::where(['school_id' => $dpt->school_id])->first())
          ->with('gallery', SchoolGallery::where(['school_id'=>$dpt->school_id])->first())
          ->with('departments', Department::where('school_id', $dpt->school_id)->get());
  } 


  public function schoolHistory($id){
    return view('users.schools.history')
           ->with('news', News::where(['school_id'=> decrypt($id), 'status'=>1])->get())
            ->with('notice', NoticeBoard::where(['school_id'=>decrypt($id), 'status'=>1])->get())
            ->with('gallery', SchoolGallery::where(['school_id'=>decrypt($id), 'status'=>1])->first())
            ->with('dean', SchoolDean::where(['school_id' => decrypt($id)])->first())
        ->with('school', School::where('id', decrypt($id))->first())
        ->with('gallery', SchoolGallery::where(['school_id'=>decrypt($id)])->first())
        ->with('departments', Department::where('school_id', decrypt($id))->get());
}

  public function SchoolDeans($id){
    return view('users.schools.pastDeans')
        ->with('deans', SchoolDean::where('school_id', decrypt($id))->get())
        ->with('school', School::where('id', decrypt($id))->first())
        ->with('departments', Department::where('school_id', decrypt($id))->get())
        ->with('gallery', SchoolGallery::where(['school_id'=>decrypt($id)])->first());

  }
}
