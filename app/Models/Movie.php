<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    public function cinemas(){
        return $this->belongsToMany(Cinema::class, 'cinema_movies');
    }
}
