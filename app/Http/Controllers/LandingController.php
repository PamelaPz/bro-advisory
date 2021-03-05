<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\About;
use App\Models\Services;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function welcome()
    {
        $banners = Banner::all();
        $about = About::find(1);
        $services = Services::all();

        return view('welcome', compact('banners', 'about', 'services'));
    }

    public function dashboard()
    {
        return view('dashboard');
    }
}
