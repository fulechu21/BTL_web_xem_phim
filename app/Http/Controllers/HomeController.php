<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $categories = \App\Models\Category::all();
        $countries = \App\Models\Country::all();
        $films = Film::take(12)->get();
        $filmsOscar = Film::where('is_oscar', 1)->take(12)->get();
        $filmsHot = Film::where('is_hot', 1)->get();
        $filmsViews = Film::orderBy('views', 'desc')->take(8)->get();
        // $this->WebVisitsByDay();
        return view('user.index', compact('categories', 'countries', 'films', 'filmsHot', 'filmsViews','filmsOscar'));
    }
       

}
