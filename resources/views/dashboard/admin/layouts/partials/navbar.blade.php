<nav class="navbar navbar-expand-lg navbar-dark bg-dark" aria-label="Tenth navbar example">
    <div class="container">
      
      <div class="container">
        <button class="navbar-toggler me-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="/admin">
          <img src="{{ asset('assets/img/logo.png') }}" alt="Logo" width="30" class="d-inline-block align-text-top">
          ADMIN SIPEWIRAUSAHA
        </a>
      </div>
      <div class="collapse navbar-collapse justify-content-md-end" id="navbarsExample08">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="/admin">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/verifikasi') }}" tabindex="-1">Verifikasi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/admin/berita" tabindex="-1">Informasi</a>
          </li>
          <li class="dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown08" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-person-fill"></i></a>
            <ul class="dropdown-menu" aria-labelledby="dropdown08">
              <li><a class="dropdown-item" href="/admin">Home</a></li>
              <li><a class="dropdown-item" href="/Verifikasi">Verifikasi</a></li>
              <hr>
              <li><a class="dropdown-item" href="/logout">Logout</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
