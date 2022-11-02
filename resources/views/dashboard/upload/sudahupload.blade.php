@if (session()->has('successupload'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('successupload') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
    <table class="table table-bordered m-5">
        <div>
        <thead class="text-center">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Upload</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        </div>
        <input id="ktp" type="hidden" name="uid" value=" {{ auth()->user()->id }} ">
        <div class="form-group">
            @foreach ($uploaded as $getdata)
        <tbody>
            {{-- ktp --}}
            <tr>
                <td class="position-relative">
                    <b class="position-absolute top-50 start-50 translate-middle">1</b>
                </td>
                <td class="position-relative">
                    <b class="position-absolute top-50 start-2 translate-middle-y">Kartu Tanda Penduduk:</b>
                </td>
                <td class="text-center">
                    @if (empty($getdata->ktp))
                    <input id="ktp" type="file" name="ktp">
                    @else
                    <button type="button" class="btn btn-sm btn-success" disabled>Data sudah Ter Upload</button>
                    @endif
                </td>
                <td class="text-center">
                    @if ($verif->s_ktp == '0')
                    <button type="button" class="btn btn-sm btn-danger" data-bs-toogle="tooltip" data-bs-placement="top" title="Data Belum di Verivikasi"><i class="bi bi-x-circle-fill"></i></button>
                    @elseif ($verif->s_ktp == '1')
                    <button type="button" class="btn btn-sm btn-success" data-bs-toogle="tooltip" data-bs-placement="top" title="Data Sudah di Verivikasi"><i class="bi bi-check-circle-fill"></i></button>
                    @endif
                </td>
                <td class="text-center">
                    @if (empty($getdata->ktp))
                    <p>Data Tidak Ada</p>
                    @else
                        <span data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                            <button type="button" class="btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Lihat">
                                <i class="bi bi-search"></i>
                            </button>
                        </span>
                        <div class="modal fade"  id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable modal-xl">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">KTP</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <iframe src="/upload/ktp/{{ $getdata->ktp }}" frameborder="0" width="800" height="600"></iframe>
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                            </div>
                        </div>
                        <span data-bs-toggle="modal" data-bs-target="#editktp">
                            <button type="button" class="btn btn-info" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                <i class="bi bi-pencil-square text-light"></i>
                            </button>
                        </span>
                        <div class="modal fade"  id="editktp" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable modal-xl">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5 text-center" id="staticBackdropLabel">EDIT KTP</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                        <iframe src="/upload/ktp/{{ $getdata->ktp }}" frameborder="0" width="200" height="200"></iframe>
                                        <form action="/update/ktp" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="id" value=" {{auth()->user()->id}} ">
                                            <input id="ktp" type="file" name="ktp">
                                            <input type="submit" name="submit" id="" value="Update" class="btn btn-success">
                                        </form>
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                            </div>
                        </div>
                        <a href="/delete/upload {{ $getdata->user_id }}" class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Hapus"><i class="bi bi-trash"></i></a>
                        @endif
                </td>
            </tr>

            {{-- npwp --}}
            <tr>
                <td class="position-relative">
                    <b class="position-absolute top-50 start-50 translate-middle">2</b>
                </td>
                <td class="position-relative">
                    <b class="position-absolute top-50 start-2 translate-middle-y">Nomor Pokok Wajib Pajak:</b>
                </td>
                <td class="text-center">
                    @if (empty($getdata->npwp))
                    <input id="ktp" type="file" name="ktp">
                    @else
                    <button type="button" class="btn btn-sm btn-success" disabled>Data sudah Ter Upload</button>
                    @endif
                </td>
                <td class="text-center">
                    @if ($verif->s_npwp == '0')
                    <button type="button" class="btn btn-sm btn-danger" data-bs-toogle="tooltip" data-bs-placement="top" title="Data Belum di Verivikasi"><i class="bi bi-x-circle-fill"></i></button>
                    @elseif ($verif->s_npwp == '1')
                    <button type="button" class="btn btn-sm btn-success" data-bs-toogle="tooltip" data-bs-placement="top" title="Data Sudah di Verivikasi"><i class="bi bi-check-circle-fill"></i></button>
                    @endif
                </td>
                <td class="text-center">
                    @if (empty($getdata->npwp))
                    <p>Data Tidak Ada</p>
                    @else
                        <span data-bs-toggle="modal" data-bs-target="#staticBackdrop1">
                            <button type="button" class="btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Lihat">
                                <i class="bi bi-search"></i>
                            </button>
                        </span>
                        <div class="modal fade"  id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable modal-xl">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">NPWP</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <iframe src="/upload/npwp/{{ $getdata->npwp }}" frameborder="0" width="800" height="600"></iframe>
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                            </div>
                        </div>
                        <span data-bs-toggle="modal" data-bs-target="#editnpwp">
                            <button type="button" class="btn btn-info" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                <i class="bi bi-pencil-square text-light"></i>
                            </button>
                        </span>
                        <div class="modal fade"  id="editnpwp" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable modal-xl">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5 text-center" id="staticBackdropLabel">EDIT NPWP</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                        <iframe src="/upload/npwp/{{ $getdata->npwp }}" frameborder="0" width="200" height="200"></iframe>
                                        <form action="/update/npwp" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="id" value=" {{auth()->user()->id}} ">
                                            <input id="ktp" type="file" name="npwp">
                                            <input type="submit" name="submit" id="" value="Update" class="btn btn-success">
                                        </form>
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                            </div>
                        </div>
                        <a href="/delete" class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Hapus"><i class="bi bi-trash"></i></a>
                        @endif
                </td>
            </tr>

            {{-- skpns --}}
            <tr>
                <td class="position-relative">
                    <b class="position-absolute top-50 start-50 translate-middle">3</b>
                </td>
                <td class="position-relative">
                    <b class="position-absolute top-50 start-2 translate-middle-y">Surat Keterangan Pegawai Negeri Sipil:</b>
                </td>
                <td class="text-center">
                    @if (empty($getdata->skpns))
                    <input id="ktp" type="file" name="ktp">
                    @else
                    <button type="button" class="btn btn-sm btn-success" disabled>Data sudah Ter Upload</button>
                    @endif
                </td>
                <td class="text-center">
                    @if ($verif->s_skpns == '0')
                    <button type="button" class="btn btn-sm btn-danger" data-bs-toogle="tooltip" data-bs-placement="top" title="Data Belum di Verivikasi"><i class="bi bi-x-circle-fill"></i></button>
                    @elseif ($verif->s_skpns == '1')
                    <button type="button" class="btn btn-sm btn-success" data-bs-toogle="tooltip" data-bs-placement="top" title="Data Sudah di Verivikasi"><i class="bi bi-check-circle-fill"></i></button>
                    @endif
                </td>
                <td class="text-center">
                    @if (empty($getdata->skpns))
                    <p>Data Tidak Ada</p>
                    @else
                        <span data-bs-toggle="modal" data-bs-target="#staticBackdrop2">
                            <button type="button" class="btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Lihat">
                                <i class="bi bi-search"></i>
                            </button>
                        </span>
                        <div class="modal fade"  id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable modal-xl">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Surat Keterangan PNS</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <iframe src="/upload/skpns/{{ $getdata->skpns }}" frameborder="0" width="800" height="600"></iframe>
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                            </div>
                        </div>
                        <span data-bs-toggle="modal" data-bs-target="#editskpns">
                            <button type="button" class="btn btn-info" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                <i class="bi bi-pencil-square text-light"></i>
                            </button>
                        </span>
                        <div class="modal fade"  id="editskpns" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable modal-xl">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5 text-center" id="staticBackdropLabel">EDIT SKPNS</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                        <iframe src="/upload/skpns/{{ $getdata->skpns }}" frameborder="0" width="200" height="200"></iframe>
                                        <form action="/update/skpns" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="id" value=" {{auth()->user()->id}} ">
                                            <input id="skpns" type="file" name="skpns">
                                            <input type="submit" name="submit" id="" value="Update" class="btn btn-success">
                                        </form>
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                            </div>
                        </div>
                        <a href="/delete" class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Hapus"><i class="bi bi-trash"></i></a>
                        @endif
                </td>
            </tr>

            {{-- skpangkat --}}
            <tr>
                <td class="position-relative">
                    <b class="position-absolute top-50 start-50 translate-middle">4</b>
                </td>
                <td class="position-relative">
                    <b class="position-absolute top-50 start-2 translate-middle-y">Surat Keterangan Pangkat:</b>
                </td>
                <td class="text-center">
                    @if (empty($getdata->skpangkat))
                    <input id="ktp" type="file" name="ktp">
                    @else
                    <button type="button" class="btn btn-sm btn-success" disabled>Data sudah Ter Upload</button>
                    @endif
                </td>
                <td class="text-center">
                    @if ($verif->s_skpangkat == '0')
                    <button type="button" class="btn btn-sm btn-danger" data-bs-toogle="tooltip" data-bs-placement="top" title="Data Belum di Verivikasi"><i class="bi bi-x-circle-fill"></i></button>
                    @elseif ($verif->s_skpangkat == '1')
                    <button type="button" class="btn btn-sm btn-success" data-bs-toogle="tooltip" data-bs-placement="top" title="Data Sudah di Verivikasi"><i class="bi bi-check-circle-fill"></i></button>
                    @endif
                </td>
                <td class="text-center">
                    @if (empty($getdata->skpangkat))
                    <p>Data Tidak Ada</p>
                    @else
                        <span data-bs-toggle="modal" data-bs-target="#staticBackdrop3">
                            <button type="button" class="btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Lihat">
                                <i class="bi bi-search"></i>
                            </button>
                        </span>
                        <div class="modal fade"  id="staticBackdrop3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable modal-xl">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Surat Keterangan Pangkat</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <iframe src="/upload/skpangkat/{{ $getdata->skpangkat }}" frameborder="0" width="800" height="600"></iframe>
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                            </div>
                        </div>
                        <span data-bs-toggle="modal" data-bs-target="#editskpangkat">
                            <button type="button" class="btn btn-info" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                <i class="bi bi-pencil-square text-light"></i>
                            </button>
                        </span>
                        <div class="modal fade"  id="editskpangkat" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable modal-xl">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5 text-center" id="staticBackdropLabel">EDIT SK PANGKAT</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                        <iframe src="/upload/skpangkat/{{ $getdata->skpangkat }}" frameborder="0" width="200" height="200"></iframe>
                                        <form action="/update/skpangkat" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="id" value=" {{auth()->user()->id}} ">
                                            <input id="skpns" type="file" name="skpangkat">
                                            <input type="submit" name="submit" id="" value="Update" class="btn btn-success">
                                        </form>
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                            </div>
                        </div>
                        <a href="/delete" class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Hapus"><i class="bi bi-trash"></i></a>
                        @endif
                </td>
            </tr>

            {{-- skijazah --}}
            <tr>
                <td class="position-relative">
                    <b class="position-absolute top-50 start-50 translate-middle">5</b>
                </td>
                <td class="position-relative">
                    <b class="position-absolute top-50 start-2 translate-middle-y">Surat Keterangan Ijazah:</b>
                </td>
                <td class="text-center">
                    @if (empty($getdata->skijazah))
                    <input id="ktp" type="file" name="ktp">
                    @else
                    <button type="button" class="btn btn-sm btn-success" disabled>Data sudah Ter Upload</button>
                    @endif
                </td>
                <td class="text-center">
                    @if ($verif->s_skijazah == '0')
                    <button type="button" class="btn btn-sm btn-danger" data-bs-toogle="tooltip" data-bs-placement="top" title="Data Belum di Verivikasi"><i class="bi bi-x-circle-fill"></i></button>
                    @elseif ($verif->s_skijazah == '1')
                    <button type="button" class="btn btn-sm btn-success" data-bs-toogle="tooltip" data-bs-placement="top" title="Data Sudah di Verivikasi"><i class="bi bi-check-circle-fill"></i></button>
                    @endif
                </td>
                <td class="text-center">
                    @if (empty($getdata->skijazah))
                    <p>Data Tidak Ada</p>
                    @else
                        <span data-bs-toggle="modal" data-bs-target="#staticBackdrop4">
                            <button type="button" class="btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Lihat">
                                <i class="bi bi-search"></i>
                            </button>
                        </span>
                        <div class="modal fade"  id="staticBackdrop4" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable modal-xl">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Surat Keterangan Ijazah</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <iframe src="/upload/skijazah/{{ $getdata->skijazah }}" frameborder="0" width="800" height="600"></iframe>
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                            </div>
                        </div>
                        <span data-bs-toggle="modal" data-bs-target="#editskijazah">
                            <button type="button" class="btn btn-info" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                <i class="bi bi-pencil-square text-light"></i>
                            </button>
                        </span>
                        <div class="modal fade"  id="editskijazah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable modal-xl">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5 text-center" id="staticBackdropLabel">EDIT SK IJAZAH</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                        <iframe src="/upload/skijazah/{{ $getdata->skijazah }}" frameborder="0" width="200" height="200"></iframe>
                                        <form action="/update/skijazah" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="id" value=" {{auth()->user()->id}} ">
                                            <input id="skpns" type="file" name="skijazah">
                                            <input type="submit" name="submit" id="" value="Update" class="btn btn-success">
                                        </form>
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                            </div>
                        </div>
                        <a href="/delete" class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Hapus"><i class="bi bi-trash"></i></a>
                        @endif
                </td>
            </tr>

            {{-- skjabatan --}}
            <tr>
                <td class="position-relative">
                    <b class="position-absolute top-50 start-50 translate-middle">6</b>
                </td>
                <td class="position-relative">
                    <b class="position-absolute top-50 start-2 translate-middle-y">Surat Keterangan Jabatan:</b>
                </td>
                <td class="text-center">
                    @if (empty($getdata->skjabatan))
                    <input id="ktp" type="file" name="ktp">
                    @else
                    <button type="button" class="btn btn-sm btn-success" disabled>Data sudah Ter Upload</button>
                    @endif
                </td>
                <td class="text-center">
                    @if ($verif->s_skjabatan == '0')
                    <button type="button" class="btn btn-sm btn-danger" data-bs-toogle="tooltip" data-bs-placement="top" title="Data Belum di Verivikasi"><i class="bi bi-x-circle-fill"></i></button>
                    @elseif ($verif->s_skjabatan == '1')
                    <button type="button" class="btn btn-sm btn-success" data-bs-toogle="tooltip" data-bs-placement="top" title="Data Sudah di Verivikasi"><i class="bi bi-check-circle-fill"></i></button>
                    @endif
                </td>
                <td class="text-center">
                    @if (empty($getdata->skjabatan))
                    <p>Data Tidak Ada</p>
                    @else
                        <span data-bs-toggle="modal" data-bs-target="#staticBackdrop5">
                            <button type="button" class="btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Lihat">
                                <i class="bi bi-search"></i>
                            </button>
                        </span>
                        <div class="modal fade"  id="staticBackdrop5" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable modal-xl">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Surat Keterangan Jabatan</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <iframe src="/upload/skjabatan/{{ $getdata->skjabatan }}" frameborder="0" width="800" height="600"></iframe>
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                            </div>
                        </div>
                        <span data-bs-toggle="modal" data-bs-target="#editskjabatan">
                            <button type="button" class="btn btn-info" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                <i class="bi bi-pencil-square text-light"></i>
                            </button>
                        </span>
                        <div class="modal fade"  id="editskjabatan" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable modal-xl">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5 text-center" id="staticBackdropLabel">EDIT SK JABATAN</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                        <iframe src="/upload/skjabatan/{{ $getdata->skjabatan }}" frameborder="0" width="200" height="200"></iframe>
                                        <form action="/update/skjabatan" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="id" value=" {{auth()->user()->id}} ">
                                            <input id="skpns" type="file" name="skjabatan">
                                            <input type="submit" name="submit" id="" value="Update" class="btn btn-success">
                                        </form>
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                            </div>
                        </div>
                        <a href="/delete" class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Hapus"><i class="bi bi-trash"></i></a>
                        @endif
                </td>
            </tr>

            {{-- sksehatdokter --}}
            <tr>
                <td class="position-relative">
                    <b class="position-absolute top-50 start-50 translate-middle">7</b>
                </td>
                <td class="position-relative">
                    <b class="position-absolute top-50 start-2 translate-middle-y">Surat Keterangan Sehat dari Dokter:</b>
                </td>
                <td class="text-center">
                    @if (empty($getdata->sksehat))
                    <input id="ktp" type="file" name="ktp">
                    @else
                    <button type="button" class="btn btn-sm btn-success" disabled>Data sudah Ter Upload</button>
                    @endif
                </td>
                <td class="text-center">
                    @if ($verif->s_sksehat == '0')
                    <button type="button" class="btn btn-sm btn-danger" data-bs-toogle="tooltip" data-bs-placement="top" title="Data Belum di Verivikasi"><i class="bi bi-x-circle-fill"></i></button>
                    @elseif ($verif->s_sksehat == '1')
                    <button type="button" class="btn btn-sm btn-success" data-bs-toogle="tooltip" data-bs-placement="top" title="Data Sudah di Verivikasi"><i class="bi bi-check-circle-fill"></i></button>
                    @endif
                </td>
                <td class="text-center">
                    @if (empty($getdata->sksehat))
                    <p>Data Tidak Ada</p>
                    @else
                        <span data-bs-toggle="modal" data-bs-target="#staticBackdrop6">
                            <button type="button" class="btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Lihat">
                                <i class="bi bi-search"></i>
                            </button>
                        </span>
                        <div class="modal fade"  id="staticBackdrop6" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable modal-xl">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Surat Keterangan Sehat Dokter</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <iframe src="/upload/sksehat/{{ $getdata->sksehat }}" frameborder="0" width="800" height="600"></iframe>
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                            </div>
                        </div>
                        <span data-bs-toggle="modal" data-bs-target="#editsksehat">
                            <button type="button" class="btn btn-info" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                <i class="bi bi-pencil-square text-light"></i>
                            </button>
                        </span>
                        <div class="modal fade"  id="editsksehat" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable modal-xl">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5 text-center" id="staticBackdropLabel">EDIT SK JABATAN</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                        <iframe src="/upload/sksehat/{{ $getdata->sksehat }}" frameborder="0" width="200" height="200"></iframe>
                                        <form action="/update/sksehat" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="id" value=" {{auth()->user()->id}} ">
                                            <input id="skpns" type="file" name="sksehat">
                                            <input type="submit" name="submit" id="" value="Update" class="btn btn-success">
                                        </form>
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                            </div>
                        </div>
                        <a href="/delete" class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Hapus"><i class="bi bi-trash"></i></a>
                        @endif
                </td>
            </tr>

            {{-- suratpernyataan --}}
            <tr>
                <td class="position-relative">
                    <b class="position-absolute top-50 start-50 translate-middle">8</b>
                </td>
                <td class="position-relative">
                    <b class="position-absolute top-50 start-2 translate-middle-y">Surat Pernyataan Bersedia:</b>
                </td>
                <td class="text-center">
                    @if (empty($getdata->suratpernyataan))
                    <input id="ktp" type="file" name="ktp">
                    @else
                    <button type="button" class="btn btn-sm btn-success" disabled>Data sudah Ter Upload</button>
                    @endif
                </td>
                <td class="text-center">
                    @if ($verif->s_suratpernyataan == '0')
                    <button type="button" class="btn btn-sm btn-danger" data-bs-toogle="tooltip" data-bs-placement="top" title="Data Belum di Verivikasi"><i class="bi bi-x-circle-fill"></i></button>
                    @elseif ($verif->s_suratpernyataan == '1')
                    <button type="button" class="btn btn-sm btn-success" data-bs-toogle="tooltip" data-bs-placement="top" title="Data Sudah di Verivikasi"><i class="bi bi-check-circle-fill"></i></button>
                    @endif
                </td>
                <td class="text-center">
                    @if (empty($getdata->suratpernyataan))
                    <p>Data Tidak Ada</p>
                    @else
                        <span data-bs-toggle="modal" data-bs-target="#staticBackdrop7">
                            <button type="button" class="btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Lihat">
                                <i class="bi bi-search"></i>
                            </button>
                        </span>
                        <div class="modal fade"  id="staticBackdrop7" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable modal-xl">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Surat Pernyataan</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <iframe src="/upload/suratpernyataan/{{ $getdata->suratpernyataan }}" frameborder="0" width="800" height="600"></iframe>
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                            </div>
                        </div>
                        <span data-bs-toggle="modal" data-bs-target="#editsuratpernyataan">
                            <button type="button" class="btn btn-info" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                <i class="bi bi-pencil-square text-light"></i>
                            </button>
                        </span>
                        <div class="modal fade"  id="editsuratpernyataan" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable modal-xl">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5 text-center" id="staticBackdropLabel">EDIT SK JABATAN</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                        <iframe src="/upload/sksuratpernyataan/{{ $getdata->skjabatan }}" frameborder="0" width="200" height="200"></iframe>
                                        <form action="/update/suratpernyataan" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="id" value=" {{auth()->user()->id}} ">
                                            <input id="skpns" type="file" name="suratpernyataan">
                                            <input type="submit" name="submit" id="" value="Update" class="btn btn-success">
                                        </form>
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                            </div>
                        </div>
                        <a href="/delete" class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Hapus"><i class="bi bi-trash"></i></a>
                        @endif
                </td>
            </tr>

            {{-- Surat --}}
            {{-- surat disiplin --}}
            <tr>
                <td>
                </td>
                <td class="position-relative">
                    <b class="position-absolute top-50 start-2 translate-middle-y">9.A Surat Disiplin</b>
                </td>
                <td class="text-center">
                    @if (empty($getdata->disiplin))
                    <input id="ktp" type="file" name="ktp">
                    @else
                    <button type="button" class="btn btn-sm btn-success" disabled>Data sudah Ter Upload</button>
                    @endif
                </td>
                <td class="text-center">
                    @if ($verif->s_disiplin == '0')
                    <button type="button" class="btn btn-sm btn-danger" data-bs-toogle="tooltip" data-bs-placement="top" title="Data Belum di Verivikasi"><i class="bi bi-x-circle-fill"></i></button>
                    @elseif ($verif->s_disiplin == '1')
                    <button type="button" class="btn btn-sm btn-success" data-bs-toogle="tooltip" data-bs-placement="top" title="Data Sudah di Verivikasi"><i class="bi bi-check-circle-fill"></i></button>
                    @endif
                </td>
                <td class="text-center">
                    @if (empty($getdata->disiplin))
                    <p>Data Tidak Ada</p>
                    @else
                        <span data-bs-toggle="modal" data-bs-target="#staticBackdrop8">
                            <button type="button" class="btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Lihat">
                                <i class="bi bi-search"></i>
                            </button>
                        </span>
                        <div class="modal fade"  id="staticBackdrop8" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable modal-xl">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Surat Disiplin</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <iframe src="/upload/disiplin/{{ $getdata->disiplin }}" frameborder="0" width="800" height="600"></iframe>
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                            </div>
                        </div>
                        <span data-bs-toggle="modal" data-bs-target="#editdisiplin">
                            <button type="button" class="btn btn-info" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                <i class="bi bi-pencil-square text-light"></i>
                            </button>
                        </span>
                        <div class="modal fade"  id="editdisiplin" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable modal-xl">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5 text-center" id="staticBackdropLabel">EDIT SK JABATAN</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                        <iframe src="/upload/disiplin{{ $getdata->skjabatan }}" frameborder="0" width="200" height="200"></iframe>
                                        <form action="/update/disiplin" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="id" value=" {{auth()->user()->id}} ">
                                            <input id="skpns" type="file" name="disiplin">
                                            <input type="submit" name="submit" id="" value="Update" class="btn btn-success">
                                        </form>
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                            </div>
                        </div>
                        <a href="/delete" class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Hapus"><i class="bi bi-trash"></i></a>
                        @endif
                </td>
            </tr>

            {{-- surat belajar --}}
            <tr>
                <td>
                </td>
                <td class="position-relative">
                    <b class="position-absolute top-50 start-2 translate-middle-y">9.B Surat Belajar</b>
                </td>
                <td class="text-center">
                    @if (empty($getdata->belajar))
                    <input id="ktp" type="file" name="ktp">
                    @else
                    <button type="button" class="btn btn-sm btn-success" disabled>Data sudah Ter Upload</button>
                    @endif
                </td>
                <td class="text-center">
                    @if ($verif->s_belajar == '0')
                    <button type="button" class="btn btn-sm btn-danger" data-bs-toogle="tooltip" data-bs-placement="top" title="Data Belum di Verivikasi"><i class="bi bi-x-circle-fill"></i></button>
                    @elseif ($verif->s_belajar == '1')
                    <button type="button" class="btn btn-sm btn-success" data-bs-toogle="tooltip" data-bs-placement="top" title="Data Sudah di Verivikasi"><i class="bi bi-check-circle-fill"></i></button>
                    @endif
                </td>
                <td class="text-center">
                    @if (empty($getdata->belajar))
                    <p>Data Tidak Ada</p>
                    @else
                        <span data-bs-toggle="modal" data-bs-target="#staticBackdrop9">
                            <button type="button" class="btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Lihat">
                                <i class="bi bi-search"></i>
                            </button>
                        </span>
                        <div class="modal fade"  id="staticBackdrop9" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable modal-xl">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Surat Keterangan Belajar</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <iframe src="/upload/belajar/{{ $getdata->belajar }}" frameborder="0" width="800" height="600"></iframe>
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                            </div>
                        </div>
                        <span data-bs-toggle="modal" data-bs-target="#editbelajar">
                            <button type="button" class="btn btn-info" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                <i class="bi bi-pencil-square text-light"></i>
                            </button>
                        </span>
                        <div class="modal fade"  id="editbelajar" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable modal-xl">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5 text-center" id="staticBackdropLabel">EDIT SK JABATAN</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                        <iframe src="/upload/belajar/{{ $getdata->belajar }}" frameborder="0" width="200" height="200"></iframe>
                                        <form action="/update/belajar" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="id" value=" {{auth()->user()->id}} ">
                                            <input id="skpns" type="file" name="belajar">
                                            <input type="submit" name="submit" id="" value="Update" class="btn btn-success">
                                        </form>
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                            </div>
                        </div>
                        <a href="/delete" class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Hapus"><i class="bi bi-trash"></i></a>
                        @endif
                </td>
            </tr>

            {{-- surat cuti --}}
            <tr>
                <td>
                </td>
                <td class="position-relative">
                    <b class="position-absolute top-50 start-2 translate-middle-y">9.C Surat Cuti</b>
                </td>
                <td class="text-center">
                    @if (empty($getdata->cuti))
                    <input id="ktp" type="file" name="ktp">
                    @else
                    <button type="button" class="btn btn-sm btn-success" disabled>Data sudah Ter Upload</button>
                    @endif
                </td>
                <td class="text-center">
                    @if ($verif->s_cuti == '0')
                    <button type="button" class="btn btn-sm btn-danger" data-bs-toogle="tooltip" data-bs-placement="top" title="Data Belum di Verivikasi"><i class="bi bi-x-circle-fill"></i></button>
                    @elseif ($verif->s_cuti == '1')
                    <button type="button" class="btn btn-sm btn-success" data-bs-toogle="tooltip" data-bs-placement="top" title="Data Sudah di Verivikasi"><i class="bi bi-check-circle-fill"></i></button>
                    @endif
                </td>
                <td class="text-center">
                    @if (empty($getdata->cuti))
                    <p>Data Tidak Ada</p>
                    @else
                        <span data-bs-toggle="modal" data-bs-target="#staticBackdrop10">
                            <button type="button" class="btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Lihat">
                                <i class="bi bi-search"></i>
                            </button>
                        </span>
                        <div class="modal fade"  id="staticBackdrop10" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable modal-xl">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Surat Cuti</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <iframe src="/upload/cuti/{{ $getdata->cuti }}" frameborder="0" width="800" height="600"></iframe>
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                            </div>
                        </div>
                        <span data-bs-toggle="modal" data-bs-target="#editcuti">
                            <button type="button" class="btn btn-info" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                <i class="bi bi-pencil-square text-light"></i>
                            </button>
                        </span>
                        <div class="modal fade"  id="editcuti" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable modal-xl">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5 text-center" id="staticBackdropLabel">EDIT SK JABATAN</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                        <iframe src="/upload/cuti/{{ $getdata->cuti }}" frameborder="0" width="200" height="200"></iframe>
                                        <form action="/update/cuti" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="id" value=" {{auth()->user()->id}} ">
                                            <input id="skpns" type="file" name="cuti">
                                            <input type="submit" name="submit" id="" value="Update" class="btn btn-success">
                                        </form>
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                            </div>
                        </div>
                        <a href="/delete" class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Hapus"><i class="bi bi-trash"></i></a>
                        @endif
                </td>
            </tr>
            {{-- surat kewirausahaan --}}
            <tr>
                <td>
                </td>
                <td class="position-relative">
                    <b class="position-absolute top-50 start-2 translate-middle-y">9.D Surat Kewirausahaan</b>
                </td>
                <td class="text-center">
                    @if (empty($getdata->wirausaha))
                    <input id="ktp" type="file" name="ktp">
                    @else
                    <button type="button" class="btn btn-sm btn-success" disabled>Data sudah Ter Upload</button>
                    @endif
                </td>
                <td class="text-center">
                    @if ($verif->s_wirausaha == '0')
                    <button type="button" class="btn btn-sm btn-danger" data-bs-toogle="tooltip" data-bs-placement="top" title="Data Belum di Verivikasi"><i class="bi bi-x-circle-fill"></i></button>
                    @elseif ($verif->s_wirausaha == '1')
                    <button type="button" class="btn btn-sm btn-success" data-bs-toogle="tooltip" data-bs-placement="top" title="Data Sudah di Verivikasi"><i class="bi bi-check-circle-fill"></i></button>
                    @endif
                </td>
                <td class="text-center">
                    @if (empty($getdata->wirausaha))
                    <p>Data Tidak Ada</p>
                    @else
                        <span data-bs-toggle="modal" data-bs-target="#staticBackdrop11">
                            <button type="button" class="btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Lihat">
                                <i class="bi bi-search"></i>
                            </button>
                        </span>
                        <div class="modal fade"  id="staticBackdrop11" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable modal-xl">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Surat Kewirausahaan</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <iframe src="/upload/wirausaha/{{ $getdata->wirausaha }}" frameborder="0" width="800" height="600"></iframe>
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                            </div>
                        </div>
                        <span data-bs-toggle="modal" data-bs-target="#editwirausaha">
                            <button type="button" class="btn btn-info" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                <i class="bi bi-pencil-square text-light"></i>
                            </button>
                        </span>
                        <div class="modal fade"  id="editwirausaha" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable modal-xl">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5 text-center" id="staticBackdropLabel">EDIT SK JABATAN</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                        <iframe src="/upload/wirausaha/{{ $getdata->wirausaha }}" frameborder="0" width="200" height="200"></iframe>
                                        <form action="/update/wirausaha" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="id" value=" {{auth()->user()->id}} ">
                                            <input id="skpns" type="file" name="skpns">
                                            <input type="submit" name="submit" id="" value="Update" class="btn btn-success">
                                        </form>
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                            </div>
                        </div>
                        <a href="/delete" class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Hapus"><i class="bi bi-trash"></i></a>
                        @endif
                </td>
            </tr>

            {{-- surat nilai --}}
            <tr>
                <td class="position-relative">
                    <b class="position-absolute top-50 start-50 translate-middle">10</b>
                </td>
                <td class="position-relative">
                    <b class="position-absolute top-50 start-2 translate-middle-y">Surat Nilai Prestasi:</b>
                </td>
                <td class="text-center">
                    @if (empty($getdata->nilai))
                    <input id="ktp" type="file" name="ktp">
                    @else
                    <button type="button" class="btn btn-sm btn-success" disabled>Data sudah Ter Upload</button>
                    @endif
                </td>
                <td class="text-center">
                    @if ($verif->s_nilai == '0')
                    <button type="button" class="btn btn-sm btn-danger" data-bs-toogle="tooltip" data-bs-placement="top" title="Data Belum di Verivikasi"><i class="bi bi-x-circle-fill"></i></button>
                    @elseif ($verif->s_nilai == '1')
                    <button type="button" class="btn btn-sm btn-success" data-bs-toogle="tooltip" data-bs-placement="top" title="Data Sudah di Verivikasi"><i class="bi bi-check-circle-fill"></i></button>
                    @endif
                </td>
                <td class="text-center">
                    @if (empty($getdata->nilai))
                    <p>Data Tidak Ada</p>
                    @else
                        <span data-bs-toggle="modal" data-bs-target="#staticBackdrop12">
                            <button type="button" class="btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Lihat">
                                <i class="bi bi-search"></i>
                            </button>
                        </span>
                        <div class="modal fade"  id="staticBackdrop12" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable modal-xl">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Surat Keterangan Nilai Prestasi</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <iframe src="/upload/nilai/{{ $getdata->nilai }}" frameborder="0" width="800" height="600"></iframe>
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                            </div>
                        </div>
                        <span data-bs-toggle="modal" data-bs-target="#editnilai">
                            <button type="button" class="btn btn-info" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                <i class="bi bi-pencil-square text-light"></i>
                            </button>
                        </span>
                        <div class="modal fade"  id="editnilai" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable modal-xl">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5 text-center" id="staticBackdropLabel">EDIT SK JABATAN</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                        <iframe src="/upload/nilai/{{ $getdata->nilai }}" frameborder="0" width="200" height="200"></iframe>
                                        <form action="/update/nilai" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="id" value=" {{auth()->user()->id}} ">
                                            <input id="skpns" type="file" name="nilai">
                                            <input type="submit" name="submit" id="" value="Update" class="btn btn-success">
                                        </form>
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                            </div>
                        </div>
                        <a href="/delete" class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Hapus"><i class="bi bi-trash"></i></a>
                        @endif
                </td>
            </tr>

            {{-- biografi --}}
            <tr>
                <td class="position-relative">
                    <b class="position-absolute top-50 start-50 translate-middle">11</b>
                </td>
                <td class="position-relative">
                    <b class="position-absolute top-50 start-2 translate-middle-y">Daftar Biodata Diri:</b>
                </td>
                <td class="text-center">
                    @if (empty($getdata->biografi))
                    <input id="ktp" type="file" name="ktp">
                    @else
                    <button type="button" class="btn btn-sm btn-success" disabled>Data sudah Ter Upload</button>
                    @endif
                </td>
                <td class="text-center">
                    @if ($verif->s_biografi == '0')
                    <button type="button" class="btn btn-sm btn-danger" data-bs-toogle="tooltip" data-bs-placement="top" title="Data Belum di Verivikasi"><i class="bi bi-x-circle-fill"></i></button>
                    @elseif ($verif->s_biografi == '1')
                    <button type="button" class="btn btn-sm btn-success" data-bs-toogle="tooltip" data-bs-placement="top" title="Data Sudah di Verivikasi"><i class="bi bi-check-circle-fill"></i></button>
                    @endif
                </td>
                <td class="text-center">
                    @if (empty($getdata->biografi))
                    <p>Data Tidak Ada</p>
                    @else
                        <span data-bs-toggle="modal" data-bs-target="#staticBackdrop13">
                            <button type="button" class="btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Lihat">
                                <i class="bi bi-search"></i>
                            </button>
                        </span>
                        <div class="modal fade"  id="staticBackdrop13" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable modal-xl">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Biografi/Data Diri</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <iframe src="/upload/biografi/{{ $getdata->biografi }}" frameborder="0" width="800" height="600"></iframe>
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                            </div>
                        </div>
                        <span data-bs-toggle="modal" data-bs-target="#editbiografi">
                            <button type="button" class="btn btn-info" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                <i class="bi bi-pencil-square text-light"></i>
                            </button>
                        </span>
                        <div class="modal fade"  id="editbiografi" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable modal-xl">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5 text-center" id="staticBackdropLabel">EDIT SK JABATAN</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                        <iframe src="/upload/biografi/{{ $getdata->biografi }}" frameborder="0" width="200" height="200"></iframe>
                                        <form action="/update/biografi" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="id" value=" {{auth()->user()->id}} ">
                                            <input id="skpns" type="file" name="biografi">
                                            <input type="submit" name="submit" id="" value="Update" class="btn btn-success">
                                        </form>
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                            </div>
                        </div>
                        <a href="/delete" class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Hapus"><i class="bi bi-trash"></i></a>
                        @endif
                </td>
            </tr>

            {{-- pemetaan --}}
            <tr>
                <td class="position-relative">
                    <b class="position-absolute top-50 start-50 translate-middle">12</b>
                </td>
                <td class="position-relative">
                    <b class="top-50">Surat Keterangan Pemetaan</b>
                </td>
                <td class="text-center">
                    @if (empty($getdata->peta))
                    <input id="ktp" type="file" name="ktp">
                    @else
                    <button type="button" class="btn btn-sm btn-success" disabled>Data sudah Ter Upload</button>
                    @endif
                </td>
                <td class="text-center">
                    @if ($verif->s_peta == '0')
                    <button type="button" class="btn btn-sm btn-danger" data-bs-toogle="tooltip" data-bs-placement="top" title="Data Belum di Verivikasi"><i class="bi bi-x-circle-fill"></i></button>
                    @elseif ($verif->s_peta == '1')
                    <button type="button" class="btn btn-sm btn-success" data-bs-toogle="tooltip" data-bs-placement="top" title="Data Sudah di Verivikasi"><i class="bi bi-check-circle-fill"></i></button>
                    @endif
                </td>
                <td class="text-center">
                    @if (empty($getdata->peta))
                    <p>Data Tidak Ada</p>
                    @else
                        <span data-bs-toggle="modal" data-bs-target="#staticBackdrop14">
                            <button type="button" class="btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Lihat">
                                <i class="bi bi-search"></i>
                            </button>
                        </span>
                        <div class="modal fade"  id="staticBackdrop14" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable modal-xl">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Surat Keterangan Pemetaan</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <iframe src="/upload/peta/{{ $getdata->peta }}" frameborder="0" width="800" height="600"></iframe>
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                            </div>
                        </div>
                        <span data-bs-toggle="modal" data-bs-target="#editpeta">
                            <button type="button" class="btn btn-info" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                <i class="bi bi-pencil-square text-light"></i>
                            </button>
                        </span>
                        <div class="modal fade"  id="editpeta" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable modal-xl">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5 text-center" id="staticBackdropLabel">EDIT SK JABATAN</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                        <iframe src="/upload/peta/{{ $getdata->peta }}" frameborder="0" width="200" height="200"></iframe>
                                        <form action="/update/peta" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="id" value=" {{auth()->user()->id}} ">
                                            <input id="skpns" type="file" name="skpns">
                                            <input type="submit" name="submit" id="" value="Update" class="btn btn-success">
                                        </form>
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                            </div>
                        </div>
                        <a href="/delete" class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Hapus"><i class="bi bi-trash"></i></a>
                        @endif
                </td>
            </tr>

        </tbody>
            @endforeach
        </div>
    </table>
