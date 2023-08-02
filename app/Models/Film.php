<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'image',
        'path',
        'year',
        'country_id',
        'director_id',
        'duration',
        'is_hot',
        'is_oscar'
    ];
    public function actors()
    {
        return $this->belongsToMany(Actor::class, 'film_actors', 'film_id', 'actor_id');
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'film_categories', 'film_id', 'category_id');
    }

    public function countries()
    {
        return $this->belongsTo(Country::class, 'country_id');
    }

    public function directors()
    {
        return $this->belongsTo(Director::class, 'director_id');
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_films', 'film_id', 'user_id');
    }
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function filmviews()
    {
        return $this->hasMany(FilmView::class);
    }



}
