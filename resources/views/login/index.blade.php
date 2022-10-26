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
                <div class="form-floating">
                    <input type="email" name="email" class="form-control @error('email') is-invalid
                    @enderror" id="email" placeholder="name@example.com" autofocus required>
                    <label for="floatingInput">Alamat Email</label>
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
                    <label for="floatingPassword">Password</label>
                </div>
                <button class="w-100 btn btn-lg btn-danger" type="submit">Login</button>
                </form>
                <small class="d-block text-center mt-3">Belum Terdaftar? <a href="/register">Daftar Sekarang!</a></small>
            </main>
        </div>
    </div>
</div>
</section>
@include('partials.footer')
@endsection
