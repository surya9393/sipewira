@extends('dashboard.admin.layouts.main')
@section('content')
@if (session()->has('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
    <div class="row mt-5">
        <div class="container">
            <h1 class="text-center">Pendaftar SIPEWIRAUSAHA</h1>
            <table class="table table-bordered mt-4">
                <thead class="text-center">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                    <th scope="col">Aksi</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($pendaftar as $daftar)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $daftar->name }}</td>
                        <td>{{ $daftar->email }}</td>
                        <td class="text-center"><a href="/verifikasi/{{ $daftar->id }}" class="btn btn-warning">Lihat</a></td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>
@endsection
