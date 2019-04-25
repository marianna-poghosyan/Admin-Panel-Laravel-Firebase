<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home/index');
    }

    public function trips()
    {
        return view('home/trips');
    }

    public function stay()
    {
        return view('home/stay');
    }

    public function food()
    {
        return view('home/food');
    }

    public function friends()
    {
        return view('home/friends');
    }

    public function visa()
    {
        return view('home/visa');
    }

    public function session()
    {
        return view('home/session');
    }

    public function calendar()
    {
        return view('home/calendar');
    }

    public function tables()
    {
        return view('home/tables');
    }
}
