<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show($id)
    {
        $post = Post::with('user', 'comments.user')->findOrFail($id); // Load post with user and comments with their users
        return view('post.show', compact('post'));
    }
}
