@extends('layouts.main')
@section('content')
<section id="login" class="login">
<div class="container mt-30 p-5">
    <div class="row justify-content-center">
        <div class="col-md-4">

            @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            @if (session()->has('loginError'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('loginError') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif


            <main class="form-signin w-100 m-auto">
                <h5 class="mb-3 fw-normal text-center">Sistem Informasi</h5>
                <h5 class="mb-3 fw-normal text-center">Pengembang Wirausaha</h5>
                <hr class="mb-5">
                <form action="{{ route('login.proses') }}" method="POST">
                    @csrf
                <div class="form-floating mb-3">
                    <input type="email" name="email" class="form-control @error('email') is-invalid
                    @enderror" id="email" placeholder="name@example.com" autofocus required>
                    <label for="floatingInput">Email</label>
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="input-group mb-3">
                    <div class="form-floating">
                        <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
                        <label for="floatingPassword">Password</label>
                    </div>
                    <span class="input-group-text" onclick="password_show_hide();">
                        <i class="fas fa-eye" id="show_eye"></i>
                        <i class="fas fa-eye-slash d-none" id="hide_eye"></i>
                    </span>
                </div>
                <button class="w-100 btn btn-lg btn-danger" type="submit">Login</button>
                </form>
                <small class="d-block text-center mt-3">Belum Terdaftar? <a href="/register">Daftar Sekarang!</a></small>
            </main>
        </div>
    </div>
</div>
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
</script>
</section>
@include('partials.footer')
@endsection
