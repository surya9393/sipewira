<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $daftar = User::where('level','2')
                        ->orWhere('level', '3')
                        ->get();
        $laki = User::where('gender','Laki-laki')
                        ->where('level','2')
                        ->orWhere('gender','Laki-laki')
                        ->where('level', '3')
                        ->get();
        $wanita = User::where('gender','Perempuan')
                        ->where('level','2')
                        ->orWhere('gender','Perempuan')
                        ->where('level', '3')
                        ->get();
        return view('dashboard.admin.index',[
            'title'=>'Dashboard',
            'pendaftar'=> $daftar->count(),
            'laki'=> $laki->count(),
            'wanita'=> $wanita->count()
        ]);
    }
}
