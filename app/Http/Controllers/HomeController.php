<?php

namespace App\Http\Controllers;

use App\Models\Like;
use App\Models\Post;
use App\Models\User;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $users = User::where('id', '!=', $user->id)->get();
        // Ambil semua posting dengan hubungan user dan likes, diurutkan berdasarkan created_at descending
        $post = Post::with('user', 'likes')
        ->orderBy('created_at', 'desc')
        ->get();

// Sekarang variabel $posts berisi semua posting, dengan posting paling baru di atas

        return view('home', compact('user','post','users'));
    }
    public function viewUser($id)
    {
        $user = User::find($id);
        $posts = Post::where('user_id', $user->id)->get();
        $users = User::where('id', '!=', $user->id)->get();
        return view('viewUser',["user" => $user,'users'=>$users,"posts"=>$posts]);
    }
    public function profile()
    {
       
        $user = Auth::user();
        $users = User::where('id', '!=', $user->id)->get();
        $posts = Post::where('user_id', $user->id)->orderBy('created_at', 'desc')
        ->get();
         return view('profile', compact('user', 'posts','users'));
    }
    
    public function editProfile()
    {
        $user = Auth::user();
        $users = User::where('id', '!=', $user->id)->get();
        return view('editProfile', compact('user', 'users'));
    }
    public function search(Request $request)
{
    $searchTerm = $request->query('term');
    $users = User::where('username', 'LIKE', '%' . $searchTerm . '%')
                ->orWhere('bio', 'LIKE', '%' . $searchTerm . '%')
                ->get();

    return response()->json($users);
}

    
    public function updateProfile(Request $request)
{
    $user = Auth::user();

    // Validasi data input
    $request->validate([
        'username' => 'required|string|max:255',
        'bio' => 'nullable|string|max:500',
        'gender' => 'nullable|string|max:255',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    // Perbarui data pengguna
    $user->username = $request->input('username');
    $user->bio = $request->input('bio');
    $user->gender = $request->input('gender');

    // Periksa apakah ada file gambar yang diupload
    if ($request->hasFile('image')) {
        $imageName = time().'.'.$request->image->extension();  
        $request->image->move(public_path('images'), $imageName);
        $user->image = $imageName;
    }

    $user->save();

    return redirect()->back()->with('success', 'Profile updated successfully!');
}



// reels
public function reels()
{
    $users = User::all();
    return view('reels', compact('users'));
}


public function explore()
{
    $users = User::all();
     return view('explore',compact('users'));
}
public function userComent(Request $request, $postId)
{
    $request->validate([
        'deskripsi' => 'required|string|max:255',
    ]);

    $comment = new Comment();
    $comment->user_id = Auth::id();
    $comment->post_id = $postId;
    $comment->deskripsi = $request->input('deskripsi');
    $comment->save();

    return redirect()->back()->with('success', 'Comment posted successfully!');
}
public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'deskripsi' => 'required|string|max:255',
        ]);

        // Simpan file gambar
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $request->image->move(public_path('images'), $imageName);
        }

        // Simpan data ke database
        $post = new Post();
        $post->user_id = Auth::id();
        $post->image = $imageName;
        $post->deskripsi = $request->deskripsi;
        $post->save();

        return redirect()->back()->with('success', 'Post created successfully.');
    }

    public function like($postId)
    {
        // Mendapatkan post berdasarkan $postId
        $post = Post::findOrFail($postId);

        // Menambahkan like jika belum ada
        if (!$post->likes()->where('user_id', auth()->id())->exists()) {
            $post->likes()->create(['user_id' => auth()->id()]);
        }

        return back(); // Redirect kembali ke halaman sebelumnya
    }

    public function unlike($postId)
    {
        // Mendapatkan post berdasarkan $postId
        $post = Post::findOrFail($postId);

        // Menghapus like jika sudah ada
        $post->likes()->where('user_id', auth()->id())->delete();

        return back(); // Redirect kembali ke halaman sebelumnya
    }
    public function storeComent(Request $request, $id)
    {
        $post = Post::findOrFail($id);

        $comment = new Comment;
        $comment->user_id = Auth::id();
        $comment->post_id = $post->id;
        $comment->deskripsi = $request->deskripsi;
        $comment->save();

        return redirect()->back();
    }
}
