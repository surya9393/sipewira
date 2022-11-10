<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Upload;
use App\Models\VerifUpload;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{
	public function upload(){
        // $uploaded = Upload::firstWhere('user_id', request(auth()->user()->id));
        $verif = VerifUpload::where('upload_id',auth()->user()->id)->get()->first();
		return view('dashboard.user.upload.upload',[
            'upload'=>Upload::get(),
            'verif'=>$verif,
            'uploaded'=>Upload::where('user_id', auth()->user()->id)->get(),
            'title'=>'Upload'
        ]);
	}
    public function proses_upload(Request $request){
        $this->validate($request, [
            'uid'=> 'required',
            'ktp' => 'required|mimes:pdf',
            'npwp' => 'required|mimes:pdf',
            'skpns' => 'required|mimes:pdf',
            'skpangkat' => 'required|mimes:pdf',
            'skijazah' => 'required|mimes:pdf',
            'skjabatan' => 'required|mimes:pdf',
            'sksehat' => 'required|mimes:pdf',
            'suratpernyataan' => 'required|mimes:pdf',
            'disiplin' => 'required|mimes:pdf',
            'belajar' => 'required|mimes:pdf',
            'cuti' => 'required|mimes:pdf',
            'wirausaha' => 'required|mimes:pdf',
            'nilai' => 'required|mimes:pdf',
            'biografi' => 'required|mimes:pdf',
            'peta' => 'required|mimes:pdf',
        ]);
        //KTP
        // menyimpan data file yang diupload ke variabel $file
        $file_ktp = $request->file('ktp');

        $nama_ktp = time()."_".$file_ktp->getClientOriginalName();

              // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'upload/ktp';
        $file_ktp->move($tujuan_upload,$nama_ktp);

        //NPWP
        // menyimpan data file yang diupload ke variabel $file
        $file_npwp = $request->file('npwp');

        $nama_npwp = time()."_".$file_npwp->getClientOriginalName();

              // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'upload/npwp';
        $file_npwp->move($tujuan_upload,$nama_npwp);

        //SKPNS
        // menyimpan data file yang diupload ke variabel $file
        $file_skpns = $request->file('skpns');

        $nama_skpns = time()."_".$file_skpns->getClientOriginalName();

              // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'upload/skpns';
        $file_skpns->move($tujuan_upload,$nama_skpns);

        //SKPANGKAT
        // menyimpan data file yang diupload ke variabel $file
        $file_skpangkat = $request->file('skpangkat');

        $nama_skpangkat = time()."_".$file_skpangkat->getClientOriginalName();

              // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'upload/skpangkat';
        $file_skpangkat->move($tujuan_upload,$nama_skpangkat);

        //SKIJAZAH
        // menyimpan data file yang diupload ke variabel $file
        $file_ijazah = $request->file('skijazah');

        $nama_skijazah = time()."_".$file_ijazah->getClientOriginalName();

              // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'upload/skijazah';
        $file_ijazah->move($tujuan_upload,$nama_skijazah);

        //SKJABATAN
        // menyimpan data file yang diupload ke variabel $file
        $file_jabatan = $request->file('skjabatan');

        $nama_skjabatan = time()."_".$file_jabatan->getClientOriginalName();

              // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'upload/skjabatan';
        $file_jabatan->move($tujuan_upload,$nama_skjabatan);

        //SKSKSEHAT
        // menyimpan data file yang diupload ke variabel $file
        $file_sehat = $request->file('sksehat');

        $nama_sksehat = time()."_".$file_sehat->getClientOriginalName();

              // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'upload/sksehat';
        $file_sehat->move($tujuan_upload,$nama_sksehat);

        //SURAT PERNYATAAN
        // menyimpan data file yang diupload ke variabel $file
        $file_pernyataan = $request->file('suratpernyataan');

        $nama_suratpernyataan = time()."_".$file_pernyataan->getClientOriginalName();

              // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'upload/suratpernyataan';
        $file_pernyataan->move($tujuan_upload,$nama_suratpernyataan);

        //DISIPLIN
        // menyimpan data file yang diupload ke variabel $file
        $file_disiplin = $request->file('disiplin');

        $nama_disiplin = time()."_".$file_disiplin->getClientOriginalName();

              // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'upload/disiplin';
        $file_disiplin->move($tujuan_upload,$nama_disiplin);

        //BELAJAR
        // menyimpan data file yang diupload ke variabel $file
        $file_belajar = $request->file('belajar');

        $nama_belajar = time()."_".$file_belajar->getClientOriginalName();

              // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'upload/belajar';
        $file_belajar->move($tujuan_upload,$nama_belajar);

        //CUTI
        // menyimpan data file yang diupload ke variabel $file
        $file_cuti = $request->file('cuti');

        $nama_cuti = time()."_".$file_cuti->getClientOriginalName();

              // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'upload/cuti';
        $file_cuti->move($tujuan_upload,$nama_cuti);

        //WIRAUSAHA
        // menyimpan data file yang diupload ke variabel $file
        $file_wirausaha = $request->file('wirausaha');

        $nama_wirausaha = time()."_".$file_wirausaha->getClientOriginalName();

              // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'upload/wirausaha';
        $file_wirausaha->move($tujuan_upload,$nama_wirausaha);

        //NILAI
        // menyimpan data file yang diupload ke variabel $file
        $file_nilai = $request->file('nilai');

        $nama_nilai = time()."_".$file_nilai->getClientOriginalName();

              // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'upload/nilai';
        $file_nilai->move($tujuan_upload,$nama_nilai);

        //BIOGRAFI
        // menyimpan data file yang diupload ke variabel $file
        $file_biografi = $request->file('biografi');

        $nama_biografi = time()."_".$file_biografi->getClientOriginalName();

              // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'upload/biografi';
        $file_biografi->move($tujuan_upload,$nama_biografi);

        //PETA
        // menyimpan data file yang diupload ke variabel $file
        $file_peta = $request->file('peta');

        $nama_peta = time()."_".$file_peta->getClientOriginalName();

              // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'upload/peta';
        $file_peta->move($tujuan_upload,$nama_peta);
        $default_verif ='0';

        Upload::create([
            'user_id' => request('uid'),
            'ktp' => $nama_ktp,
            'npwp' => $nama_npwp,
            'skpns' => $nama_skpns,
            'skpangkat' => $nama_skpangkat,
            'skijazah' => $nama_skijazah,
            'skjabatan' => $nama_skjabatan,
            'sksehat' => $nama_sksehat,
            'suratpernyataan' => $nama_suratpernyataan,
            'disiplin' => $nama_disiplin,
            'belajar' => $nama_belajar,
            'cuti' => $nama_cuti,
            'wirausaha' => $nama_wirausaha,
            'nilai' => $nama_nilai,
            'biografi' => $nama_biografi,
            'peta' => $nama_peta
        ]);
        VerifUpload::create([
            'upload_id'=> request('uid'),
            's_ktp' => $default_verif,
            's_npwp' => $default_verif,
            's_skpns' => $default_verif,
            's_skpangkat' => $default_verif,
            's_skijazah' => $default_verif,
            's_skjabatan' => $default_verif,
            's_sksehat' => $default_verif,
            's_suratpernyataan' => $default_verif,
            's_disiplin' => $default_verif,
            's_belajar' => $default_verif,
            's_cuti' => $default_verif,
            's_wirausaha' => $default_verif,
            's_nilai' => $default_verif,
            's_biografi' => $default_verif,
            's_peta' => $default_verif

        ]);
        return redirect()->back();
    }
    public function hapus($id){
        // hapus file
        $upload = Upload::where('id',$id)->first();
        // File::delete('ktp/'.$upload->file);
        Storage::disk('local_public')->delete('upload/ktp/'.$upload->ktp);
        Storage::disk('local_public')->delete('upload/npwp/'.$upload->npwp);
        Storage::disk('local_public')->delete('upload/skpns/'.$upload->skpns);
        Storage::disk('local_public')->delete('upload/skpangkat/'.$upload->skpangkat);
        Storage::disk('local_public')->delete('upload/skijazah/'.$upload->skijazah);
        Storage::disk('local_public')->delete('upload/skjabatan/'.$upload->skjabatan);
        Storage::disk('local_public')->delete('upload/sksehat/'.$upload->sksehat);
        Storage::disk('local_public')->delete('upload/suratpernyataan/'.$upload->suratpernyataan);
        Storage::disk('local_public')->delete('upload/disiplin/'.$upload->disiplin);
        Storage::disk('local_public')->delete('upload/belajar/'.$upload->belajar);
        Storage::disk('local_public')->delete('upload/cuti/'.$upload->cuti);
        Storage::disk('local_public')->delete('upload/wirausaha/'.$upload->wirausaha);
        Storage::disk('local_public')->delete('upload/nilai/'.$upload->nilai);
        Storage::disk('local_public')->delete('upload/biografi/'.$upload->biografi);
        Storage::disk('local_public')->delete('upload/peta/'.$upload->peta);
        // hapus data
        Upload::where('id',$id)->delete();

        return redirect()->back();
    }
}
