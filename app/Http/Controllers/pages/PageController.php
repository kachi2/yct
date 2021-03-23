<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\Rector;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Return vision page view
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function vision()
    {
        return view('pages.about.vision-mission');
    }

    /**
     * Return history page
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function history()
    {
        return view('pages.about.history');
    }

    /**
     * Return careers page view
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function careers()
    {
        return view('pages.careers');
    }

    /**
     * Return career details page
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function careerDetail()
    {
        return view('pages.career-detail');
    }

    /**
     * Return contact page
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function contact()
    {
        return view('pages.contact.contact-us');
    }

    /**
     * Return events page
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function events()
    {
        return view('pages.events');
    }

    /**
     * Return event details page
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function eventDetail()
    {
        return view('pages.event-detail');
    }

    /**
     * Return faculties page
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function schools()
    {
        return view('pages.faculties');
    }

    /**
     * Return faculty details page
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function schoolDetail()
    {
        return view('pages.faculty-detail');
    }

    /**
     * Return faq page
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function faq()
    {
        return view('pages.faq');
    }

    /**
     * Return index page
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('pages.index');
    }

    /**
     * Return privacy page
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function privacy()
    {
        return view('pages.privacy');
    }

    /**
     * Return support page
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function support()
    {
        return view('pages.support');
    }

    public function research()
    {
        return view('pages.separate.research');
    }


    public function ejournal()
    {
        return view('pages.separate.e-journal');
    }

    public function collegeNews(){

        return view('pages.news.index');

    }
    public function collegeNewsDetails(){

        return view('pages.news.details');

    }

    public function administration($name){
        //dd($name);
        $rector = Rector::where('link', $name)->first();
       // dd($rector);
        return view('pages.administration', compact('rector'));

    }

    public function admission($name){

        if($name == 'programmes'){

            return redirect()->intended('https://portal.yabatech.edu.ng/app/programs/');

        }elseif ($name == 'apply_to_yct'){
            return redirect()->intended('https://erp.yabatech.edu.ng/yabaapplication');

        }elseif($name == 'entry_requirement'){
            return redirect()->intended('https://portal.yabatech.edu.ng/entry/');

        }elseif($name == 'nd_pt'){

            return redirect()->intended('https://yabatech.edu.ng/admlist/ndptlist1.htm');
        }elseif($name == 'hnd_pt'){

            return redirect()->intended('https://yabatech.edu.ng/admlist/hndptlist1.htm');
        }elseif($name == 'acceptance_fee'){

            return redirect()->intended('http://erp.yabatech.edu.ng/portal/index.php?register/account_verification_acceptancefees');
        }

    }


}
