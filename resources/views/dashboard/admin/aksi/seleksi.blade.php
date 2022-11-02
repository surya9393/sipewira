@extends('dashboard.admin.layouts.main')
@section('content')
    <div class="row mt-5">
        <div class="container">
            <h1 class="text-center">Data Diri</h1>
            <hr color="black">
            <div class="row mt-5">
                <div class="container col-lg-8">
                    <div class="card">
                        <h5 class="card-header">Profile</h5>
                        <div class="card-body">
                            <div class="text-center">
                                @foreach ($author as $user)
                                <figure class="figure">
                                    <img src="/upload/{{ $user->photo }}" class="figure-img img-fluid rounded" width="110" alt="{{ $user->name }}">
                                    <figcaption class="figure-caption text-right">{{ $user->name }}</figcaption>
                                </figure>
                            </div>
                              <table class="table table-stripped">
                                <tr>
                                    <td>Nama Asli</td>
                                    <td>:</td>
                                    <td>{{ $user->name }}</td>
                                </tr>
                                <tr>
                                    <td>Nomor Induk Pegawai</td>
                                    <td>:</td>
                                    <td>{{ $user->nip }}</td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>:</td>
                                    <td>{{ $user->email }}</td>
                                </tr>
                                <tr>
                                    <td>Gender</td>
                                    <td>:</td>
                                    <td>{{ $user->gender }}</td>
                                </tr>
                                <tr>
                                    <td>Unit Kerja</td>
                                    <td>:</td>
                                    <td>{{ $user->unit_kerja }}</td>
                                </tr>
                                <tr>
                                    <td>Instansi</td>
                                    <td>:</td>
                                    <td>{{ $user->instansi }}</td>
                                </tr>
                              </table>
                          <p class="card-text"></p>
                          <div class="text-center">
                            <a href="/hasil" class="btn btn-primary">Seleksi</a>
                            <a href="/update/" class="btn btn-warning">Edit Profile</a>
                          </div>
                          @endforeach
                        </div>
                      </div>
                </div>
            </div>
            <h1 class="text-center mt-5">Daftar Persyaratan</h1>
            <hr color="black">
            @forelse ($uploaded as $product)
                @include('dashboard.admin.aksi.seleksi_ada')
            @empty
                @include('dashboard.admin.aksi.seleksi_tidak_ada')
            @endforelse
        </div>
    </div>
    <script>const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
        const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl));
    </script>
@endsection
