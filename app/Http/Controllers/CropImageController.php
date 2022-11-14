<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class CropImageController extends Controller
{
    public function index()
    {
      return view('dashboard.auth.update_profile');
    }

    public function uploadCropImage(Request $request)
    {
        $image = $request->image;
        $user = User::findOrFail(Auth::id());

        list($type, $image) = explode(';', $image);
        list(, $image)      = explode(',', $image);
        $image = base64_decode($image);
        $image_name= time().'.png';
        $path = public_path('upload/'.$image_name);

        file_put_contents($path, $image);
        DB::table('users')->findOrFail(Auth::id())->update([
            'photo' => $image_name,
        ]);
        return response()->json(['status'=>true]);
    }
    public function updatektp(Request $request)
{
    //get All Data
    $user = User::findOrFail(Auth::id());
    //Delet File
    Storage::disk('local_public')->delete('upload/'.$user->photo);
    // update data pegawai
    $this->validate($request, [
        'id'=> 'required',
        'image' => 'required',
    ]);
      //KTP
        // menyimpan data file yang diupload ke variabel $file
        $file_ktp = $request->file('image');

        $nama_ktp = time()."_".$file_ktp->getClientOriginalName();

              // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'upload';
        $file_ktp->move($tujuan_upload,$nama_ktp);
    //Update Database
	DB::table('users')->findOrFail(Auth::id())->update([
		'photo' => $nama_ktp,
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/pengguna')->with('successgantifoto', 'Foto Profil Berhasil di Update');
}
}
