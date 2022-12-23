@extends('dashboard.admin.layouts.main')
@section('content')
        <div class="container mt-5">
            <h1 class="text-start">Daftar Informasi</h1>
            <button class="btn btn-success m-2 mb-5" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><i class="bi bi-plus-lg"></i> Tambah Informasi Baru</button>

            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title text-center" id="offcanvasRightLabel">Tambah Informasi Baru</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <form action="{{ route('admin.berita') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                            <div class="mb-3">
                              <label for="exampleInputJudul" class="form-label">Judul Informasi</label>
                              <input type="text" name="judul" class="form-control" id="exampleInputJudul" aria-describedby="judulHelp" placeholder="Judul Berita" required>
                              <div id="judulHelp" class="form-text">Judul untuk Informasi yang akan tampil</div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputKutipan" class="form-label">Abstrak/Kalimat Pengantar Informasi</label>
                                <input type="text" name="kutipan" class="form-control" id="exampleInputKutipan" aria-describedby="kutipanHelp" placeholder="Kutipan Berita" required>
                                <div id="kutipanHelp" class="form-text">Kalimat Pengantar untuk postingan berita anda</div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPhoto" class="form-label">Foto/Flyer</label>
                                <input type="file" class="form-control" name="photo" aria-describedby="photoHelp" required>
                                <div id="photoHelp" class="form-text">Silahkan Upload Foto jika ada</div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputBody" class="form-label">Isi Berita</label>
                                <textarea name="body" id="editor1" rows="10" cols="80">
                                </textarea>
                                <div id="bodyHelp" class="form-text">Isi untuk postingan berita anda</div>
                            </div>
                            <div class="mb-3 form-check">
                              <input type="checkbox" class="form-check-input" name="status" id="status">
                              <label class="form-check-label" for="status">Apakah Informasi ini akan di Publish?</label>
                            </div>
                            <div class="mb-3 form-check">
                              <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                              <label class="form-check-label" for="exampleCheck1">Yakin sudah benar?</label>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>

            <div class="m-2">
              <form>
                
                
            </form>
            </div>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                @foreach ($posts as $post)
                <div class="col">
                  <div class="card h-100">
                    <img src="/upload/berita/{{ $post->photo }}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title"><a href="/admin/berita/{{ $post->id }}">{{ $post->title }}</a></h5>
                      <p><small class="text-muted">{{ $post->created_at->diffForHumans() }}</small></p>
                      <p class="card-text">{{ $post->excerpt }}</p>
                    </div>
                    <div class="card-footer text-end">
                      <a href="#" class="btn btn-outline-primary"><i class="bi bi-eye-fill"></i></a>
                      <a href="#" class="btn btn-outline-warning"><i class="bi bi-pencil-fill"></i></a>
                      <a href="#" class="btn btn-outline-danger"><i class="bi bi-trash-fill"></i></a>
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

@section('js')
<script>
  // Replace the <textarea id="editor1"> with a CKEditor 4
  // instance, using default configuration.
  CKEDITOR.replace( 'editor1' );
</script>
@endsection