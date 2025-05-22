<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Camera;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function dashboard(){
        $data = Camera::all();

        return view('user/beranda',compact('data'));
    }
    public function login(){
        return view('login');

    }

    public function loginPost(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate(); // Hindari session fixation
            return redirect()->route('dashboard');
        }

        return back()->with('error', 'Email atau password salah!');
    }


    public function register(){
        return view('register');
 
    }

    public function registerPost(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
        ]);

        // Simpan user baru
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password), // Enkripsi password
        ]);

        // Redirect ke login dengan pesan sukses
        return redirect()->route('login')->with('success', 'Registrasi berhasil! Silakan login.');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }


}
