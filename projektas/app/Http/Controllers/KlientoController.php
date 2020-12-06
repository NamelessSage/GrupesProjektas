<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserUpdate;
use Illuminate\Support\Facades\Auth;



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
            $user->vardas = $request['name'];
            $user->pavarde = $request['lastname'];
            $user->username = $request['username'];
            $user->email = $request['email'];
            $user->telefono_nr = $request['phone'];
            $user->gimimo_metai = $request['date'];
            $user->save();
            return redirect('/klientas');;
        }

        public function delete_user(){
            $user = Auth::user();
            $user-> delete();
            return redirect('/');
        }
}
