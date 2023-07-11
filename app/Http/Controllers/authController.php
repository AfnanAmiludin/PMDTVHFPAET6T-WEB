<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class authController extends Controller
{
    public function registrasi(Request $request)
    {
        $attribute = $request->validate([
            'name'      => ['required'],
            'email'     => ['required'],
            'password'  => ['required']
        ]);
        $attribute['password'] = Hash::make($request->password);
        User::create($attribute);
        return redirect()->route('login');
    }
    public function login(Request $request)
    {
        $request->validate([
            'email'     => ['required'],
            'password'  => ['required']
        ]);
        if (!Auth::attempt($request->only('email', 'password'))) {
            return back()->with('loginError', 'login failed, please sign-in again!');
        }
        $request->session()->regenerate();
        return redirect()->route('choose');
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }
}
