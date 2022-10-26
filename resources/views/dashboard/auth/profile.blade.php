@extends('dashboard.layouts.main')
@section('content')
<div class="row">
    <div class="container col-lg-8">
        <div class="card">
            <h5 class="card-header">Profile</h5>
            <div class="card-body">
                <div class="text-center">
                    <figure class="figure">
                        <img src="{{ auth()->user()->photo }}" class="figure-img img-fluid rounded" width="110" alt="{{ auth()->user()->name }}">
                        <figcaption class="figure-caption text-right">{{ auth()->user()->name }}</figcaption>
                    </figure>
                </div>
                  <table class="table table-stripped">
                    <tr>
                        <td>Nama Asli</td>
                        <td>:</td>
                        <td>{{ auth()->user()->name }}</td>
                    </tr>
                    <tr>
                        <td>Username</td>
                        <td>:</td>
                        <td>{{ auth()->user()->username }}</td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>:</td>
                        <td>{{ auth()->user()->email }}</td>
                    </tr>
                  </table>
              <p class="card-text"></p>
              <div class="text-center">
                <a href="/hasil" class="btn btn-primary">Cek Hasil</a>
                <a href="/update/{{}}" class="btn btn-warning">Edit Profile</a>
              </div>

            </div>
          </div>
    </div>
</div>
@endsection
