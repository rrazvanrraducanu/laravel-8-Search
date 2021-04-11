<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//add
use App\Models\Flower;


class SearchController extends Controller
{
    public function index()
	{
            return view('flowers.search');
	}
    public function search(Request $request)
    {
        $search_term=$request->get('search');
        $flowers=Flower::where('nume', $search_term)-> orwhere('culoare',$search_term)-> orwhere('marime',$search_term)->get();
        return view('flowers.search_result')->with('flowers', $flowers);
    }

}
