<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Actor;
use App\Models\Category;
use App\Models\Country;
use App\Models\Director;
use App\Models\Film;
use App\Models\User;
use App\Models\UserFilm;
use http\Env\Request;
use Illuminate\Support\Facades\Auth;
use function GuzzleHttp\Promise\all;

class FilmController extends Controller
{
    public function list()
    {
        // TODO: Implement list() method.
        $list = Film::paginate(5);
        return view('admin.film.list', compact('list'));
    }

    public function create()
    {
        // TODO: Implement create() method.
        $countries = Country::all();
        $categories = Category::all();
        $directors = Director::all();
        $actors = Actor::all();
        return view('admin.film.create', compact('countries', 'categories', 'directors', 'actors'));
    }


    public function doCreate()
    {
        try {
            $isValidImage = true;
            if (\request()->hasFile('image')) {
                $image = \request()->file('image');
                if (!$image->isValid()) {
                    $isValidImage = false;
                    throw new \Exception('Ảnh không hợp lệ');
                }
                $image->storeAs('image', $image->getClientOriginalName(), 'public');
            }
            $data = \request()->all();
            if ($isValidImage) {
                $data['image'] = $image->getClientOriginalName();
            }
            $actors_id = $data['actor_id'];
            $categories_id = $data['category_id'];
            $film = Film::create($data);
            foreach ($actors_id as $actor_id) {
                $actor = Actor::find($actor_id);
                $film->actors()->attach($actor);
            }
            foreach ($categories_id as $category_id) {
                $category = Category::find($category_id);
                $film->categories()->attach($category);
            }
        } catch (\Exception $exception) {
            return redirect()->back()->with('error', $exception->getMessage());
        }
        return redirect()->back()->with('success', 'Thêm mới thành công');
    }

    public function edit($id)
    {
        // TODO: Implement edit() method.
        $obj = Film::find($id);
        $countries = Country::all();
        $categories = Category::all();
        $directors = Director::all();
        $actors = Actor::all();
        return view('admin.film.edit', compact('obj', 'countries', 'categories', 'directors', 'actors'));
    }

    public function doEdit($id)
    {
        $data = \request()->all();
        unset($data['_token']);

        try {
            $actors_id = $data['actor_id'];
            $categories_id = $data['category_id'];
            unset($data['actor_id']);
            unset($data['category_id']);
            Film::where('id', $id)->update($data);
            $film = Film::find($id);
            foreach ($actors_id as $actor_id) {
                $actor = Actor::find($actor_id);
                $film->actors()->syncWithoutDetaching($actor);
            }
            foreach ($categories_id as $category_id) {
                $category = Category::find($category_id);
                $film->categories()->syncWithoutDetaching($category);
            }
        } catch (\Exception $exception) {
            return redirect()->back()->with('error', $exception->getMessage());
        }
        return redirect()->back()->with('success', 'Sửa thành công');
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
        Film::where('id', $id)->delete();
        return redirect()->back()->with('success', 'Xóa thành công');
    }

    public function getDetailsFilm($id)
    {
        $film = Film::find($id);
        $film['actors'] = $film->actors()->pluck('name')->implode(', ');
        $film['categories'] = $film->categories()->pluck('name')->implode(', ');

        if ($film) {
            return response()->json($film);
        } else {
            return response()->json(['error' => 'Error']);
        }
    }

    public function addFilmFavorite(\Illuminate\Http\Request $request)
    {
        if ($request->has('film_id')) {
            if (auth()->check()) {
                $user = auth()->user();
                $filmId = $request->input('film_id');

                // Kiểm tra xem phim đã được thêm vào yêu thích của người dùng hay chưa
                if ($user->films()->where('films.id', $filmId)->exists()) {
                    return redirect()->back()->with('error', 'Phim đã được thêm vào yêu thích');
                }

                $user_film = new UserFilm;
                $user_film->film_id =  $filmId;
                $user_film->user_id = $user->id;
                $user_film->save();

                return redirect()->back()->with('success', 'Thêm phim yêu thích thành công');
            } else {
                // User chưa đăng nhập
                // Xử lý tùy ý ở đây, ví dụ hiển thị thông báo lỗi
                return redirect()->back()->with('error', 'Bạn cần đăng nhập để thêm phim yêu thích');
            }

        }
    }

    public
    function showFilmFavorite($id)
    {
        $user = User::find($id);
        $filmsView = Film::orderBy('views', 'desc')->take(8)->get();
        $favoriteFilms = $user->films()->paginate(12);

        return view("user.favoriteFilm", compact("favoriteFilms", 'filmsView'));
    }
}
