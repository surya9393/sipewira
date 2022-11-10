@extends('dashboard.layouts.main')
@section('content')
<div class="row">
    <div class="container col-lg-8">
        <div class="card">
            <h5 class="card-header text-center">Profile</h5>
            <div class="card-body">
                <div class="text-center">
                    <figure class="figure">
                      <img src="/upload/{{ auth()->user()->photo }}" class="figure-img img-fluid rounded" width="110" alt="{{ auth()->user()->name }}">
                      <figcaption class="figure-caption text-right">
                        {{ auth()->user()->name }}
                      </figcaption>
                    </figure>
                </div>
              <div class="text-center">
                <a href="{{ route('update.photo') }}" class="btn btn-primary">Ganti Foto</a>
                <a href="" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editModal">Edit Profile</a>
              </div>
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
              </table>
            </div>
        </div>
        
        {{-- Modal Edit --}}
        <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Profil</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                  <form action="{{ route('update.biodata') }}" method="POST">
                      @csrf
                      <div class="form-floating mb-3">
                          <input type="text" class="form-control rounded-top @error('name')
                           is-invalid @enderror" id="name" placeholder="Name" name="name" value="{{ auth()->user()->name }}">
                          <label for="floatingInput">Nama Lengkap</label>
                          @error('name')
                          <div class="invalid-feedback">
                              {{ $message }}
                          </div>
                          @enderror
                      </div>
                      <div class="form-floating mb-3">
                          <input type="text" class="form-control @error('nip')
                          is-invalid @enderror" name="nip" id="nip" placeholder="NIP" value="{{ auth()->user()->nip }}">
                          <label for="floatingInput">NIP</label>
                          @error('nip')
                          <div class="invalid-feedback">
                              {{ $message }}
                          </div>
                          @enderror
                      </div>
                      <div class="form-floating mb-3">
                          <input type="number" class="form-control rounded-top @error('phone')
                           is-invalid @enderror" id="phone" placeholder="No Telp / WA" name="phone" value="{{ auth()->user()->phone }}">
                          <label for="floatingInput">Nomor Telp / WA</label>
                          @error('phone')
                          <div class="invalid-feedback">
                              {{ $message }}
                          </div>
                          @enderror
                      </div>
                      <div class="form-floating mb-3">
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
                      <div class="form-floating mb-3">
                          <input type="text" class="form-control rounded-top @error('unit_kerja')
                           is-invalid @enderror" id="unit_kerja" placeholder="Unit Kerja" name="unit_kerja" value="{{ auth()->user()->unit_kerja }}" required>
                          <label for="floatingInput">Unit Kerja</label>
                          @error('unit_kerja')
                          <div class="invalid-feedback">
                              {{ $message }}
                          </div>
                          @enderror
                      </div>
                      <div class="form-floating mb-3">
                          <input type="text" class="form-control rounded-top @error('instansi')
                           is-invalid @enderror" id="instansi" placeholder="instansi" name="instansi" value="{{ auth()->user()->instansi }}" required>
                          <label for="floatingInput">Instansi</label>
                          @error('instansi')
                          <div class="invalid-feedback">
                              {{ $message }}
                          </div>
                          @enderror
                      </div>
                      <div class="form-floating mb-3">
                          <input type="email" name="email" class="form-control @error('email')
                          is-invalid @enderror" id="email" value="{{ auth()->user()->email }}">
                          <label for="floatingInput">Email</label>
                          @error('email')
                          <div class="invalid-feedback">
                              {{ $message }}
                          </div>
                          @enderror
                      </div>
  
                      <div class="form-floating mb-3">
                          <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="check" required>
                              <label class="form-check-label" for="flexCheckDefault">
                                Apakah anda yakin semua data sudah benar?
                              </label>
                            </div>
                      </div>
                  <button class="w-100 btn btn-lg btn-success mt-3" type="submit" onclick="return Validate()">Perbaharui</button>
                  </form>
              </div>
            </div>
          </div>
      </div>
    </div>
</div>

@endsection
