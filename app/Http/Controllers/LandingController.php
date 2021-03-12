<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\About;
use App\Models\Services;
use App\Models\Icons;
use App\Models\Advisory;
use App\Models\Contact;
use App\Models\Imgclients;
use App\Models\Clients;
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
        $advisories = Advisory::all();
        $icons = Icons::all();
        $clients = Clients::all();
        $clientimgs = Imgclients::all();
        $contact = Contact::find(1);

        return view('welcome', 
        compact('banners', 'about', 'services', 'advisories', 'contact', 'clients', 'icons', 'clientimgs'));
    }

    public function dashboard()
    {
        return view('dashboard');
    }
}
