<div class="container">
    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse mt-3">
            <div class="position-sticky pt-3 sidebar-sticky">
                <ul class="nav flex-column">
                <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard') ? 'active' : ''}} " aria-current="page" href="/dashboard">
                    <i class="bi bi-layout-text-window-reverse"></i>
                    Home
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('dashboard/upload') ? 'active' : ''}}" href="/dashboard/upload">
                        <i class="bi bi-layout-text-window-reverse"></i>
                        Persyaratan
                    </a>
                </li>
                </ul>

                <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
                <span>Berita</span>
                <a class="link-secondary {{ Request::is('dashboard/jadwal') ? 'active' : ''}}" href="#" aria-label="Add a new report">
                    <span data-feather="plus-circle" class="align-text-bottom"></span>
                </a>
                </h6>
                <ul class="nav flex-column mb-2">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('dashboard/pengumuman') ? 'active' : ''}}" href="#">
                    <span data-feather="file-text" class="align-text-bottom"></span>
                    Jadwal Test
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                    <span data-feather="file-text" class="align-text-bottom"></span>
                    Pengumuman
                    </a>
                </li>
                </ul>
            </div>
            </nav>
        </div>
    </div>
</div>
