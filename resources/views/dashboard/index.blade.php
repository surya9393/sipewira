@extends('dashboard.layouts.main')
@section('content')
<div class="row">
    <div class="container col-lg-8 mx-auto">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Selamat Datang, {{ auth()->user()->name }} </h1>
        </div>

        <div class="card">
            <div class="card-header">
                VERSI 1.0 - PENDAFTARAN JABATAN FUNGSIONAL PENGEMBANGA KEWIRAUSAHAAN
            </div>
            <div class="card-body">
              <h5 class="card-title">Sipewirausaha</h5>
              <p class="card-text">Pimpinan Instansi Pemerintah menyampaikan daftar usulan PNS yang akan diangkat dalam Jabatan Fungsional Pengembang Kewirausahaan kepada Pimpinan Instansi Pembina dengan tembusan disampaikan kepada Menteri PANRB.</p>
              {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
            </div>
        </div>

        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
              <div class="card">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
              </div>
            </div>
          </div>
    </div>
</div>
@endsection
