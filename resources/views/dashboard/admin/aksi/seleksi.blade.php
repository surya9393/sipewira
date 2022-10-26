@extends('dashboard.admin.layouts.main')
@section('content')
    <div class="row mt-5">
        <div class="container">
            <h1 class="text-center">Data Diri</h1>
            <hr color="black">
            <div class="row mt-5">
                <div class="container col-lg-8">
                    <div class="card">
                        <h5 class="card-header">Profile</h5>
                        <div class="card-body">
                            <div class="text-center">
                                @foreach ($author as $user)
                                <figure class="figure">
                                    <img src="{{ $user->photo }}" class="figure-img img-fluid rounded" width="110" alt="{{ $user->name }}">
                                    <figcaption class="figure-caption text-right">{{ $user->name }}</figcaption>
                                </figure>
                            </div>
                              <table class="table table-stripped">
                                <tr>
                                    <td>Nama Asli</td>
                                    <td>:</td>
                                    <td>{{ $user->name }}</td>
                                </tr>
                                <tr>
                                    <td>Username</td>
                                    <td>:</td>
                                    <td>{{ $user->username }}</td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>:</td>
                                    <td>{{ $user->email }}</td>
                                </tr>
                              </table>
                          <p class="card-text"></p>
                          <div class="text-center">
                            <a href="/hasil" class="btn btn-primary">Seleksi</a>
                            <a href="/update/" class="btn btn-warning">Edit Profile</a>
                          </div>
                          @endforeach
                        </div>
                      </div>
                </div>
            </div>
            <h1 class="text-center mt-5">Daftar Persyaratan</h1>
            <hr color="black">
            @foreach ($upload as $data)
            <table class="table mt-4 table-bordered">
                <thead class="text-center">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Upload</th>
                    <th scope="col">Status</th>
                    <th scope="col">Aksi</th>
                </tr>
                </thead>
                <tbody class="text-start">

                    <tr>
                        <th scope="row">1</th>
                        <td>
                            KTP
                        </td>
                        <td class="text-center">
                                @if ($verif->s_ktp == '0')
                                <a href="/verifikasi/pendaftar/" class="btn btn-danger">Belum Verifikasi</a>
                                @elseif ($verif->s_ktp == '1')
                                <a href="/verifikasi/pendaftar/" class="btn btn-success">Sudah Verifikasi</a>
                                @endif
                        </td>
                        <td class="text-center">
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
                                        <iframe src="/ktp/{{ $data->ktp }}" frameborder="0" width="800" height="600"></iframe>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            <a href="/edit/upload" class="btn btn-warning" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="bi bi-pencil-square"></i></a>
                            <a href="/delete" class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Hapus"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>NPWP</td>
                        <td class="text-center">
                                @if ($verif->s_npwp == '0')
                                <a href="/verifikasi/pendaftar/" class="btn btn-danger">Belum Verifikasi</a>
                                @elseif ($verif->s_npwp == '1')
                                <a href="/verifikasi/pendaftar/" class="btn btn-success">Sudah Verifikasi</a>
                                @endif
                        </td>
                        <td class="text-center">
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
                                        <iframe src="/ktp/{{ $data->npwp }}" frameborder="0" width="800" height="600"></iframe>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            <a href="/edit/upload" class="btn btn-warning" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="bi bi-pencil-square"></i></a>
                            <a href="/delete" class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Hapus"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>SK PNS</td>
                        <td class="text-center">
                            @if ($verif->s_skpns == '0')
                                <a href="/verifikasi/pendaftar/" class="btn btn-danger">Belum Verifikasi</a>
                                @elseif ($verif->s_skpns == '1')
                                <a href="/verifikasi/pendaftar/" class="btn btn-success">Sudah Verifikasi</a>
                                @endif
                        </td>
                        <td class="text-center">
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
                                        <iframe src="/ktp/{{ $data->skpns }}" frameborder="0" width="800" height="600"></iframe>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            <a href="/edit/upload" class="btn btn-warning" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="bi bi-pencil-square"></i></a>
                            <a href="/delete" class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Hapus"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>SK Pangkat</td>
                        <td class="text-center">
                                @if ($verif->s_skpangkat == '0')
                                <a href="/verifikasi/pendaftar/" class="btn btn-danger">Belum Verifikasi</a>
                                @elseif ($verif->s_skpangkat == '1')
                                <a href="/verifikasi/pendaftar/" class="btn btn-success">Sudah Verifikasi</a>
                                @endif
                        </td>
                        <td class="text-center">
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
                                        <iframe src="/ktp/{{ $data->skpangkat }}" frameborder="0" width="800" height="600"></iframe>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            <a href="/edit/upload" class="btn btn-warning" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="bi bi-pencil-square"></i></a>
                            <a href="/delete" class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Hapus"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">5</th>
                        <td>SK Ijazah</td>
                        <td class="text-center">
                            @if ($verif->s_skijazah == '0')
                            <a href="/verifikasi/pendaftar/" class="btn btn-danger">Belum Verifikasi</a>
                            @elseif ($verif->s_skijazah == '1')
                            <a href="/verifikasi/pendaftar/" class="btn btn-success">Sudah Verifikasi</a>
                            @endif
                        </td>
                        <td class="text-center">
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
                                        <iframe src="/ktp/{{ $data->skijazah }}" frameborder="0" width="800" height="600"></iframe>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            <a href="/edit/upload" class="btn btn-warning" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="bi bi-pencil-square"></i></a>
                            <a href="/delete" class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Hapus"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">6</th>
                        <td>SK Jabatan</td>
                        <td class="text-center">
                            @if ($verif->s_skjabatan == '0')
                            <a href="/verifikasi/pendaftar/" class="btn btn-danger">Belum Verifikasi</a>
                            @elseif ($verif->s_skjabatan == '1')
                            <a href="/verifikasi/pendaftar/" class="btn btn-success">Sudah Verifikasi</a>
                            @endif
                        </td>
                        <td class="text-center">
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
                                        <iframe src="/ktp/{{ $data->skjabatan }}" frameborder="0" width="800" height="600"></iframe>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            <a href="/edit/upload" class="btn btn-warning" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="bi bi-pencil-square"></i></a>
                            <a href="/delete" class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Hapus"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">7</th>
                        <td>SK Sehat</td>
                        <td class="text-center">
                            @if ($verif->s_sksehat == '0')
                            <a href="/verifikasi/pendaftar/" class="btn btn-danger">Belum Verifikasi</a>
                            @elseif ($verif->s_sksehat == '1')
                            <a href="/verifikasi/pendaftar/" class="btn btn-success">Sudah Verifikasi</a>
                            @endif
                        </td>
                        <td class="text-center">
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
                                        <iframe src="/ktp/{{ $data->sksehat }}" frameborder="0" width="800" height="600"></iframe>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            <a href="/edit/upload" class="btn btn-warning" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="bi bi-pencil-square"></i></a>
                            <a href="/delete" class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Hapus"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">8</th>
                        <td>Surat Pernyataan</td>
                        <td class="text-center">
                            @if ($verif->s_suratpernyataan == '0')
                            <a href="/verifikasi/pendaftar/" class="btn btn-danger">Belum Verifikasi</a>
                            @elseif ($verif->s_suratpernyataan == '1')
                            <a href="/verifikasi/pendaftar/" class="btn btn-success">Sudah Verifikasi</a>
                            @endif
                        </td>
                        <td class="text-center">
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
                                        <iframe src="/ktp/{{ $data->suratpernyataan }}" frameborder="0" width="800" height="600"></iframe>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            <a href="/edit/upload" class="btn btn-warning" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="bi bi-pencil-square"></i></a>
                            <a href="/delete" class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Hapus"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">9A</th>
                        <td>Disiplin</td>
                        <td class="text-center">
                            @if ($verif->s_disiplin == '0')
                            <a href="/verifikasi/pendaftar/" class="btn btn-danger">Belum Verifikasi</a>
                            @elseif ($verif->s_disiplin == '1')
                            <a href="/verifikasi/pendaftar/" class="btn btn-success">Sudah Verifikasi</a>
                            @endif
                        </td>
                        <td class="text-center">
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
                                        <iframe src="/ktp/{{ $data->disiplin }}" frameborder="0" width="800" height="600"></iframe>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            <a href="/edit/upload" class="btn btn-warning" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="bi bi-pencil-square"></i></a>
                            <a href="/delete" class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Hapus"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">9B</th>
                        <td>Belajar</td>
                        <td class="text-center">
                            @if ($verif->s_belajar == '0')
                            <a href="/verifikasi/pendaftar/" class="btn btn-danger">Belum Verifikasi</a>
                            @elseif ($verif->s_belajar == '1')
                            <a href="/verifikasi/pendaftar/" class="btn btn-success">Sudah Verifikasi</a>
                            @endif
                        </td>
                        <td class="text-center">
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
                                        <iframe src="/ktp/{{ $data->belajar }}" frameborder="0" width="800" height="600"></iframe>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            <a href="/edit/upload" class="btn btn-warning" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="bi bi-pencil-square"></i></a>
                            <a href="/delete" class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Hapus"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">9C</th>
                        <td>Cuti</td>
                        <td class="text-center">
                            @if ($verif->s_cuti == '0')
                            <a href="/verifikasi/pendaftar/" class="btn btn-danger">Belum Verifikasi</a>
                            @elseif ($verif->s_cuti == '1')
                            <a href="/verifikasi/pendaftar/" class="btn btn-success">Sudah Verifikasi</a>
                            @endif
                        </td>
                        <td class="text-center">
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
                                        <iframe src="/ktp/{{ $data->cuti }}" frameborder="0" width="800" height="600"></iframe>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            <a href="/edit/upload" class="btn btn-warning" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="bi bi-pencil-square"></i></a>
                            <a href="/delete" class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Hapus"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">9D</th>
                        <td>Wirausaha</td>
                        <td class="text-center">
                            @if ($verif->s_wirausaha == '0')
                            <a href="/verifikasi/pendaftar/" class="btn btn-danger">Belum Verifikasi</a>
                            @elseif ($verif->s_wirausaha == '1')
                            <a href="/verifikasi/pendaftar/" class="btn btn-success">Sudah Verifikasi</a>
                            @endif
                        </td>
                        <td class="text-center">
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
                                        <iframe src="/ktp/{{ $data->wirausaha }}" frameborder="0" width="800" height="600"></iframe>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            <a href="/edit/upload" class="btn btn-warning" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="bi bi-pencil-square"></i></a>
                            <a href="/delete" class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Hapus"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">10</th>
                        <td>Nilai</td>
                        <td class="text-center">
                            @if ($verif->s_nilai == '0')
                            <a href="/verifikasi/pendaftar/" class="btn btn-danger">Belum Verifikasi</a>
                            @elseif ($verif->s_nilai == '1')
                            <a href="/verifikasi/pendaftar/" class="btn btn-success">Sudah Verifikasi</a>
                            @endif
                        </td>
                        <td class="text-center">
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
                                        <iframe src="/ktp/{{ $data->nilai }}" frameborder="0" width="800" height="600"></iframe>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            <a href="/edit/upload" class="btn btn-warning" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="bi bi-pencil-square"></i></a>
                            <a href="/delete" class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Hapus"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">11</th>
                        <td>Biografi</td>
                        <td class="text-center">
                            @if ($verif->s_biografi == '0')
                            <a href="/verifikasi/pendaftar/" class="btn btn-danger">Belum Verifikasi</a>
                            @elseif ($verif->s_biografi == '1')
                            <a href="/verifikasi/pendaftar/" class="btn btn-success">Sudah Verifikasi</a>
                            @endif
                        </td>
                        <td class="text-center">
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
                                        <iframe src="/ktp/{{ $data->biografi }}" frameborder="0" width="800" height="600"></iframe>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            <a href="/edit/upload" class="btn btn-warning" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="bi bi-pencil-square"></i></a>
                            <a href="/delete" class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Hapus"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">12</th>
                        <td>Pemetaan</td>
                        <td class="text-center">
                            @if ($verif->s_peta == '0')
                            <a href="/verifikasi/pendaftar/" class="btn btn-danger">Belum Verifikasi</a>
                            @elseif ($verif->s_peta == '1')
                            <a href="/verifikasi/pendaftar/" class="btn btn-success">Sudah Verifikasi</a>
                            @endif
                        </td>
                        <td class="text-center">
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
                                        <iframe src="/ktp/{{ $data->peta }}" frameborder="0" width="800" height="600"></iframe>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            <a href="/edit/upload" class="btn btn-warning" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="bi bi-pencil-square"></i></a>
                            <a href="/delete" class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Hapus"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
            @endforeach
        </div>
    </div>
    <script>const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
        const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))</script>
@endsection
