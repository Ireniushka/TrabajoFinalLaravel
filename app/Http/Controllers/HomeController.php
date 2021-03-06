<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    public function getAd()
    {
        return view('homeAdmin');
    }
    public function getTut()
    {
        return view('homeTut');
    }
    public function getAl()
    {
        return view('homeAlum');
    }
}
