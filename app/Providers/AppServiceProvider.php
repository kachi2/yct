<?php

namespace App\Providers;

use App\Models\Menu;
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
        $menuCollection = Menu::select('id', 'name')->with('navItems')->get();
        $about = $administration = $admissions = $bursary = $staff = $alumni = $more = $contact = $ccs = $schools =
        $students = $sIntervention = $aIntervention = $registry = $academicUnits = $serviceUnits = '';
        foreach ($menuCollection as $navCollection) {
            $about = $navCollection->name === 'About' ? $navCollection->navItems : '';
            $administration = $navCollection->name === 'Administration' ? $navCollection->navItems : '';
            $admissions = $navCollection->name === 'Admissions' ? $navCollection->navItems : '';
            $bursary = $navCollection->name === 'Bursary' ? $navCollection->navItems : '';
            $staff = $navCollection->name === 'Staff' ? $navCollection->navItems : '';
            $alumni = $navCollection->name === 'Alumni' ? $navCollection->navItems : '';
            $more = $navCollection->name === 'More' ? $navCollection->navItems : '';
            $contact = $navCollection->name === 'Contact' ? $navCollection->navItems : '';
            $ccs = $navCollection->name === 'CCS' ? $navCollection->navItems : '';
            $schools = $navCollection->name === 'Schools' ? $navCollection->navItems : '';
            $students = $navCollection->name === 'Students' ? $navCollection->navItems : '';
            $sIntervention = $navCollection->name === 'Special Intervention' ? $navCollection->navItems : '';
            $aIntervention = $navCollection->name === 'Annual Intervention' ? $navCollection->navItems : '';
            $registry = $navCollection->name === 'Registry' ? $navCollection->navItems : '';
            $academicUnits = $navCollection->name === 'Academic Units' ? $navCollection->navItems : '';
            $serviceUnits = $navCollection->name === 'Service Units' ? $navCollection->navItems : '';
        }
        $menuItems = ['about' => $about, 'administration' => $administration, 'admission' => $admissions, 'bursary' => $bursary,
            'staff' => $staff, 'alumni' => $alumni, 'more' => $more, 'contact' => $contact, 'css' => $ccs, 'schools' => $schools,
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
        $this->navMenu();
    }
}
