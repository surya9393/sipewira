<!-- ======= Hero Section ======= -->
<section id="hero" class="hero p-5 mt-5">
    <div class="container position-relative">
      <div class="row gy-5" data-aos="fade-in">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
          <h2>Selamat Datang di <span>SIPEWIRAUSAHA</span></h2>
          <div class="mb-3">
            <h5>Sistem Informasi Pengembang Wirausaha</h5>
          </div>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="/register" class="btn-get-started">Daftar Jabatan Fungsional</a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2">
          <img src="assets/img/hero-img.png" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="100">
        </div>
      </div>
    </div>

    <div class="icon-boxes position-relative" >
      <div class="container position-relative">
        <div class="row gy-4 mt-5" id="myTab" role="tablist">

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100" role="presentation">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-easel"></i></div>
              <h4 class="title"><a href="" class="stretched-link" data-bs-toggle="modal" data-bs-target="#usulanModal">Penyampaian Daftar Usulan</a></h4>
            </div>
          </div>
          <!--End Icon Box -->

          {{-- Modal --}}
          <div class="modal fade" id="usulanModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl"">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Sipewirausaha</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <img class="rounded mx-auto d-block" src="{{ asset('assets/img/content/daftar_usulan.jpeg') }}" alt="" width="100%" data-aos="fade-up" data-aos-delay="100" role="presentation">
                </div>
              </div>
            </div>
          </div>
          {{-- End Modal --}}

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-gem"></i></div>
              <h4 class="title"><a href="" class="stretched-link" data-bs-toggle="modal" data-bs-target="#UjiModal">Pelaksanaan Uji Kompetensi</a></h4>
            </div>
          </div>
          <!--End Icon Box -->

          {{-- Modal --}}
          <div class="modal fade" id="UjiModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl"">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Sipewirausaha</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <img class="rounded mx-auto d-block" src="{{ asset('assets/img/content/uji_kompetensi.jpeg') }}" alt="" width="100%" data-aos="fade-up" data-aos-delay="100" role="presentation">
                </div>
              </div>
            </div>
          </div>
          {{-- End Modal --}}

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-geo-alt"></i></div>
              <h4 class="title"><a href="{{ route('login') }}" class="stretched-link">Pengumuman</a></h4>
            </div>
          </div>
          <!--End Icon Box -->

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-command"></i></div>
              <h4 class="title"><a href="{{ route('login') }}" class="stretched-link">Informasi</a></h4>
            </div>
          </div>
          <!--End Icon Box -->
          <div class="tab-content" id="myTabContent" >
            <div class="tab-pane fade show active text-center" id="example-tab-pane" role="tabpanel" aria-labelledby="example-tab" tabindex="0"></div>
            <div class="tab-pane fade show text-center" id="syarat-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0"></div>
            <div class="tab-pane fade text-center" id="uji-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0"></div>
          </div>

        </div>
      </div>
    </div>

    </div>
  </section>
  <!-- End Hero Section -->
