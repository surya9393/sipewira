@extends('dashboard.layouts.main')
@section('content')
<div class="row mb-5">
    <div class="container col-lg-8 mx-auto">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Selamat Datang, {{ auth()->user()->name }} </h1>
        </div>

        <div class="card  mt-5">
            <div class="card-header text-center">
                VERSI 1.0 - PENDAFTARAN JABATAN FUNGSIONAL PENGEMBANGA KEWIRAUSAHAAN
            </div>
            <div class="card-body">
              <h5 class="card-title">Sipewirausaha</h5>
              <p class="card-text">Pimpinan Instansi Pemerintah menyampaikan daftar usulan PNS yang akan diangkat dalam Jabatan Fungsional Pengembang Kewirausahaan kepada Pimpinan Instansi Pembina dengan tembusan disampaikan kepada Menteri PANRB.</p>
              {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
            </div>
        </div>
          <h2 class="text-center mt-5">Informasi</h2>
          <hr>
          <div class="row row-cols-1 row-cols-md-3 g-4 mt-2 mb-5">
            @foreach ($posts as $post)
            <div class="col">
              <div class="card h-100">
                <img src="/upload/berita/{{ $post->photo }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{ $post->title }}</h5>
                  <p class="card-text">{{ $post->excerpt }}</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">Last updated 3 mins ago</small>
                </div>
              </div>
            </div>
            @endforeach
          </div>
          <div class="d-flex justify-content-center mt-5">
            <a href="/informasi" class="btn btn-primary">Lebih Banyak</a>
        </div>
    </div>
</div>
@endsection
