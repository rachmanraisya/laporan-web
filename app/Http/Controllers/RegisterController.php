<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('templates.register');
    }

    protected function registered(Request $request, $user)
    {
        return redirect('templates.login'); // Ubah '/home' sesuai dengan rute untuk halaman home Anda
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'nik' => 'required',
            'password' => 'required',
        ]);
// dd($request->all());
        $user = User::create([
            'name' => $request->name,
            'nik' => $request->nik,
            'password' => Hash::make($request->password),
        ]);

        // Optionally, you can log the user in after registration
        // auth()->login($user);

        return redirect('login');
    }
}
