<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KlientoController extends Controller
{
    //


        public function klientas()
        {
            return view('klientas');
        }

        public function redaguoti_profili()
        {
            return view('redaguoti_profili');
        }

        public function atsiliepimai()
        {
            return view('atsiliepimai');
        }

        public function pagalba()
        {
            return view('pagalba');
        }

        public function redaguoti_profilipost(UserUpdate $request){
            $user = Auth::user();
            $user->name = $request['vardas'];
            $user->lastname = $request['pavarde'];
            $user->username = $request['username'];
            $user->email = $request['email'];
            $user->save();
            return back();
        }

        public function delete_user(){
            $user = Auth::user();
            $user-> delete();
            return redirect('/');
        }
}
