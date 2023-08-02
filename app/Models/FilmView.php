<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FilmView extends Model
{
    use HasFactory;
    protected $fillable=[
        'film_id',
        'date',
        'views',
        'unique_views'
    ];

    public function films(){
        return $this->belongsTo(Film::class);
    }
}
