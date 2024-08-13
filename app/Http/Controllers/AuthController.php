<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function index()
    {
        return view('login');
    }
    public function register()
    {
        return view('register');
    }
    public function registered(Request $request)
    {
        // Validasi input
        $validator = Validator::make($request->all(), [
            'username' => 'required|unique:users|max:255',
            'password' => 'required|min:6|confirmed',
            'gender' => 'required', // Tambahkan validasi untuk kolom gender
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        // Buat pengguna baru
        User::create([
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'bio' => '', // Nilai default untuk kolom bio
            'gender' => $request->gender, // Ambil nilai gender dari form
        ]);


        return redirect('/login')->with('success', 'Registrasi berhasil! Silakan login.');
    }
    public function login(Request $request)
    {

        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);


        if (auth()->attempt($request->only('username', 'password'))) {

            return redirect()->intended('/home');
        }


        return back()->withErrors([
            'username' => 'Username / password yang diberikan tidak cocok dengan catatan kami.',
        ]);
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
