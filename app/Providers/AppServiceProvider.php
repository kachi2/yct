<?php

namespace App\Providers;

use App\Models\Menu;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    public function navMenu()
    {
        $menuCollection = Cache::remember('menuCollection', 1440, function () {
            return Menu::select('id', 'name')->with('navItems')->get();
        });
        $about = $administration = $admissions = $bursary = $staff = $alumni = $contact = $ccs = $schools =
        $students = $sIntervention = $aIntervention = $registry = $academicUnits = $serviceUnits = $empty = $more = '';

        foreach ($menuCollection as $navCollection) {
            $navCollection->name === 'About' ? $about = $navCollection->navItems : $empty = '';
            $navCollection->name === 'Administration' ? $administration = $navCollection->navItems : $empty = '';
            $navCollection->name === 'Admissions' ? $admissions = $navCollection->navItems : $empty = '';
            $navCollection->name === 'TETFund_Special' ? $sIntervention = $navCollection->navItems : $empty = '';
            $navCollection->name === 'TETFund_Annual' ? $aIntervention = $navCollection->navItems : $empty = '';
            $navCollection->name === 'Academics_CCS' ? $ccs = $navCollection->navItems : $empty = '';
            $navCollection->name === 'Academics_Schools' ? $schools = $navCollection->navItems : $empty = '';
            $navCollection->name === 'Academics_Students' ? $students = $navCollection->navItems : $empty = '';
            $navCollection->name === 'Units_Academic' ? $academicUnits = $navCollection->navItems : $empty = '';
            $navCollection->name === 'Units_Service' ? $serviceUnits = $navCollection->navItems : $empty = '';
            $navCollection->name === 'Units_Bursary' ? $bursary = $navCollection->navItems : $empty = '';
            $navCollection->name === 'Units_Registry' ? $registry = $navCollection->navItems : $empty = '';
            $navCollection->name === 'More_Others' ? $more = $navCollection->navItems : $empty = '';
            $navCollection->name === 'More_Contact' ? $contact = $navCollection->navItems : $empty = '';
            $navCollection->name === 'More_Staff' ? $staff = $navCollection->navItems : $empty = '';
            $navCollection->name === 'More_Alumni' ? $alumni = $navCollection->navItems : $empty = '';
        }
        $menuItems = ['about' => $about, 'administration' => $administration, 'admission' => $admissions, 'bursary' => $bursary,
            'staff' => $staff, 'alumni' => $alumni, 'more' => $more, 'contact' => $contact, 'ccs' => $ccs, 'schools' => $schools,
            'students' => $students, 'sIntervention' => $sIntervention, 'aIntervention' => $aIntervention, 'registry' => $registry,
            'academicUnits' => $academicUnits, 'serviceUnits' => $serviceUnits];
        view()->composer(['pages.layout.app'], function ($view) use ($menuItems) {
            $view->with('menuNavs', $menuItems);
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
//        $this->navMenu();
    }
}
