<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePageController extends Controller
{


    public function homePage()
{
    return view('pages.home');
}


    public function peakPage()
    {
        return view('pages.peak');
    }

    public function programPage()
    {
        return view('pages.program');
    }

    public function sponsorPage()
    {
        return view('pages.sponsor');
    }

    public function contactPage()
    {
        return view('pages.contact');
    }




}
