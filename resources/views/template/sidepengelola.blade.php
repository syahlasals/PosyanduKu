 <!-- Sidebar -->
 <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: #647BB1;">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center">
        <div class="sidebar-brand-icon">
            <img style=" width: 80%; height:80%;" src="{{ asset('template/img/minilogo_posyandu.svg') }}" alt="logo">
        </div>
        <div class="sidebar-brand-text mx-3"><i>Posyanduku</i></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    <div class="pictureposyandu d-flex align-items-center justify-content-center">
        <img src="{{ asset('template/img/picture_dasboard.svg') }}" alt="img dasboard" style="margin:10px; height:70%; width:70%;">
    </div>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Petugas Pengelola
    </div>

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="{{ url('pengelola') }}">
            <i class="bi bi-house-door-fill"></i>
            <span>Beranda</span></a>
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item active">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true"
            aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Data</span>
        </a>
        <div id="collapsePages" class="collapse show" aria-labelledby="headingPages"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Data Status:</h6>
                <a class="collapse-item" href="{{ url('pengelola/dataImunisasi') }}">Data Imunisasi</a>
                <a class="collapse-item" href="{{ url('pengelola/dataStunting') }}">Data Stunting</a>
                <div class="collapse-divider"></div>
                <h6 class="collapse-header">Data Umum:</h6>
                <a class="collapse-item" href="{{ url('pengelola/dataAnak') }}">Data Anak</a>
                <a class="collapse-item" href="{{ url('pengelola/dataPetugas') }}">Data Petugas</a>
                <a class="collapse-item" href="{{ url('pengelola/dataPosyandu') }}">Data Posyandu</a>
            </div>
        </div>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->
