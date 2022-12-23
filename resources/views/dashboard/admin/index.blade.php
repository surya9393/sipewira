@extends('dashboard.admin.layouts.main')
@section('content')
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container">
    <h1 class="mt-5 text-center">SELEKSI</h1>
    <div class="row mt-3">
        <div class="col-md-4 col-xl-4">
            <div class="card bg-c-blue order-card">
                <div class="card-block">
                    <a href="{{ url('/verifikasi') }}" class="text-light">
                        <h3 class="mb-3">Pendaftar & Verifikasi <span class="f-right"><i class="fa fa-angle-right" aria-hidden="true"></i></span></h3>
                    </a>
                    <h4 class="text-end"><i class="fa fa-address-book f-left fa-lg"></i></i><span class="text-end">Total: {{ $pendaftar }}</span></h4>
                    <p class="mt-4">Laki-laki: {{ $laki }}<span class="f-right">Perempuan: {{ $wanita }}</span></p>
                </div>
            </div>
        </div>

        <div class="col-md-4 col-xl-4">
            <div class="card bg-c-green order-card">
                <div class="card-block">
                    <a href="" class="text-light">
                        <h3 class="mb-3">Lolos Seleksi<span class="f-right"><i class="fa fa-angle-right" aria-hidden="true"></i></span></h3>
                    </a>
                    <h4 class="text-end"><i class="fa fa-check-circle f-left fa-lg"></i><span> Total: {{ $lolos }}</span></h4>
                    <p class="mt-4">Laki-laki: {{ $lolos_laki }}<span class="f-right">Perempuan: {{ $lolos_wanita }}</span></p>
                </div>
            </div>
        </div>

        <div class="col-md-4 col-xl-4">
            <div class="card bg-c-pink order-card">
                <div class="card-block">
                    <a href="" class="text-light">
                        <h3 class="mb-3">Gagal Seleksi<span class="f-right"><i class="fa fa-angle-right" aria-hidden="true"></i></span></h3>
                    </a>
                    <h4 class="text-end"><i class="fa fa-times-circle f-left fa-lg"></i><span>Total: {{ $gagal }}</span></h4>
                    <p class="mt-4">Laki-laki: {{ $gagal_laki }}<span class="f-right">Perempuan: {{ $gagal_wanita }}</span></p>
                </div>
            </div>
        </div>
	</div>
    <hr>
    <h1 class="text-center mt-5">INFORMASI</h1>
    <div class="row mt-3 justify-content-center">
        <div class="col-md-4 col-xl-6">
            <div class="card bg-c-yellow order-card">
                <div class="card-block">
                    <a href="/admin/berita" class="text-light">
                        <h3 class="mb-3">Posting Informasi<span class="f-right"><i class="fa fa-angle-right" aria-hidden="true"></i></span></h3>
                    </a>
                    <h2 class="text-end"><i class="fa fa-newspaper f-left"></i><span>Total: {{ $berita }}</span></h2>
                    <p class="m-b-0">Publish: 0<span class="f-right">Draft: 0</span></p>
                </div>
            </div>
        </div>
    </div>
    <hr>
            <textarea name="editor5" id="editor5" rows="10" cols="80">
                This is my textarea to be replaced with CKEditor 4.
            </textarea>
            
</div>
<style type="text/css">
    body{
    background:#FAFAFA;
}
.order-card {
    color: #fff;
}

.bg-c-blue {
    background: linear-gradient(45deg,#4099ff,#73b4ff);
}

.bg-c-green {
    background: linear-gradient(45deg,#379237,#54B435);
}

.bg-c-yellow {
    background: linear-gradient(45deg,#E14D2A,#FD841F);
}

.bg-c-pink {
    background: linear-gradient(45deg,#FF5370,#ff869a);
}
.bg-c-pastel{
    background: linear-gradient(45deg, #7895B2, #AEBDCA);
}


.card {
    border-radius: 5px;
    -webkit-box-shadow: 0 1px 2.94px 0.06px rgba(4,26,55,0.16);
    box-shadow: 0 1px 2.94px 0.06px rgba(4,26,55,0.16);
    border: none;
    margin-bottom: 30px;
    -webkit-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
}

.card .card-block {
    padding: 25px;
}

.order-card i {
    font-size: 26px;
}

.f-left {
    float: left;
}

.f-right {
    float: right;
}
</style>


@endsection

@section('js')
<script>
    // Replace the <textarea id="editor1"> with a CKEditor 4
    // instance, using default configuration.
    CKEDITOR.replace( 'editor5' );
</script>
@endsection