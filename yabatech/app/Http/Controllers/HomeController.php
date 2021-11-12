<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NoticeBoard;
use App\Models\News;
use App\Models\Rector;
use App\Models\HomeSliderImage;


class HomeController extends Controller
{
    //

    public function Index(){

        $data['sliders'] = HomeSliderImage::where('status', 1)->latest()->get();
        $data['notices'] = NoticeBoard::where([ 'status'=>1])->latest()->take(4)->get();
        $data['news'] = News::where(['school_id'=>0, 'status'=>1])->latest()->take(5)->get();
        $data['rector'] = Rector::where('designation', 'rector')->first();
        return view('users.index', $data);
    }

    public function News(){
        $data['news'] = News::where(['school_id'=>0, 'status'=>1])->latest()->paginate();
        $data['latest'] = News::where(['school_id' => 0, 'status'=>1])->latest()->take(5)->get();
        return view('users.news.index', $data);  
    }

    public function newsDetails($id){
        $id = decrypt($id);
        $data['news'] = News::where('id', $id)->first();
        $data['latest'] = News::where(['school_id' => 0, 'status'=>1])->latest()->take(3)->get();
        return view('users.news.details', $data);
    }

    public function noticeDetails($id){
        $id = decrypt($id);
        $data['notice'] = NoticeBoard::where('id', $id)->first();
        $data['latest'] = NoticeBoard::where('school_id', 0)->latest()->take(3)->get();
        return view('users.noticeDetails', $data);
    }
}
