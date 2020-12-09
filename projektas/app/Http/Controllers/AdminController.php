<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Klientas;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
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

    public function admin_prideti_klienta_post(Request $request)
    {
        $user = $this->createUser($request);
        $klientas = Klientas::create([
            'user_id' => $user->id,
        ]);
        return view('admin_prideti_klienta');
    }

    protected function createUser(Request $request)
    {
        return User::create([
            'username' => $request->input('username'),
            'vardas' => $request->input('vardas'),
            'pavarde' => $request->input('pavarde'),
            'email' => $request->input('email'),
            'telefono_nr' => $request->input('telefonas'),
            'gimimo_metai' => $request->input('metai'),
            'role' => $request->input('role'),
            'password' => Hash::make($request->input('password')),
        ]);

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
