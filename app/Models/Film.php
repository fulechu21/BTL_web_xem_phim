<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;
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
    public function categories()
    {
        return $this->belongsToMany(Category::class, 'film_categories', 'film_id', 'category_id');
    }

    public function countries()
    {
        return $this->belongsTo(Country::class, 'country_id');
    }
}
