@extends('dashboard.admin.layouts.main')
@section('content')
    <div class="row mt-5">
        <div class="container">
            <h1 class="text-center">List Pendaftar SIPPJAFUNG</h1>
            <div class="d-flex justify-content-md-end">
                <a href="{{ url('/admin') }}" class="btn btn-primary m-2">Kembali</a>
                <a href="{{ url('/cetak/pendaftar') }}" class="btn btn-success m-2">Cetak</a>
            </div>
            <table class="table mt-4">
                <thead class="text-center">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">KTP</th>
                    <th scope="col">Aksi</th>
                </tr>
                </thead>
                <tbody class="text-center">
                @foreach ($data as $administrasiuser)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $administrasiuser->ktp }}</td>
                        <td><a href="/verifikasi/pendaftar/{{ $daftar->id }}" class="btn btn-warning">Lihat</a></td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>
@endsection
