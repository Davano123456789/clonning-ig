<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;
    protected $table = 'like'; // Nama tabel dalam database
    protected $fillable = [
        'user_id',
        'post_id',
    ];

    // Relasi ke User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relasi ke Post
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
