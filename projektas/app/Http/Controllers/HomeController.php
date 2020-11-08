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

    public function klientas()
    {
        return view('klientas');
    }

    public function administracinis()
    {
        return view('administracinis');
    }

    public function admin_uzsakymai()
    {
        return view('admin_uzsak_saras');
    }

    public function admin_klientai()
    {
        return view('admin_klientai');
    }

    public function admin_prideti_klienta()
    {
        return view('admin_prideti_klienta');
    }

    public function admin_klientas()
    {
        return view('admin_klientas');
    }

    public function admin_redaguoti_klienta()
    {
        return view('admin_redaguoti_klienta');
    }

    public function admin_pagalbos_sarasas()
    {
        return view('admin_pagalbu_sarasas');
    }

    public function admin_pokalbio_langas()
    {
        return view('admin_pokalbio_langas');
    }
}
