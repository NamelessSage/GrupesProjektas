<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Klientas;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function administracinis()
    {
        return view('administracinis');
    }

    public function admin_klientai()
    {
        $klientai = User::where('role', 'klientas')->where('deleted_at', null)->get();
        return view('admin_klientai', ['klientai'=>$klientai]);
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
        return redirect(route('admin_klientas', $klientas->user_id));
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

    public function admin_klientas($id)
    {
        $klientas = User::find($id);
        return view('admin_klientas', ['klientas'=>$klientas]);
    }

    public function admin_redaguoti_klienta($id)
    {
        $klientas = User::find($id);
        return view('admin_redaguoti_klienta', ['id'=>$id, 'klientas'=>$klientas]);
    }

    public function admin_redaguoti_klienta_post($id, Request $request)
    {
        $klientas = User::find($id);
        $klientas->vardas = $request->input('vardas');
        $klientas->pavarde = $request->input('pavarde');
        $klientas->save();
        return redirect(route('admin_klientas', $id));
    }

    public function admin_salinti_klienta($id)
    {
        $klientas = User::find($id);
        $klientas->delete();
        return redirect(route('admin_klientai'));
    }



    public function admin_uzsakymai()
    {
        return view('admin_uzsak_saras');
    }




    public function admin_pagalbos_sarasas()
    {
        $admin = Auth::id();
        dd($admin);
        return view('admin_pagalbu_sarasas');
    }

    public function admin_pokalbio_langas()
    {
        return view('admin_pokalbio_langas');
    }
}
