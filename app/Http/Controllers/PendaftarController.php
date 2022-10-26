<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PendaftarController extends Controller
{
    public function index(){
        return view('dashboard.admin.aksi.pendaftar',[
            'pendaftar'=>User::where('level', '2')->get(),
        ]);
    }
}
