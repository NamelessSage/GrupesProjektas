<?php

namespace App\Http\Controllers;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function apziura()
    {
        return view('apziura');
    }
    public function krepselioPatvirtinimas()
    {
        return view('krepselioPatvirtinimas');
    }
    public function krepselis()
    {
        return view('krepselis');
    }

    public function konstravimo()
    {
        return view('konstravimo');
    }

}
