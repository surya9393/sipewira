@extends('dashboard.layouts.main')
@section('content')
    <div class="row mt-2">
        <div class="container col-lg-8">
            <div class="container">
                <h2 class="text-center ">Informasi</h2>
                <hr>
            </div>

                @foreach ($posts as $post)
                    <div class="card m-3">
                        <h1 class="card-title">{{ $post->title }}</h1>
                        <img src="/upload/berita/{{ $post->photo }}" class="img-fluid rounded mx-auto d-block" width="60%"
                            alt="...">
                        <div class="card-body">
                            <p class="card-text">{{ $post->excerpt }}</p>
                            <p class="card-text">{!! $post->body !!}</p>
                            <p class="card-text"><small class="text-muted">{{ $post->created_at->diffForHumans() }}</small>
                            </p>
                        </div>
                    </div>
                @endforeach

        </div>
    </div>
@endsection
