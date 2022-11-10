@extends('dashboard.layouts.main')
@section('content')
<div class="row mt-2">
    <div class="container col-lg-8">
        <div class="container">
            <h2 class="text-center ">Informasi</h2>
            <hr>
        </div>
        <div class="row row-cols-1 row-cols-md-3 g-4 mt-3">
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
        </div>
    </div>
</div>
@endsection
