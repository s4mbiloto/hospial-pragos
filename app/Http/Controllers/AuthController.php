<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLogin() {
        return view('auth.login');
    }

    public function showRegister() {
        return view('auth.register');
    }

    public function register(Request $r){
        $user = new User();
        $user->nama = $r->nama;
        $user->password = Hash::make($r->password); // otomatis bcrypt
        $user->save();

        return redirect()->route('login')->with('success', 'Registrasi berhasil! Silakan login.');
    }


    public function login(Request $r) {
        $credentials = $r->only('nama','password');
        if (Auth::attempt($credentials)) {
            $r->session()->regenerate();
            return redirect()->intended(route('home'));
        }
        return back()->withErrors(['nama' => 'Login gagal']);
    }

    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login')->with('success', 'Berhasil logout');
    }
}