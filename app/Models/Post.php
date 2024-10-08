<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    

      // Relasi ke User
      public function user()
      {
          return $this->belongsTo(User::class);
      }
  
      // Relasi ke Likes
      public function likes()
      {
          return $this->hasMany(Like::class);
      }
      public function comments()
      {
          return $this->hasMany(Comment::class);
      }
}
