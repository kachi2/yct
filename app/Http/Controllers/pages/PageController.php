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
        return view('users.about.vision-mission');
    }

    /**
     * Return history page
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function history()
    {
        return view('users.about.history');
    }

    /**
     * Return careers page view
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function careers()
    {
        return view('users.careers');
    }

    /**
     * Return career details page
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function careerDetail()
    {
        return view('users.career-detail');
    }

    /**
     * Return contact page
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function contact()
    {
        return view('users.contact.contact-us');
    }

    /**
     * Return events page
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function events()
    {
        return view('users.events');
    }

    /**
     * Return event details page
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function eventDetail()
    {
        return view('users.event-detail');
    }

    /**
     * Return faculties page
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function schools()
    {
        return view('users.faculties');
    }

    /**
     * Return faculty details page
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function schoolDetail()
    {
        return view('users.faculty-detail');
    }

    /**
     * Return faq page
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function faq()
    {
        return view('users.faq');
    }

    /**
     * Return index page
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('users.index');
    }

    /**
     * Return privacy page
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function privacy()
    {
        return view('users.privacy');
    }

    /**
     * Return support page
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function support()
    {
        return view('users.support');
    }

    public function research()
    {
        return view('users.separate.research');
    }


    public function ejournal()
    {
        return view('users.separate.e-journal');
    }

    public function collegeNews(){

        return view('users.news.index');

    }
    public function collegeNewsDetails(){

        return view('users.news.details');

    }

    public function administration($name){
        //dd($name);
        $rector = Rector::where('link', $name)->first();
       // dd($rector);
        return view('users.administration', compact('rector'));

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
