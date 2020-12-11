<?php

namespace App\Http\Controllers\construction;

use App\Http\Controllers\Controller;
use App\Models\Part;
use Illuminate\Http\Request;

class AddingController extends Controller
{
    public function index()
    {
        return view('construction.pildymas');
    }

    public function store(Request $request){
        $this->validate($request, [
            'name' => 'required|max:255',
            'price' => 'required|max:255',
            'about' => 'required|max:255',
            'link' => 'required|max:255',
            'image' => 'required|max:255',
            'category' => 'required|max:255',
            'creator' => 'required|max:255',
        ]);

        Part::create([
            'name' => $request->name,
            'price' => $request->price,
            'about' => $request->about,
            'link' => $request->link,
            'image' => $request->image,
            'category' => $request->category,
            'creator' => $request->creator,
        ]);

        return back();
    }
}
