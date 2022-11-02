@extends('dashboard.layouts.main')
@section('content')
	<div class="row">
		<div class="container">

			<h2 class="text-center my-5">Lengkapi Persyaratan Anda</h2>
            <div class="position-relative">
                <hr class="m-0 p-0">
			</div>
            <div class="col-lg-8 mx-auto my-5">

				@if(count($errors) > 0)
				<div class="alert alert-danger">
					@foreach ($errors->all() as $error)
					{{ $error }} <br/>
					@endforeach
				</div>
				@endif
                <div class="card-body ">
                    @forelse ($uploaded as $product)
                    <div class="alert alert-success alert-dismissible fade show m-5 text-center" role="alert">
                        Data Sudah Ada Silahkan tunggu proses Verifikasi
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                        @include('dashboard.upload.sudahupload')
                    @empty
                        @include('dashboard.upload.belumupload')
                    @endforelse
                </div>
			</div>
		</div>
	</div>
@endsection
