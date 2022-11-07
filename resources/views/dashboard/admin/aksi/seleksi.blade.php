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
                          <!-- Button trigger modal -->
                        <div class="text-center">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Seleksi</button>
                            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#staticBackdrop1">Edit Profil</button>
                        </div>                    
                        <!-- Modal -->
                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Seleksi</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                <form action="/seleksi" method="POST">
                                    @csrf
                                    <input type="text" name="id" value="{{ $user->id }}">
                                    <input type="text" class="form-control mb-3" name="nama" value="{{ $user->name }}">
                                    <div class="input-group mb-3">
                                        <select class="form-select" name="seleksi" required>
                                          <option selected value="">Hasil Seleksi</option>
                                          <option value="1">Lolos</option>
                                          <option value="0">Gagal</option>
                                        </select>
                                    </div>
                                    <div class="text-end">
                                        <button type="submit" class="btn btn-success">Update</button>
                                    </div>
                                </form>
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                            </div>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static1" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel1" aria-hidden="true">
                            <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit Profil</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="bi bi-x-lg"></i></button>
                                </div>
                                <div class="modal-body">
                                ...
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Understood</button>
                                </div>
                            </div>
                            </div>
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
    <script>
       
  
    </script>
@endsection
