<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        if($user = Auth::user()){
            if($user->level == '1'){
                return redirect()->intended('admin');
            }
            elseif($user->level == '2'){
                return redirect()->intended('pengguna');
            }
        }

        return view('login.index');
    }

    public function proses(Request $request){
        $request->validate([
            'email'=>'required|email:dns',
            'password'=>'required'
        ]);

        $credentials = $request->only('email', 'password');
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            $user = Auth::user();
            if($user->level == '1'){
                return redirect()->intended('admin');
            }
            elseif($user->level == '2'){
                return redirect()->intended('pengguna');
            }
            return redirect()->intended('/');
        }
        return back()->withErrors([
            'email'=> 'Login Failed'
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
