@extends('dashboard.admin.layouts.main')
@section('content')
        <div class="container mt-5">
            <h1 class="text-start">Daftar Postingan</h1>
            <button class="btn btn-success m-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><i class="bi bi-plus-lg"></i> Tambah Berita</button>

            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title text-center" id="offcanvasRightLabel">Tambah Berita Baru</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <form action="{{ route('admin.berita') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                            <div class="mb-3">
                              <label for="exampleInputJudul" class="form-label">Judul Berita</label>
                              <input type="text" name="judul" class="form-control" id="exampleInputJudul" aria-describedby="judulHelp" placeholder="Judul Berita" required>
                              <div id="judulHelp" class="form-text">Judul untuk postingan berita anda</div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputKutipan" class="form-label">Kutipan Berita</label>
                                <input type="text" name="kutipan" class="form-control" id="exampleInputKutipan" aria-describedby="kutipanHelp" placeholder="Kutipan Berita" required>
                                <div id="kutipanHelp" class="form-text">Kutipan untuk postingan berita anda</div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPhoto" class="form-label">Tambahkan Photo</label>
                                <input type="file" class="form-control" name="photo" aria-describedby="photoHelp" required>
                                <div id="photoHelp" class="form-text">Silahkan Upload Foto jika ada</div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputBody" class="form-label">Isi Berita</label>
                                <input type="text" name="body" class="form-control" id="exampleInputBody" aria-describedby="bodyHelp" placeholder="Isi Berita" required> 
                                <div id="bodyHelp" class="form-text">Isi untuk postingan berita anda</div>
                            </div>
                            <div class="mb-3 form-check">
                              <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                              <label class="form-check-label" for="exampleCheck1">Yakin sudah benar?</label>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-3 g-4">
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
                {{ $posts->links() }}
            </div>
        </div>
@endsection
