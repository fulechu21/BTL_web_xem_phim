<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Film;
use App\Models\FilmView;
use App\Models\User;
use App\Models\WebsiteVisit;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        $films = Film::all();
        $users = User::all();
        $today = date('Y-m-d');
        $viewsToday = FilmView::where('date', now()->format('Y-m-d'))->sum('views');
        $viewsThisWeek = FilmView::whereBetween('date', [now()->startOfWeek(), now()->endOfWeek()])->sum('views');
        $viewsThisMonth = FilmView::whereYear('date', now()->year)
            ->whereMonth('date', now()->month)->sum('views');
        $visitsToday = WebsiteVisit::where('date', $today)->first();
        $filmsViews = Film::orderBy('views', 'desc')->take(12)->get();
        $usersRegisToday = User::whereDate('created_at', $today)->get();
        return view('admin.dashboard', compact('films', 'users', 'visitsToday', 'filmsViews'
            , 'usersRegisToday', 'viewsToday', 'viewsThisWeek','viewsThisMonth'));

    }
}
