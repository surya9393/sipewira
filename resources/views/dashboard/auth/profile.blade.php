@extends('dashboard.layouts.main')
@section('content')
<div class="row">
    <div class="container col-lg-8">
        <div class="card">
            <h5 class="card-header">Profile</h5>
            <div class="card-body">
                <div class="text-center">
                    <figure class="figure">
                        <img src="/upload/{{ auth()->user()->photo }}" class="figure-img img-fluid rounded" width="110" alt="{{ auth()->user()->name }}">
                        <figcaption class="figure-caption text-right">
                            <a href="{{ route('update.photo') }}">Ganti Foto Profil</a>
                        </figcaption>
                    </figure>
                </div>
                <form action="{{ route('update.biodata') }}" method="POST">
                    @csrf
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control rounded-top @error('name')
                         is-invalid @enderror" id="name" placeholder="Name" name="name" value="{{ auth()->user()->name }}">
                        <label for="floatingInput">Nama Lengkap</label>
                        @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control @error('nip')
                        is-invalid @enderror" name="nip" id="nip" placeholder="NIP" value="{{ auth()->user()->nip }}">
                        <label for="floatingInput">NIP</label>
                        @error('nip')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-floating mb-3">
                        <input type="number" class="form-control rounded-top @error('phone')
                         is-invalid @enderror" id="phone" placeholder="No Telp / WA" name="phone" value="{{ auth()->user()->phone }}">
                        <label for="floatingInput">Nomor Telp / WA</label>
                        @error('phone')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-floating mb-3">
                        <select name="gender" id="gender01" class="form-select @error('gender')
                        is-invalid @enderror">
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                         <label for="gender01">Jenis Kelamin</label>
                        @error('gender')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control rounded-top @error('unit_kerja')
                         is-invalid @enderror" id="unit_kerja" placeholder="Unit Kerja" name="unit_kerja" value="{{ auth()->user()->unit_kerja }}" required>
                        <label for="floatingInput">Unit Kerja</label>
                        @error('unit_kerja')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control rounded-top @error('instansi')
                         is-invalid @enderror" id="instansi" placeholder="instansi" name="instansi" value="{{ auth()->user()->instansi }}" required>
                        <label for="floatingInput">Instansi</label>
                        @error('instansi')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" name="email" class="form-control @error('email')
                        is-invalid @enderror" id="email" placeholder="name@example.com" value="{{ auth()->user()->email }}">
                        <label for="floatingInput">Email</label>
                        @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="form-floating mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="check" required>
                            <label class="form-check-label" for="flexCheckDefault">
                              Apakah anda yakin semua data sudah benar?
                            </label>
                          </div>
                    </div>
                <button class="w-100 btn btn-lg btn-success mt-3" type="submit" onclick="return Validate()">Perbaharui</button>
                </form>
              <p class="card-text"></p>
              <div class="text-center">
                <a href="/hasil" class="btn btn-primary">Cek Hasil</a>
                <a href="/editprofile" class="btn btn-warning">Edit Profile</a>
              </div>

            </div>
          </div>
    </div>
</div>
<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
    <div class="modal-header">
    <h5 class="modal-title" id="modalLabel">Laravel Cropper Js - Crop Image Before Upload - Tutsmake.com</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">×</span>
    </button>
    </div>
    <div class="modal-body">
    <div class="img-container">
    <div class="row">
    <div class="col-md-8">
    <img id="image" src="https://avatars0.githubusercontent.com/u/3456749">
    </div>
    <div class="col-md-4">
    <div class="preview"></div>
    </div>
    </div>
    </div>
    </div>
    <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
    <button type="button" class="btn btn-primary" id="crop">Crop</button>
    </div>
    </div>
    </div>
    </div>
@endsection
