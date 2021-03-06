<?php

namespace App\Http\Controllers\construction;

use App\Http\Controllers\Controller;
use App\Models\Part;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function index(Request $request){
        $parts = Part::get();
        return view('construction.catalog', [
            'parts' => $parts,
        ]);
    }

    public function sortByPrice(){
        $parts = Part::get();

        $sorted = $parts->sortBy('price');
        $sorted->values()->all();
        $parts = $sorted;

        return view('construction.catalog', [
            'parts' => $parts
        ]);
    }

    public function sortByName(){
        $parts = Part::get();

        $sorted = $parts->sortBy('name');
        $sorted->values()->all();
        $parts = $sorted;

        return view('construction.catalog', [
            'parts' => $parts
        ]);
    }

    public function sortByCreator(){
        $parts = Part::get();

        $sorted = $parts->sortBy('creator');
        $sorted->values()->all();
        $parts = $sorted;

        return view('construction.catalog', [
            'parts' => $parts
        ]);
    }

    public function onlyHDD(){
        $parts = Part::get();

        //$sorted = $parts->sortBy('creator');
        $sorted = $parts->filter(function ($value, $key) {
            return $value->category == "HDD";
        });
        $sorted->values()->all();
        $parts = $sorted;

        return view('construction.catalog', [
            'parts' => $parts
        ]);
    }

    public function onlyRAM(){
        $parts = Part::get();

        //$sorted = $parts->sortBy('creator');
        $sorted = $parts->filter(function ($value, $key) {
            return $value->category == "RAM";
        });
        $sorted->values()->all();
        $parts = $sorted;

        return view('construction.catalog', [
            'parts' => $parts
        ]);
    }

    public function onlyGPU(){
        $parts = Part::get();

        //$sorted = $parts->sortBy('creator');
        $sorted = $parts->filter(function ($value, $key) {
            return $value->category == "GPU";
        });
        $sorted->values()->all();
        $parts = $sorted;

        return view('construction.catalog', [
            'parts' => $parts
        ]);
    }

    public function onlyCPU(){
        $parts = Part::get();

        //$sorted = $parts->sortBy('creator');
        $sorted = $parts->filter(function ($value, $key) {
            return $value->category == "CPU";
        });
        $sorted->values()->all();
        $parts = $sorted;

        return view('construction.catalog', [
            'parts' => $parts
        ]);
    }

    public function addPart(Request $request, $id){
        $request->session()->push('parts.id',$id);
        return back();
    }
}
