<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('backend.login');

    }

    public function logout(Request $request){
    auth()->logout();

    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect()->route('home')->with('message','logged Out');
    }

    public function authenticate(Request $request){

        $auth = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        if (auth()->attempt($auth)) {
            $request->session()->regenerate();

            return redirect('/admin')->with('message','logged in');
        }

       return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput('email');
    }
}
