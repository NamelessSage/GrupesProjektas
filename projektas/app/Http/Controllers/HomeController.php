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
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function krepselis()
    {
        return view('krepselis');
    }

    public function konstravimo()
    {
        return view('konstravimo');
    }

    public function administracinis()
    {
        return view('administracinis');
    }

    public function klientas()
    {
        return view('klientas');
    }
}
