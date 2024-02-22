<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $table = 'movies';
    protected $fillable = [
        'id',
        'title',
        'description',
        'genre',
        'trailer_url',
        'image'
    ];
    use HasFactory;

    public function reviews(){
        return
        $this->hasMany(Review::class);
    }
 public function users()
    {
        return $this->belongsToMany(User::class);
    }

}
