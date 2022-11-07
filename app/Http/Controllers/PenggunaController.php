<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Upload;
use App\Models\VerifUpload;
use Illuminate\Support\Facades\Storage;
class PenggunaController extends Controller
{
    public function index()
    {
        return view('dashboard.index',[
            'title'=>'Dashboard'
        ]);
    }
    public function show()
    {
        $verif = VerifUpload::where('upload_id',auth()->user()->id)->get()->first();
		return view('dashboard.upload.upload',[
            'upload'=>Upload::get(),
            'verif'=>$verif,
            'uploaded'=>Upload::where('user_id', auth()->user()->id)->get(),
            'title'=>'Upload'
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
    // update data pegawai
    $this->validate($request, [
        'id'=> 'required',
        'ktp' => 'required|mimes:pdf',
    ]);
    Storage::disk('local_public')->delete('/upload/ktp/'.$upload->ktp);
      //KTP
        // menyimpan data file yang diupload ke variabel $file
        $file_ktp = $request->file('ktp');

        $nama_ktp = time()."_".$file_ktp->getClientOriginalName();

              // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'upload/ktp';
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
    // update data pegawai
    $this->validate($request, [
        'id'=> 'required',
        'npwp' => 'required|mimes:pdf',
    ]);
    Storage::disk('local_public')->delete('upload/npwp/'.$upload->npwp);
      //NPWP
        // menyimpan data file yang diupload ke variabel $file
        $file_ktp = $request->file('npwp');

        $nama_ktp = time()."_".$file_ktp->getClientOriginalName();

              // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'upload/npwp';
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
	//get All Data
    $upload = Upload::where('user_id',$request->id)->first();
    //Delet File
    // update data pegawai
    $this->validate($request, [
        'id'=> 'required',
        'skpns' => 'required|mimes:pdf',
    ]);
    Storage::disk('local_public')->delete('/upload/skpns/'.$upload->skpns);
    //NPWP
        // menyimpan data file yang diupload ke variabel $file
        $file_ktp = $request->file('skpns');

        $nama_ktp = time()."_".$file_ktp->getClientOriginalName();

              // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'upload/skpns';
        $file_ktp->move($tujuan_upload,$nama_ktp);
    //Update Database
	DB::table('uploads')->where('user_id',$request->id)->update([
		'skpns' => $nama_ktp,
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/dashboard/upload')->with('successupload', 'SKPNS Berhasil di Update');
}
public function updateskpangkat(Request $request)
{
    //get All Data
    $upload = Upload::where('user_id',$request->id)->first();
    //Delet File
    // update data pegawai
    $this->validate($request, [
        'id'=> 'required',
        'skpangkat' => 'required|mimes:pdf',
    ]);
    Storage::disk('local_public')->delete('/upload/skpangkat/'.$upload->skpangkat);
    //NPWP
        // menyimpan data file yang diupload ke variabel $file
        $file_ktp = $request->file('skpangkat');

        $nama_ktp = time()."_".$file_ktp->getClientOriginalName();

            // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'upload/skpangkat';
        $file_ktp->move($tujuan_upload,$nama_ktp);
    //Update Database
    DB::table('uploads')->where('user_id',$request->id)->update([
        'skpangkat' => $nama_ktp,
    ]);
    // alihkan halaman ke halaman pegawai
    return redirect('/dashboard/upload')->with('successupload', 'SK Pangkat Berhasil di Update');
}
public function updateskijazah(Request $request)
{
	//get All Data
    $upload = Upload::where('user_id',$request->id)->first();
    //Delet File
    // update data pegawai
    $this->validate($request, [
        'id'=> 'required',
        'skijazah' => 'required|mimes:pdf',
    ]);
    Storage::disk('local_public')->delete('/upload/skijazah/'.$upload->skijazah);
    //NPWP
        // menyimpan data file yang diupload ke variabel $file
        $file_ktp = $request->file('skijazah');

        $nama_ktp = time()."_".$file_ktp->getClientOriginalName();

              // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'upload/skijazah';
        $file_ktp->move($tujuan_upload,$nama_ktp);
    //Update Database
	DB::table('uploads')->where('user_id',$request->id)->update([
		'skijazah' => $nama_ktp,
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/dashboard/upload')->with('successupload', 'SK Ijazah Berhasil di Update');
}
public function updateskjabatan(Request $request)
{
	//get All Data
    $upload = Upload::where('user_id',$request->id)->first();
    //Delet File
    // update data pegawai
    $this->validate($request, [
        'id'=> 'required',
        'skjabatan' => 'required|mimes:pdf',
    ]);
    Storage::disk('local_public')->delete('/upload/skjabatan/'.$upload->skjabatan);
    //NPWP
        // menyimpan data file yang diupload ke variabel $file
        $file_ktp = $request->file('skjabatan');

        $nama_ktp = time()."_".$file_ktp->getClientOriginalName();

              // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'upload/skjabatan';
        $file_ktp->move($tujuan_upload,$nama_ktp);
    //Update Database
	DB::table('uploads')->where('user_id',$request->id)->update([
		'skjabatan' => $nama_ktp,
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/dashboard/upload')->with('successupload', 'SK Jabatan Berhasil di Update');
}
public function updatesksehat(Request $request)
{
	//get All Data
    $upload = Upload::where('user_id',$request->id)->first();
    //Delet File
    // update data pegawai
    $this->validate($request, [
        'id'=> 'required',
        'sksehat' => 'required|mimes:pdf',
    ]);
    Storage::disk('local_public')->delete('/upload/sksehat/'.$upload->sksehat);
    //NPWP
        // menyimpan data file yang diupload ke variabel $file
        $file_ktp = $request->file('sksehat');

        $nama_ktp = time()."_".$file_ktp->getClientOriginalName();

              // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'upload/sksehat';
        $file_ktp->move($tujuan_upload,$nama_ktp);
    //Update Database
	DB::table('uploads')->where('user_id',$request->id)->update([
		'sksehat' => $nama_ktp,
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/dashboard/upload')->with('successupload', 'SK Ijazah Berhasil di Update');
}
public function updatesuratpernyataan(Request $request)
{
	//get All Data
    $upload = Upload::where('user_id',$request->id)->first();
    //Delet File
    // update data pegawai
    $this->validate($request, [
        'id'=> 'required',
        'suratpernyataan' => 'required|mimes:pdf',
    ]);
    Storage::disk('local_public')->delete('/upload/suratpernyataan/'.$upload->sksehat);
    //NPWP
        // menyimpan data file yang diupload ke variabel $file
        $file_ktp = $request->file('suratpernyataan');

        $nama_ktp = time()."_".$file_ktp->getClientOriginalName();

              // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'upload/suratpernyataan';
        $file_ktp->move($tujuan_upload,$nama_ktp);
    //Update Database
	DB::table('uploads')->where('user_id',$request->id)->update([
		'suratpernyataan' => $nama_ktp,
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/dashboard/upload')->with('successupload', 'Surat Pernyataan Berhasil di Update');
}
public function updatedisiplin(Request $request)
{
	//get All Data
    $upload = Upload::where('user_id',$request->id)->first();
    //Delet File
    // update data pegawai
    $this->validate($request, [
        'id'=> 'required',
        'disiplin' => 'required|mimes:pdf',
    ]);
    Storage::disk('local_public')->delete('/upload/disiplin/'.$upload->sksehat);
    //NPWP
        // menyimpan data file yang diupload ke variabel $file
        $file_ktp = $request->file('disiplin');

        $nama_ktp = time()."_".$file_ktp->getClientOriginalName();

              // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'upload/disiplin';
        $file_ktp->move($tujuan_upload,$nama_ktp);
    //Update Database
	DB::table('uploads')->where('user_id',$request->id)->update([
		'disiplin' => $nama_ktp,
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/dashboard/upload')->with('successupload', 'Surat Disiplin Berhasil di Update');
}
public function updatebelajar(Request $request)
{
	//get All Data
    $upload = Upload::where('user_id',$request->id)->first();
    //Delet File
    // update data pegawai
    $this->validate($request, [
        'id'=> 'required',
        'belajar' => 'required|mimes:pdf',
    ]);
    Storage::disk('local_public')->delete('/upload/belajar/'.$upload->sksehat);
    //NPWP
        // menyimpan data file yang diupload ke variabel $file
        $file_ktp = $request->file('belajar');

        $nama_ktp = time()."_".$file_ktp->getClientOriginalName();

              // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'upload/belajar';
        $file_ktp->move($tujuan_upload,$nama_ktp);
    //Update Database
	DB::table('uploads')->where('user_id',$request->id)->update([
		'belajar' => $nama_ktp,
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/dashboard/upload')->with('successupload', 'Surat Keterangan Belajar Berhasil di Update');
}
public function updatecuti(Request $request)
{
	//get All Data
    $upload = Upload::where('user_id',$request->id)->first();
    //Delet File
    // update data pegawai
    $this->validate($request, [
        'id'=> 'required',
        'cuti' => 'required|mimes:pdf',
    ]);
    Storage::disk('local_public')->delete('/upload/cuti/'.$upload->sksehat);
    //NPWP
        // menyimpan data file yang diupload ke variabel $file
        $file_ktp = $request->file('cuti');

        $nama_ktp = time()."_".$file_ktp->getClientOriginalName();

              // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'upload/cuti';
        $file_ktp->move($tujuan_upload,$nama_ktp);
    //Update Database
	DB::table('uploads')->where('user_id',$request->id)->update([
		'cuti' => $nama_ktp,
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/dashboard/upload')->with('successupload', 'Surat Pernyataan Berhasil di Update');
}
public function updatewirausaha(Request $request)
{
	//get All Data
    $upload = Upload::where('user_id',$request->id)->first();
    //Delet File
    // update data pegawai
    $this->validate($request, [
        'id'=> 'required',
        'wirausaha' => 'required|mimes:pdf',
    ]);
    Storage::disk('local_public')->delete('/upload/wirausaha/'.$upload->sksehat);
    //NPWP
        // menyimpan data file yang diupload ke variabel $file
        $file_ktp = $request->file('wirausaha');

        $nama_ktp = time()."_".$file_ktp->getClientOriginalName();

              // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'upload/wirausaha';
        $file_ktp->move($tujuan_upload,$nama_ktp);
    //Update Database
	DB::table('uploads')->where('user_id',$request->id)->update([
		'wirausaha' => $nama_ktp,
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/dashboard/upload')->with('successupload', 'Surat Wirausaha Berhasil di Update');
}
public function updatenilai(Request $request)
{
	//get All Data
    $upload = Upload::where('user_id',$request->id)->first();
    //Delet File
    // update data pegawai
    $this->validate($request, [
        'id'=> 'required',
        'nilai' => 'required|mimes:pdf',
    ]);
    Storage::disk('local_public')->delete('/upload/nilai/'.$upload->nilai);
    //NPWP
        // menyimpan data file yang diupload ke variabel $file
        $file_ktp = $request->file('nilai');

        $nama_ktp = time()."_".$file_ktp->getClientOriginalName();

              // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'upload/nilai';
        $file_ktp->move($tujuan_upload,$nama_ktp);
    //Update Database
	DB::table('uploads')->where('user_id',$request->id)->update([
		'nilai' => $nama_ktp,
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/dashboard/upload')->with('successupload', 'Surat Penilaian Berhasil di Update');
}
public function updatebiografi(Request $request)
{
	//get All Data
    $upload = Upload::where('user_id',$request->id)->first();
    //Delet File
    // update data pegawai
    $this->validate($request, [
        'id'=> 'required',
        'biografi' => 'required|mimes:pdf',
    ]);
    Storage::disk('local_public')->delete('/upload/biografi/'.$upload->biografi);
    //NPWP
        // menyimpan data file yang diupload ke variabel $file
        $file_ktp = $request->file('biografi');

        $nama_ktp = time()."_".$file_ktp->getClientOriginalName();

              // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'upload/biografi';
        $file_ktp->move($tujuan_upload,$nama_ktp);
    //Update Database
	DB::table('uploads')->where('user_id',$request->id)->update([
		'biografi' => $nama_ktp,
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/dashboard/upload')->with('successupload', 'Surat Wirausaha Berhasil di Update');
}
public function updatepeta(Request $request)
{
	//get All Data
    $upload = Upload::where('user_id',$request->id)->first();
    //Delet File
    // update data pegawai
    $this->validate($request, [
        'id'=> 'required',
        'peta' => 'required|mimes:pdf',
    ]);
    Storage::disk('local_public')->delete('/upload/peta/'.$upload->peta);
    //NPWP
        // menyimpan data file yang diupload ke variabel $file
        $file_ktp = $request->file('peta');

        $nama_ktp = time()."_".$file_ktp->getClientOriginalName();

              // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'upload/peta';
        $file_ktp->move($tujuan_upload,$nama_ktp);
    //Update Database
	DB::table('uploads')->where('user_id',$request->id)->update([
		'peta' => $nama_ktp,
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/dashboard/upload')->with('successupload', 'Surat Wirausaha Berhasil di Update');
}


// Delete


public function profile()
    {
        return view('dashboard.profile',[
            'title'=>'Dashboard'
        ]);
    }
}
