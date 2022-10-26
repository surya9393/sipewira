<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Upload;
use Illuminate\Support\Facades\Storage;
class PenggunaController extends Controller
{
    public function index(){
        return view('dashboard.index',[
            'title'=>'Dashboard'
        ]);
    }
    public function edit($id)
{
	// mengambil data pegawai berdasarkan id yang dipilih
	$upload = DB::table('uploads')->where('user_id',$id)->get();
	// passing data pegawai yang didapat ke view edit.blade.php
	return view('dashboard.upload.edit.edit_ktp',['dataupload' => $upload]);
}
public function updatektp(Request $request)
{
    //get All Data
    $upload = Upload::where('user_id',$request->id)->first();
    //Delet File
    Storage::disk('local_public')->delete('ktp/'.$upload->ktp);
    // update data pegawai
    $this->validate($request, [
        'id'=> 'required',
        'ktp' => 'required|mimes:pdf',
    ]);
      //KTP
        // menyimpan data file yang diupload ke variabel $file
        $file_ktp = $request->file('ktp');

        $nama_ktp = time()."_".$file_ktp->getClientOriginalName();

              // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'ktp';
        $file_ktp->move($tujuan_upload,$nama_ktp);
    //Update Database
	DB::table('uploads')->where('user_id',$request->id)->update([
		'ktp' => $nama_ktp,
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/dashboard/upload')->with('successupload', 'KTP Berhasil di Update');
}
public function updatenpwp(Request $request)
{
	//get All Data
    $upload = Upload::where('user_id',$request->id)->first();
    //Delet File
    Storage::disk('local_public')->delete('npwp/'.$upload->ktp);
    // update data pegawai
    $this->validate($request, [
        'id'=> 'required',
        'npwp' => 'required|mimes:pdf',
    ]);
      //KTP
        // menyimpan data file yang diupload ke variabel $file
        $file_ktp = $request->file('npwp');

        $nama_ktp = time()."_".$file_ktp->getClientOriginalName();

              // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'npwp';
        $file_ktp->move($tujuan_upload,$nama_ktp);
    //Update Database
	DB::table('uploads')->where('user_id',$request->id)->update([
		'npwp' => $nama_ktp,
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/dashboard/upload')->with('successupload', 'NPWP Berhasil di Update');
}
public function updateskpns(Request $request)
{
	// update data pegawai
	DB::table('uploads')->where('user_id',$request->id)->update([
		'ktp' => $request->ktp,
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/dashboard/upload')->with('successupload', 'Upload Berhasil');
}
public function updateskpangkat(Request $request)
{
	// update data pegawai
	DB::table('uploads')->where('user_id',$request->id)->update([
		'ktp' => $request->ktp,
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/peengguna');
}
public function updateskijazah(Request $request)
{
	// update data pegawai
	DB::table('uploads')->where('user_id',$request->id)->update([
		'ktp' => $request->ktp,
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/peengguna');
}
public function updateskjabatan(Request $request)
{
	// update data pegawai
	DB::table('uploads')->where('user_id',$request->id)->update([
		'ktp' => $request->ktp,
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/peengguna');
}
public function updatesksehat(Request $request)
{
	// update data pegawai
	DB::table('uploads')->where('user_id',$request->id)->update([
		'ktp' => $request->ktp,
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/peengguna');
}
public function updatesuratpernyataan(Request $request)
{
	// update data pegawai
	DB::table('uploads')->where('user_id',$request->id)->update([
		'ktp' => $request->ktp,
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/peengguna');
}
public function updatedisiplin(Request $request)
{
	// update data pegawai
	DB::table('uploads')->where('user_id',$request->id)->update([
		'ktp' => $request->ktp,
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/peengguna');
}
public function updatebelajar(Request $request)
{
	// update data pegawai
	DB::table('uploads')->where('user_id',$request->id)->update([
		'ktp' => $request->ktp,
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/peengguna');
}
public function updatecuti(Request $request)
{
	// update data pegawai
	DB::table('uploads')->where('user_id',$request->id)->update([
		'ktp' => $request->ktp,
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/peengguna');
}
public function updatewirausaha(Request $request)
{
	// update data pegawai
	DB::table('uploads')->where('user_id',$request->id)->update([
		'ktp' => $request->ktp,
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/peengguna');
}
public function updatenilai(Request $request)
{
	// update data pegawai
	DB::table('uploads')->where('user_id',$request->id)->update([
		'ktp' => $request->ktp,
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/peengguna');
}
public function updatebiografi(Request $request)
{
	// update data pegawai
	DB::table('uploads')->where('user_id',$request->id)->update([
		'ktp' => $request->ktp,
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/peengguna');
}
public function updatepeta(Request $request)
{
	// update data pegawai
	DB::table('uploads')->where('user_id',$request->id)->update([
		'ktp' => $request->ktp,
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/peengguna');
}

}
