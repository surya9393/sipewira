<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index',[
            'title' => 'Register'
        ]);
    }
    public function store(Request $request)
    {
        $validated_data = $request->validate([
            'name'=>'required|max:255',
            'nip'=>['required', 'min:6', 'max:12', 'unique:users,nip' ],
            'phone'=>'required|unique:users,phone',
            'email'=>['required','email:dns','unique:users'],
            'password'=>'required|min:5|max:255',
            // 'confirm_password'=> 'required_with:password|same:password|min:5|max:255',
        ]);

        $validated_data['password'] = bcrypt($validated_data['password']);
        // $validated_data['confirm_password'] = $validated_data['password'];

        User::create($validated_data);
        // $request->session()->flash('success', 'Registration was successful!');
        return redirect('/login')->with('success', 'Registration was successful!');
    }
}
