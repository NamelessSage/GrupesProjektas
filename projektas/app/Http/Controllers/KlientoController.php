<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserUpdate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Pokalbis;
use App\Models\Klientas;
use App\Models\User;
use App\Models\Zinutes;


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
            $user = Auth::user()->klientas->id;

            $pokalbiai = Pokalbis::where('klientas_id',$user)->orderBy('created_at', 'desc')->get();
            return view('pagalba',['pokalbiai'=>$pokalbiai]);
        }

        public function redaguoti_profilipost(UserUpdate $request){
            $user = Auth::user();
            $user->vardas = $request['name'];
            $user->pavarde = $request['lastname'];
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
          function pridet_pagalba(Request $request){
                $request->validate([
                        'tekstas' => 'required',
                        'tema' => 'required'
                    ]);
                $query2 = Pokalbis::create([
                                    'tema' => $request -> input('tema'),
                                    'klientas_id' => Auth::user()->klientas->id,
                                ]);
                //dd($query2);
                $query = DB::table('zinutes')->insert([
                    'tekstas' => $request -> input('tekstas'),
                    'pokalbio_id' => $query2->id,
                    'siuntejas' => Auth::user()->username

                ]);

         return back();
         }
         public function pokalbio_langas($id)
         {
             $zinutes = Zinutes::where('pokalbio_id', $id)->orderBy('created_at', 'desc')->get();
             return view('pokalbio_langas', ['zinutes'=>$zinutes, 'pokalbis'=>$id]);
         }

         public function siusti_zinute_klientas($id, Request $request)
             {
                 $siuntejas = Auth::user()->username;
                 Zinutes::create([
                     'pokalbio_id' => $id,
                     'tekstas' => $request->input('zinute'),
                     'siuntejas' => $siuntejas,
                 ]);

                 $zinutes = Zinutes::where('pokalbio_id', $id)->orderBy('created_at', 'desc')->get();
                 return view('pokalbio_langas', ['zinutes'=>$zinutes, 'pokalbis'=>$id]);
             }

}
