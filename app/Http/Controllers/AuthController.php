<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('pagelogin');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            // Jika login berhasil
            return redirect('/admin'); // Ganti dengan rute yang sesuai
        }

        // Jika login gagal
        return redirect()->route('login')->with('error', 'username atau password salah.');
    }


    public function showRegistrationForm()
    {
        return view('pageregister');
    }

    public function register(Request $request)
    {
        // Validasi input sesuai kebutuhan
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:admins',
            'password' => 'required|string|min:8',
        ]);

        // Simpan data pendaftaran ke dalam tabel 'peoples'
        \DB::table('admins')->insert([
            'name' => $validatedData['name'],
            'username' => $validatedData['username'],
            'password' => bcrypt($validatedData['password']),
        ]);

        // Setelah berhasil mendaftar, redirect ke halaman login atau dashboard
        return redirect('/admin'); // Ganti dengan rute yang sesuai
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

}