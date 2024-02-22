<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{ 
      protected $table = 'review';
    protected $fillable = [
        'id',
        'review',
    ];
    
   public function user()
    {
        return $this->belongsTo(User::class);
    }
     
    public function movie()
    {
        return $this->belongsTo(Movie::class);
    }

    use HasFactory;
}
