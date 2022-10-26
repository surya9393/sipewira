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
                <form action="{{ url('/register') }}" method="POST">
                    @csrf
                    <div class="form-floating">
                        <input type="text" class="form-control rounded-top @error('name')
                         is-invalid @enderror" id="name" placeholder="Name" name="name">
                        <label for="floatingInput">Nama Lengkap</label>
                        @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="text" class="form-control @error('username')
                        is-invalid @enderror" name="username" id="username" placeholder="Username">
                        <label for="floatingInput">Username</label>
                        @error('username')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="number" class="form-control rounded-top @error('phone')
                         is-invalid @enderror" id="phone" placeholder="Name" name="phone">
                        <label for="floatingInput">Nomor Telp</label>
                        @error('phone')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-floating">
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
                    <div class="form-floating">
                        <input type="email" name="email" class="form-control @error('email')
                        is-invalid @enderror" id="email" placeholder="name@example.com">
                        <label for="floatingInput">Alamat Email</label>
                        @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control rounded-bottom @error('password')
                        is-invalid @enderror" name="password" id="password" placeholder="Password">
                        <label for="floatingPassword">Password</label>
                        @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                <button class="w-100 btn btn-lg btn-danger mt-3" type="submit">Daftar</button>
                </form>
                <small class="d-block text-center mt-3">Sudah Terdaftar? <a href="/login">Login Sekarang!</a></small>
            </main>
        </div>
    </div>
</div>
</section>
@include('partials.footer')
@endsection
