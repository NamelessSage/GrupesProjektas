<?php

namespace App\Http\Controllers\construction;

use App\Http\Controllers\Controller;
use App\Models\Part;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function index(){
        $parts = Part::get();

        return view('construction.catalog', [
            'parts' => $parts
        ]);
    }

    public function store(Request $request){
        $this->validate($request, [
            'name' => 'required|max:255',
            'price' => 'required|max:255',
            'about' => 'required|max:255',
            'link' => 'required|max:255',
            'creator' => 'required|max:255',
        ]);

        Part::create([
            'name' => $request->name,
            'price' => $request->price,
            'about' => $request->about,
            'link' => $request->link,
            'creator' => $request->creator,
        ]);

        return back();
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
}
