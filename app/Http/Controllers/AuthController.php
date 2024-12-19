<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('templates.login');
    }

    protected function authenticated(Request $request, $user)
    {
        return redirect('home'); // Ubah '/home' sesuai dengan rute untuk halaman home Anda
    }

    public function login(Request $request)
    {
        // Validasi input
        $credentials = $request->validate([
            'nik' => ['required'],
            'password' => ['required'],
        ]);

        // Cek apakah pengguna dengan NIK tersebut ada di database
        $user = User::where('nik', $credentials['nik'])->first();
        if (!$user) {
            // NIK tidak ditemukan
            return redirect('login')->with('failed', 'Akun tidak ditemukan, silahkan register');
        }

        // Percobaan login
        if (Auth::attempt($credentials)) {
            // Login berhasil, arahkan ke route 'home'
            return redirect('home');
        } else {
            // Login gagal, kembalikan ke halaman login dengan pesan error
            return redirect('login')->with('failed', 'NIK atau password salah');
        }
    }
}
