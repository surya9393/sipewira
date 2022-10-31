@extends('layouts.main')
@section('content')
<section id="login" class="login">
<div class="container mt-30 p-5">
    <div class="row justify-content-center">
        <div class="col-lg-5">
            <main class="form-registration">
                <h1 class="h3 mb-3 fw-normal text-center">Formulir Registrasi</h1>
                <h1 class="h3 mb-3 fw-normal text-center">Jabatan Fungsional</h1>
                <hr class="mb-5">
                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control rounded-top @error('name')
                         is-invalid @enderror" id="name" placeholder="Name" name="name" value="{{ old('name') }}">
                        <label for="floatingInput">Nama Lengkap</label>
                        @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control @error('nip')
                        is-invalid @enderror" name="nip" id="nip" placeholder="NIP" value="{{ old('nip') }}">
                        <label for="floatingInput">NIP</label>
                        @error('nip')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-floating mb-3">
                        <input type="number" class="form-control rounded-top @error('phone')
                         is-invalid @enderror" id="phone" placeholder="No Telp / WA" name="phone" value="{{ old('phone') }}">
                        <label for="floatingInput">Nomor Telp / WA</label>
                        @error('phone')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    {{-- <div class="form-floating mb-3">
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
                    </div> --}}
                    <div class="form-floating mb-3">
                        <input type="email" name="email" class="form-control @error('email')
                        is-invalid @enderror" id="email" placeholder="name@example.com" value="{{ old('email') }}">
                        <label for="floatingInput">Email</label>
                        @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="input-group mb-3">
                        <div class="form-floating">
                            <input type="password" class="form-control rounded-bottom @error('password')
                            is-invalid @enderror" name="password" id="password" placeholder="Password" onkeyup='check();'>
                            <label for="floatingPassword">Password</label>
                            <span id="message"></span>
                            @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <span class="input-group-text" onclick="password_show_hide();">
                            <i class="fas fa-eye" id="show_eye"></i>
                            <i class="fas fa-eye-slash d-none" id="hide_eye"></i>
                        </span>
                    </div>

                    <div class="input-group mb-3">
                        <div class="form-floating">
                            <input type="password" class="form-control rounded-bottom @error('confirm_password')
                            is-invalid @enderror" name="confirm_password" id="confirm_password" placeholder="Confirm Password" onkeyup='check();'>
                            <label for="floatingPassword">Konfirmasi Password</label>
                            <span id="message"></span>
                            @error('confirm_password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <span class="input-group-text" onclick="c_password_show_hide();">
                            <i class="fas fa-eye" id="show_eye_c"></i>
                            <i class="fas fa-eye-slash d-none" id="hide_eye_c"></i>
                        </span>
                    </div>

                    <div class="form-floating mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="check" required>
                            <label class="form-check-label" for="flexCheckDefault">
                              Apakah anda menyetujui semua persyaratan?
                            </label>
                          </div>
                    </div>
                <button class="w-100 btn btn-lg btn-danger mt-3" type="submit" onclick="return Validate()">Daftar</button>
                </form>
                <small class="d-block text-center mt-3">Sudah Terdaftar? <a href="/login">Login Sekarang!</a></small>
            </main>
        </div>
    </div>
</div>
</section>
@include('partials.footer')
<script>
function password_show_hide() {
  var x = document.getElementById("password");
  var show_eye = document.getElementById("show_eye");
  var hide_eye = document.getElementById("hide_eye");
  hide_eye.classList.remove("d-none");
  if (x.type === "password") {
    x.type = "text";
    show_eye.style.display = "none";
    hide_eye.style.display = "block";
  } else {
    x.type = "password";
    show_eye.style.display = "block";
    hide_eye.style.display = "none";
  }
};
function c_password_show_hide() {
  var x = document.getElementById("confirm_password");
  var show_eye = document.getElementById("show_eye_c");
  var hide_eye = document.getElementById("hide_eye_c");
  hide_eye.classList.remove("d-none");
  if (x.type === "password") {
    x.type = "text";
    show_eye.style.display = "none";
    hide_eye.style.display = "block";
  } else {
    x.type = "password";
    show_eye.style.display = "block";
    hide_eye.style.display = "none";
  }
};

function Validate() {
        var password = document.getElementById("password").value;
        var confirmPassword = document.getElementById("confirm_password").value;
        if (password != confirmPassword) {
            alert("Passwords do not match.");
            return false;
        }
        return true;
    };

</script>
@endsection
