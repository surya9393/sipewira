<header id="header" class="header d-flex align-items-center">

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="/pengguna" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="{{ asset('assets/img/logo.png') }}" alt="">
        <h1>SIPE-<span>WIRAUSAHA</span></h1>
      </a>
      <nav id="navbar" class="navbar">
            <ul class=" ms-auto">
                <li><a href="/pengguna" class="{{ Request::is('pengguna') ? 'active' : ''}}">Home</a></li>
                <li><a href="/dashboard/upload" class="{{ Request::is('dashboard/upload') ? 'active' : ''}}">Persyaratan</a></li>
            </ul>
            <ul class="navbar-nav">
                <li class="dropdown show">
                    <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-person-circle"> </i>&nbsp; {{ auth()->user()->name }}</a>

                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li><a class="dropdown-item" href="{{ url('/profile') }}"><i class="bi bi-person-circle"></i> Profile</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <form action="{{ url('logout') }}" method="get" id="myForm">
                                @csrf
                                <a href="#" onclick="document.getElementById('myForm').submit();"><i class="bi bi-box-arrow-right"></i> Logout</a>
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>

    </nav><!-- .navbar -->

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->
  <!-- End Header -->
