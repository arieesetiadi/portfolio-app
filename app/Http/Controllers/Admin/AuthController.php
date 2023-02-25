<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Login page
    public function login()
    {
        return view('admin.login');
    }

    // Login process
    public function authenticate(Request $request)
    {
        $credentials = $request->only('username', 'password');
        $result = Auth::attempt($credentials);
        if(!$result){
            return redirect()->back();
        }

        return redirect()->route('dashboard');
    }

    // Logout process
    public function logout()
    {
        dd('Logout');
    }
}
