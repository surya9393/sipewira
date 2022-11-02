<?php

namespace App\Http\Controllers;

use App\Models\Upload;
use App\Models\User;
use App\Models\VerifUpload;
use Illuminate\Http\Request;

class VerifikasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $daftar = User::where('level', '2')
                        ->orWhere('level', '3')
                        ->get();
        return view('dashboard.admin.aksi.verifikasi',[
            'pendaftar'=>$daftar,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $upload = Upload::where('user_id', $id)->get();
        $verif = VerifUpload::where('upload_id',$id)->get()->first();
        $author = User::where('id', $id)->get();
        return view('dashboard.admin.aksi.seleksi',[
            'upload'=>$upload,
            'verif'=>$verif,
            'uploaded'=>Upload::where('user_id', $id)->get(),
            'author'=>$author
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
