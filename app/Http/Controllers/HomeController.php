<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Country;
use App\Models\Film;
use App\Models\FilmView;
use App\Models\WebsiteVisit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use function GuzzleHttp\Promise\all;

class HomeController extends Controller
{
    public function store(Request $request)
    {
        $image = $request->file("image");
        $path = Storage::putFile('public/images', $image);
    }

    public function index()
    {
        $categories = \App\Models\Category::all();
        $countries = \App\Models\Country::all();
        $films = Film::take(12)->get();
        $filmsOscar = Film::where('is_oscar', 1)->take(12)->get();
        $filmsHot = Film::where('is_hot', 1)->get();
        $filmsViews = Film::orderBy('views', 'desc')->take(8)->get();
        $this->WebVisitsByDay();
        return view('user.index', compact('categories', 'countries', 'films', 'filmsHot', 'filmsViews','filmsOscar'));
    }

    public function movieDetails($id)
    {
        $film = Film::find($id);
        $filmsHot = Film::where('is_hot', 1)->get();
        $filmsViews = Film::orderBy('views', 'desc')->take(8)->get();
        return view('user.movie-details', compact('film','filmsViews',"filmsHot"));
    }


    public function filmsNew()
    {
        $filmsViews = Film::orderBy('views', 'desc')->take(8)->get();
        $films = Film::orderBy('year', 'desc')->paginate(12);
//        $films = Film::where('year','>=', now()->subYears(1))->paginate(12);

        return view("user.movies-option", compact('films', 'filmsViews'));
    }
    public function filmsOscar()
    {
        $filmsViews = Film::orderBy('views', 'desc')->take(8)->get();
        $films = Film::where('is_oscar', 1)->paginate(12);

        return view("user.movies-option", compact('films', 'filmsViews'));
    }

    public function filmsCountry($option)
    {
        $filmsViews = Film::orderBy('views', 'desc')->take(8)->get();
        $country=Country::find($option);
        $films = $country->films()->paginate(12);
        return view("user.movies-option", compact('films', 'filmsViews'));
    }
    public function filmsCategory($option)
    {
        $filmsViews = Film::orderBy('views', 'desc')->take(8)->get();
        $category=Category::find($option);
        $films = $category->films()->paginate(12);
        return view("user.movies-option", compact('films', 'filmsViews'));
    }

    public function playMovie($id)
    {
        $films=Film::all();
        $film = Film::find($id);
        $filmsViews = Film::orderBy('views', 'desc')->take(8)->get();
        $filmsHot = Film::where('is_hot', 1)->get();
        $filmPlay = Film::find($id);

        $this->FilmViewsToday($id);
        $sessionKey = 'movie_views_' . $filmPlay->id;

        if (!session()->has($sessionKey)) {
            if (auth()->check()) {
                $film = Film::find($id);
                $film->user_views++;
                $film->save();
            }
            session([$sessionKey => 1]);

            $cookieName = 'movie_viewed_' . $filmPlay->id;
            cookie($cookieName, true, 60 * 24);

            $filmPlay->views++;
            $filmPlay->save();
        } else {
            $views = session($sessionKey);
            session([$sessionKey => $views + 1]);
        }

        return view("user.play-movie", compact('film','filmPlay','films','filmsViews','filmsHot'));
    }

    public function WebVisitsByDay()
    {
        $sessionKey = 'website_visits_by_day';
        if (!session()->has($sessionKey)) {
            session([$sessionKey => 1]);
        } else {
            $visits = session($sessionKey);
            session([$sessionKey => $visits + 1]);
        }

        $cookieName = 'website_visited_by_day';
        if (!request()->cookie($cookieName)) {
            $uniqueVisits = session($sessionKey . '_unique', 0);
            $uniqueVisits++;
            session([$sessionKey . '_unique' => $uniqueVisits]);

            cookie($cookieName, true, 60 * 24);

            $date = date('Y-m-d');
            $websiteVisit = WebsiteVisit::where('date', $date)->first();
            if (!$websiteVisit) {
                $websiteVisit = new WebsiteVisit();
                $websiteVisit->date = $date;
            }

            $websiteVisit->visits += 1;

            if ($uniqueVisits == 1) {
                $websiteVisit->unique_visits += 1;
            }

            $websiteVisit->save();
        }
    }

    public function FilmViewsToday($id)
    {
        $film = Film::find($id);
        $today = now()->format('Y-m-d');
        $filmView = FilmView::where('film_id', $id)->where('date', $today)->first();
        if (!$filmView) {
            $filmView = new FilmView;
            $filmView->film_id = $film->id;
            $filmView->date = $today;
            $filmView->views = 1;
            $filmView->unique_views = 1;
        } else {
            $filmView->views++;
            if (!\Illuminate\Support\Facades\Cookie::has('movie_viewed_'.$film->id)) {
                $filmView->unique_views++;
                \Illuminate\Support\Facades\Cookie::queue('movie_viewed_'.$film->id, true, 60*24);
            }
        }
        $filmView->save();

    }


    public function doSearch(Request $request)
    {
        $request->validate([
            's' => 'required|min:3',
        ]);

//        $films = Film::all();
        $films = DB::table('films')->where('name', 'like', "%{$request->s}%")->get();
//        dd($films);
        if (empty($films[0]->name) && empty($request->s)) {
            return response()->json(['success' => 'false']);
        }
        return response()->json($films);
    }

}
