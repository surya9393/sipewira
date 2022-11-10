@extends('dashboard.layouts.main')
@section('content')
<div class="row mt-2">
    <div class="container col-lg-8">
        <div class="card">
            <h5 class="card-header text-center">Pengumuman</h5>
            <div class="card-body">
                    <table class="table table-stripped mt-5">
                        <tr>
                            <td>Nama</td>
                            <td>{{ auth()->user()->name }}</td>
                        </tr>
                        <tr>
                            <td>NIP</td>
                            <td>{{ auth()->user()->nip }}</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>{{ auth()->user()->email }}</td>
                        </tr>
                        <tr>
                            <td>No.Telp</td>
                            <td>{{ auth()->user()->phone }}</td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td>{{ auth()->user()->gender }}</td>
                        </tr>
                        <tr>
                            <td>Unit Kerja</td>
                            <td>{{ auth()->user()->unit_kerja }}</td>
                        </tr>
                        <tr>
                            <td>Instansi</td>
                            <td>{{ auth()->user()->instansi }}</td>
                        </tr>
                        <tr>
                            <td>Status</td>
                            @if ( auth()->user()->hasil == 0 )
                                <td class="bg-primary text-light">Data anda belum di verifikasi, mohon tunggu</td>                                
                            @elseif ( auth()->user()->hasil == 1 )
                                <td class="bg-success text-Light">Selamat Anda Lolos</td>
                            @elseif ( auth()->user()->hasil == 2)
                                <td class="bg-danger text-light">Mohon Maaf Anda Belum Lolos</td>
                            @endif

                        </tr>
                      </table>
            </div>
        </div>
    </div>
</div>
@endsection
