<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redis;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::findOrFail(Auth::id());
        return view('dashboard.user.auth.profile',[
            'user'=>$user,
            'title'=>'Profile'
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
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $user = User::findOrFail(Auth::id());
        return view('dashboard.user.auth.profile',[
            'user'=>$user,
            'title'=>'Profile'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        return view('dashboard.user.auth.update_profile', [
            'user' => $request->user()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        request()->validate([
            'name'       => 'required|string|min:2|max:100',
            'email'      => 'required|email|unique:users,email, ' . $id . ',id',
            'old_password' => 'nullable|string',
            'password' => 'nullable|required_with:old_password|string|confirmed|min:6'
        ]);

        $user = User::find($id);

        $user->name = $request->name;
        $user->email = $request->email;

        if ($request->filled('old_password')) {
            if (Hash::check($request->old_password, $user->password)) {
                $user->update([
                    'password' => Hash::make($request->password)
                ]);
            } else {
                return back()
                    ->withErrors(['old_password' => __('Please enter the correct password')])
                    ->withInput();
            }
        }

        if (request()->hasFile('photo')) {
            if($user->photo && file_exists(storage_path('app/public/photos/' . $user->photo))){
                Storage::delete('app/public/photos/'.$user->photo);
            }

            $file = $request->file('photo');
            $fileName = $file->hashName() . '.' . $file->getClientOriginalExtension();
            $request->photo->move(storage_path('app/public/photos'), $fileName);
            $user->photo = $fileName;
        }


        $user->save();

        return back()->with('status', 'Profile updated!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profile $profile)
    {
        //
    }
    public function crop()
    {
      return view('dashboard.user.auth.editdp');
    }
    public function crop_proses(Request $request)
    {
        $upload = User::where('id', auth()->user()->id)->first();
        Storage::disk('local_public')->delete($upload->photo);
        //get All Data
        $folderPath = public_path('users/images/');

        $image_parts = explode(";base64,", $request->image);
        $image_type_aux = explode("image/", $image_parts[0]);
        $image_type = $image_type_aux[1];
        $image_base64 = base64_decode($image_parts[1]);

        $imageName = uniqid().'.png';

        $imageFullPath = $folderPath.$imageName;

        file_put_contents($imageFullPath, $image_base64);

         DB::table('users')->where('id',auth()->user()->id)->update([
            'photo' =>  'users/images/' . $imageName
        ]);

        return response()->json(['success'=>'Crop Image Uploaded Successfully']);
    }

    public function update_data(Request $request)
    {
        $request->validate([
            'name'=>'required|max:255',
            'nip'=>['required', 'min:6', 'max:18'],
            'phone'=>'required',
            'gender'=>'required',
            'unit_kerja'=>'required',
            'instansi'=>'required',
            'email'=>['required','email:dns'],
        ]);

       $update = DB::table('users')->where('id', auth()->user()->id)->update([
            'name' => $request['name'],
            'nip' => $request['nip'],
            'phone' => $request['phone'],
            'gender'=> $request['gender'],
            'unit_kerja' => $request['unit_kerja'],
            'instansi'=> $request['instansi'],
            'level' => '3',
            'email' => $request['email']
        ]);

        if($update)
        return redirect()
                        ->back()
                        ->with('success', 'Profile Berhasil di Update');

            return redirect()
                        ->back()
                        ->withInput()
                        ->with('error', 'Profile Tidak ada yg Berubah');

        // return redirect('/dashboard')->with('success', 'Seleksi was successful!');
    }
    public function update_data_admin(Request $request)
    {
        $request->validate([
            'name'=>'required|max:255',
            'nip'=>['required', 'min:6', 'max:18'],
            'phone'=>'required',
            'gender'=>'required',
            'unit_kerja'=>'required',
            'instansi'=>'required',
            'email'=>['required','email:dns'],
        ]);

        DB::table('users')->where('id', $request->uid)->update([
            'name' => $request['name'],
            'nip' => $request['nip'],
            'phone' => $request['phone'],
            'gender'=> $request['gender'],
            'unit_kerja' => $request['unit_kerja'],
            'instansi'=> $request['instansi'],
            'level' => '3',
            'email' => $request['email']
        ]);
        return redirect('/admin')->with('success', 'Seleksi was successful!');
    }
}
