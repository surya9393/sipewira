<div class="container">
    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse mt-3">
            <div class="position-sticky pt-3 sidebar-sticky">
                <ul class="nav flex-column">
                <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard') ? 'active' : ''}} " aria-current="page" href="/dashboard">
                    <i class="bi bi-house-door-fill"></i>
                    Home
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('dashboard/upload') ? 'active' : ''}}" href="/dashboard/upload">
                        <i class="bi bi-file-earmark-check-fill"></i>
                        Persyaratan
                    </a>
                </li>
                </ul>
                <ul class="nav flex-column mb-2">
                    <hr>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('dashboard/informasi') ? 'active' : ''}}" aria-current="page" href="#">
                        <i class="bi bi-newspaper"></i>
                        Informasi
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('dashboard/pengumuman') ? 'active' : ''}}" href="#">
                        <i class="bi bi-card-list"></i>
                        Pengumuman
                        </a>
                    </li>
                </ul>
            </div>
            </nav>
        </div>
    </div>
</div>
