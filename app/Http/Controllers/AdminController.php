<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Post;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
    //Seleksi
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
    //Lolos
        $lolos = User::where('hasil', 1)->get();
        $lolos_laki = User::where('hasil', 1)
                            ->where('gender', 'Laki-laki')
                            ->get();
        $lolos_wanita = User::where('hasil', 1)
                            ->where('gender', 'Perempuan')
                            ->get();
    //Gagal
        $gagal = User::where('hasil', 2)->get();
        $gagal_laki = User::where('hasil', 2)
                            ->where('gender', 'Laki-laki')
                            ->get();
        $gagal_wanita = User::where('hasil', 2)
                            ->where('gender', 'Perempuan')
                            ->get();
    //Berita
    //Total Pendaftar
        return view('dashboard.admin.index',[
            'title'=>'Dashboard',
            'pendaftar'=> $daftar->count(),
            'laki'=> $laki->count(),
            'wanita'=> $wanita->count(),
            'lolos'=>$lolos->count(),
            'lolos_laki'=> $lolos_laki->count(),
            'lolos_wanita' => $lolos_wanita->count(),
            'gagal' => $gagal->count(),
            'gagal_laki'=> $gagal_laki->count(),
            'gagal_wanita' => $gagal_wanita->count()
        ]);
    }

    public function show(){
        return view('dashboard.admin.berita.index',[
            "posts" => Post::latest()->paginate(3)->withQueryString()
        ]);
    }

    public function store(Request $request)
    {
        $validated_data = $request->validate([
            'judul'=>'required|max:255',
            'kutipan'=>'required',
            'body'=>['required'],
        ]);

       
        $berita = new Post;
 
        $berita->title = $request->judul;
        $berita->excerpt = $request->kutipan;
        
            $file = $request->file('photo');
    
            $nama_file = time()."_".$file->getClientOriginalName();
    
                    // isi dengan nama folder tempat kemana file diupload
            $tujuan_upload = 'upload/berita';
            $file->move($tujuan_upload,$nama_file);
        
        $berita->photo = $nama_file;
        $berita->body = $request->body;
 
        $berita->save();
        return redirect('/admin/berita')->with('success', 'Berita Berhasil di Posting');
    }
}
