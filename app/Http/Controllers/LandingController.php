<?php

namespace App\Http\Controllers;

use App\Models\Banner;
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

        return view('welcome', compact('banners'));
    }

    public function dashboard()
    {
        return view('dashboard');
    }
}
