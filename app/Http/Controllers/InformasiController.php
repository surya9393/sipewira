<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class InformasiController extends Controller
{
    public function index(){
        return view('dashboard.user.auth.informasi', [
            "posts" => Post::orderBy('id', 'DESC')->get()
        ]);
        
    }

    public function show($id){
        return view('dashboard.user.auth.single_informasi', [
            "posts" => Post::where('id', $id)->get()
        ]);
    }
}
