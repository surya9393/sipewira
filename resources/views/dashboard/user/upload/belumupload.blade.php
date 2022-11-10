<style>
    .bs-tooltip-auto[x-placement^=bottom] .arrow::before,
    .bs-tooltip-bottom .arrow::before {
      border-bottom-color: #f00;
      /* Red */
    }
  </style>
<div class="alert alert-danger alert-dismissible fade show m-5 text-center" role="alert">
    <strong>Data Persyaratan Anda belum ada!</strong> Silahkan Upload data persyaratan terlebih dahulu
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
<form action="/dashboard/upload/proses" method="POST" enctype="multipart/form-data">
    @csrf
    <table class=" table table-bordered m-5">
        <div>
            <tr class="text-center">
                <th>No</th>
                <th>Nama</th>
                <th>Upload</th>
            </tr>
        </div>
        <div class="form-group">
            <tr>
                <td class="position-relative">
                    <b class="position-absolute top-50 start-50 translate-middle">1</b>
                </td>
                <td class="position-relative">
                    <b class="position-absolute top-50 start-2 translate-middle-y">KTP:</b>
                </td>
                    <input type="hidden" name="uid" value=" {{auth()->user()->id}} ">
                <td>
                    <div class="input-group">
                        <input type="file" class="form-control" id="ktp" name="ktp" value="{{ old('ktp') }}">
                        <label class="input-group-text" for="ktp"><a href="#" data-toggle="tooltip" title="Upload KTP dengan Format PDF"><i class="bi bi-info-circle-fill text-danger"></i></a></label>
                    </div>
                </td>
            </tr>
        </div>
        <div class="form-group">
            <tr>
                <td class="position-relative">
                    <b class="position-absolute top-50 start-50 translate-middle">2</b>
                </td>
                <td class="position-relative">
                    <b class="position-absolute top-50 start-2 translate-middle-y">NPWP:</b>
                </td>
                <td>
                    <div class="input-group">
                        <input id="npwp" type="file" name="npwp" class="form-control">
                        <label class="input-group-text" for="npwp"><a href="#" data-toggle="tooltip" title="Upload NPWP dengan Format PDF"><i class="bi bi-info-circle-fill text-danger"></i></a></label>
                    </div>
                </td>
            </tr>
        </div>
        <div class="form-group">
            <tr>
                <td class="position-relative">
                    <b class="position-absolute top-50 start-50 translate-middle">3</b>
                </td>
                <td class="position-relative">
                    <b class="position-absolute top-50 start-2 translate-middle-y">SK Pengangkata PNS:</b>
                </td>
                <td>
                    <div class="input-group">
                        <input id="skpns" type="file" name="skpns" class="form-control">
                        <label class="input-group-text" for="skpns"><a href="#" data-toggle="tooltip" title="Upload Surat Keterangan Pengangkatan PNS dengan format PDF"><i class="bi bi-info-circle-fill text-danger text-danger"></i></a></label>
                    </div>
                </td>
            </tr>
        </div>

        <div class="form-group">
            <tr>
                <td class="position-relative">
                    <b class="position-absolute top-50 start-50 translate-middle">4</b>
                </td>
                <td class="position-relative">
                    <b class="position-absolute top-50 start-2 translate-middle-y">SK Pengkat Terakhir:</b>
                </td>
                <td>
                    <div class="input-group">
                        <input id="skpangkat" type="file" name="skpangkat" class="form-control">
                        <label class="input-group-text" for="skpangkat"><a href="#" data-toggle="tooltip" title="Upload Surat Keterangan Pangkat / Jabatan Terakhir dengan format PDF"><i class="bi bi-info-circle-fill text-danger"></i></a></label>
                    </div>
                </td>
            </tr>
        </div>

        <div class="form-group">
            <tr>
                <td class="position-relative">
                    <b class="position-absolute top-50 start-50 translate-middle">5</b>
                </td>
                <td class="position-relative">
                    <b class="position-absolute top-50 start-2 translate-middle-y">SK Ijazah Terakhir:</b>
                </td>
                <td>
                    <div class="input-group">
                        <input id="skijazah" type="file" name="skijazah" class="form-control">
                        <label class="input-group-text" for="skijazah"><a href="#" data-toggle="tooltip" title="Upload Surat Keterangan Ijazah terakhir dengan format PDF"><i class="bi bi-info-circle-fill text-danger"></i></a></label>
                    </div>
                </td>
            </tr>
        </div>

        <div class="form-group">
            <tr>
                <td class="position-relative">
                    <b class="position-absolute top-50 start-50 translate-middle">6</b>
                </td>
                <td class="position-relative">
                    <b class="position-absolute top-50 start-2 translate-middle-y">SK Penempatan / Jabatan Terakhir:</b>
                </td>
                <td>
                    <div class="input-group">
                        <input id="skjabatan" type="file" name="skjabatan" class="form-control">
                        <label class="input-group-text" for="skjabatan"><a href="#" data-toggle="tooltip" title="Upload Surat Keterangan Penempatan / Jabatan Terakhir dengan format PDF"><i class="bi bi-info-circle-fill text-danger"></i></a></label>
                    </div>
                </td>
            </tr>
        </div>

        <div class="form-group">
            <tr>
                <td class="position-relative">
                    <b class="position-absolute top-50 start-50 translate-middle">7</b>
                </td>
                <td class="position-relative">
                    <b class="position-absolute top-50 start-2 translate-middle-y">SK Sehat Dokter:</b>
                </td>
                <td>
                    <div class="input-group">
                        <input id="sksehat" type="file" name="sksehat" class="form-control">
                        <label class="input-group-text" for="sksehat"><a href="#" data-toggle="tooltip" title="Upload Surat Keterangan sehat jasmani, rohani dari Dokter dengan format PDF"><i class="bi bi-info-circle-fill text-danger"></i></a></label>
                    </div>
                </td>
            </tr>
        </div>

        <div class="form-group">
            <tr>
                <td class="position-relative">
                    <b class="position-absolute top-50 start-50 translate-middle">8</b>
                </td>
                <td class="position-relative">
                    <b class="position-absolute top-50 start-2 translate-middle-y">Surat Pernyataan:</b>
                </td>
                <td>
                    <div class="input-group">
                        <input id="suratpernyataan" type="file" name="suratpernyataan" class="form-control">
                        <label class="input-group-text" for="suratpernyataan"><a href="#" data-toggle="tooltip" title="Upload Surat Pernyataan Bersedia menempatkan dirinya sebagai Jabatan Fungsional dengan format PDF"><i class="bi bi-info-circle-fill text-danger"></i></a></label>
                    </div>
                </td>
            </tr>
        </div>

        <div class="form-group">
            <tr>
                <td class="position-relative">
                    <b class="position-absolute top-50 start-50 translate-middle">9</b>
                </td>
                <td class="position-relative">
                    <b class="position-absolute top-50 start-2 translate-middle-y">SK Dari Pimpinan Tinggi Madya/Pratama:</b>
                </td>
                <td></td>
                </td>
            </tr>
        </div>

        <div class="form-group">
            <tr>
                <td class="position-relative">
                    <b class="position-absolute top-50 start-50 translate-middle"></b>
                </td>
                <td class="position-relative">
                    <b class="position-absolute top-50 start-2 translate-middle-y">9.A SK Tidak Pernah dijatuhi Hukuman Disiplin Berat:</b>
                </td>
                <td>
                    <div class="input-group">
                        <input id="disiplin" type="file" name="disiplin" class="form-control">
                        <label class="input-group-text" for="disiplin"><a href="#" data-toggle="tooltip" title="Upload Surat Keterangan tidak pernah dijatuhi hukuman disiplin berat dengan format PDF"><i class="bi bi-info-circle-fill text-danger"></i></a></label>
                    </div>
                </td>
            </tr>
        </div>

        <div class="form-group">
            <tr>
                <td class="position-relative">
                    <b class="position-absolute top-50 start-50 translate-middle"></b>
                </td>
                <td class="position-relative">
                    <b class="position-absolute top-50 start-2 translate-middle-y">9.B Tidak sedang dalam tugas Belajar:</b>
                </td>
                <td>
                    <div class="input-group">
                        <input id="belajar" type="file" name="belajar" class="form-control">
                        <label class="input-group-text" for="belajar"><a href="#" data-toggle="tooltip" title="Upload Surat Keterangan bahwa tidak sedang dalam tugas belajar"><i class="bi bi-info-circle-fill text-danger"></i></a></label>
                    </div>
                </td>
            </tr>
        </div>

        <div class="form-group">
            <tr>
                <td class="position-relative">
                    <b class="position-absolute top-50 start-50 translate-middle"></b>
                </td>
                <td class="position-relative">
                    <b class="position-absolute top-50 start-2 translate-middle-y">9.C Tidak sedang dalam cuti diluar tanggungan Negara:</b>
                </td>
                <td>
                    <div class="input-group">
                        <input id="cuti" type="file" name="cuti" class="form-control">
                        <label class="input-group-text" for="cuti"><a href="#" data-toggle="tooltip" title="Upload Surat Keterangan Bahwa Tidak sedang dalam cuti diluar tanggungan Negara"><i class="bi bi-info-circle-fill text-danger"></i></a></label>
                    </div>
                </td>
            </tr>
        </div>

        <div class="form-group">
            <tr>
                <td class="position-relative">
                    <b class="position-absolute top-50 start-50 translate-middle"></b>
                </td>
                <td class="position-relative">
                    <b class="position-absolute top-50 start-2 translate-middle-y">9.D Pernah Melaksanakan Tugas Bidang Kewirausahaan</b>
                </td>
                <td>
                    <div class="input-group">
                        <input id="wirausaha" type="file" name="wirausaha" class="form-control">
                        <label class="input-group-text" for="wirausaha"><a href="#" data-toggle="tooltip" title="Upload Surat Keterangan Pernah Melaksanakan Tugas Bidang Kewirausahaan dengan format PDF"><i class="bi bi-info-circle-fill text-danger"></i></a></label>
                    </div>
                </td>
            </tr>
        </div>

        <div class="form-group">
            <tr>
                <td class="position-relative">
                    <b class="position-absolute top-50 start-50 translate-middle">10</b>
                </td>
                <td class="position-relative">
                    <b class="position-absolute top-50 start-2 translate-middle-y">Salinan Nilai Prestasi (2 Tahun Terakhir):</b>
                </td>
                <td>
                    <div class="input-group">
                        <input id="nilai" type="file" name="nilai" class="form-control">
                        <label class="input-group-text" for="nilai"><a href="#" data-toggle="tooltip" title="Upload Surat Salinan Nilai Prestasi (2 Tahun Terakhir)"><i class="bi bi-info-circle-fill text-danger"></i></a></label>
                    </div>
                </td>
            </tr>
        </div>

        <div class="form-group">
            <tr>
                <td class="position-relative">
                    <b class="position-absolute top-50 start-50 translate-middle">11</b>
                </td>
                <td class="position-relative">
                    <b class="position-absolute top-50 start-2 translate-middle-y">Daftar Riwayat Hidup:</b>
                </td>
                <td>
                    <div class="input-group">
                        <input id="biografi" type="file" name="biografi" class="form-control">
                        <label class="input-group-text" for="biografi"><a href="#" data-toggle="tooltip" title="Upload Daftar Riwayat Hidup dengan format PDF"><i class="bi bi-info-circle-fill text-danger"></i></a></label>
                    </div>
                </td>
            </tr>
        </div>

        <div class="form-group">
            <tr>
                <td class="postition-relative">
                    <b>12</b>
                </td>
                <td>
                    <b>Peta Jabatan Instansi terkait kebutuhan JAFUNG Pengembang Kewirausahaan:</b>
                </td>
                <td>
                    <div class="input-group">
                        <input id="peta" type="file" name="peta" class="form-control">
                        <label class="input-group-text" for="peta"><a href="#" data-toggle="tooltip" title="Upload Peta Jabatan Instansi terkait kebutuhan JAFUNG Pengembang Kewirausahaan"><i class="bi bi-info-circle-fill text-danger"></i></a></label>
                    </div>
                </td>
            </tr>
        </div>
    </table>
    <div class="container text-center">
        <input type="submit" value="Upload" class="btn btn-primary">
    </div>
</form>

<script>
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>
