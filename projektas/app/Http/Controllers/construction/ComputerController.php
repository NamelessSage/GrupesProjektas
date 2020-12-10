<?php

namespace App\Http\Controllers\construction;

use App\Http\Controllers\Controller;
use App\Models\Part;
use Illuminate\Http\Request;

class ComputerController extends Controller
{
    public function index(Request $request){
        $values = $request->session()->get('parts.id');
        $stack = array();
        if($values != null){
            foreach ($values as $value) {
                $part = Part::find($value);
                array_push($stack, $part);
            }
        }
        return view('construction.kompiuteris', [
            'values' => $stack
        ]);
    }

    public function deletePart(Request $request, $id){

        $parts = $request->session()->pull('parts.id', []);
        if(($key = array_search($id, $parts)) !== false) {
            unset($parts [$key]);
        }
        $request->session()->put('parts.id', $parts);

        return back();
    }
}
