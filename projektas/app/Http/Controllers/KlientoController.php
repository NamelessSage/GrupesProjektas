<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserUpdate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;



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
            $data = array(
                        'list' => DB::table('atsiliepimai')->orderBy('created_at', 'desc')->get()
                    );
            return view('atsiliepimai',$data);
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
            return redirect('/klientas');
        }

        public function delete_user(){
            $user = Auth::user();
            $user-> delete();
            return redirect('/');
        }

        function add(Request $request){
         $request->validate([
                'tekstas' => 'required'

            ]);
            $query = DB::table('atsiliepimai')->insert([
                'tekstas' => $request -> input('tekstas'),
                'user' => Auth::user()->username,
                'created_at' => date("Y-m-d h:i:s")
            ]);
            return back();
         }

}
