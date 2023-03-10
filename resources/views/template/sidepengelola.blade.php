 <!-- Sidebar -->
 <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: #647BB1;">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center">
    <div class="pictureposyandu d-flex align-items-center justify-content-center">
        <img src="{{ asset('template/img/minilogo_posyandu.svg') }}" alt="img dasboard" style="margin:10px; height:70%; width:70%;">
    </div>
        <div class="sidebar-brand-text mx-3"><i>Posyanduku</i></div>
    </a>


    <!-- Heading 
    <div class="sidebar-heading text-center">
        <b>Petugas Pengelola</b>
    </div>-->
    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ Request::is('pengelola') ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('pengelola') }}">
            <i class="bi bi-house-door-fill"></i>
            <span>Beranda</span></a>
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true"
            aria-controls="collapsePages" style="margin-top: -15px;">
            <i class="fas fa-fw fa-folder"></i>
            <span>Pengelola</span>
        </a>
        <div id="collapsePages" class="collapse show" aria-labelledby="headingPages"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Perekapan :</h6>
                <a class="collapse-item {{ Request::is('pengelola/dataImunisasi*') ? 'active' : '' }}" href="{{ url('pengelola/dataImunisasi') }}">Rekap Anak</a>
                {{-- <a class="collapse-item {{ Request::is('pengelola/dataStunting') ? 'active' : '' }}" href="{{ url('pengelola/dataStunting') }}">Data Stunting</a> --}}
                <div class="collapse-divider"></div>
                <h6 class="collapse-header">Data Utama :</h6>
                <a class="collapse-item {{ Request::is('pengelola/dataAnak*') ? 'active' : '' }} || {{ Request::is('pengelola/goldaro') ? 'active' : '' }} || {{ Request::is('pengelola/goldaro') ? 'active' : '' }} || {{ Request::is('pengelola/goldara') ? 'active' : '' }} || {{ Request::is('pengelola/goldarb') ? 'active' : '' }} || {{ Request::is('pengelola/goldarab') ? 'active' : '' }}" href="{{ url('pengelola/dataAnak') }}">Data Anak</a>
                <a class="collapse-item {{ Request::is('pengelola/dataOrtu*') ? 'active' : '' }}" href="{{ url('pengelola/dataOrtu') }}">Data Ortu</a>
                <h6 class="collapse-header">Lainnya :</h6>
                <a class="collapse-item {{ Request::is('pengelola/dataPosyandu*') ? 'active' : '' }}" href="{{ url('pengelola/dataPosyandu') }}">Profil Posyandu</a>
                <!-- <a class="collapse-item {{ Request::is('pengelola/logActivity*') ? 'active' : '' }}" href="{{ url('pengelola/logActivity') }}">Aktivitas Log</a> -->
                <!-- <a class="collapse-item {{ Request::is('pengelola/backup*') ? 'active' : '' }}" href="{{ url('pengelola/backup') }}">Backup database</a> -->
            </div>
        </div>
    </li>

    <li class="nav-item {{ Request::is('pengelola/logActivity') ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('pengelola/logActivity') }}" style="margin-top: -15px;">
        <i class="fas fa-list fa-sm fa-fw"></i>
            <span>Aktivitas Log</span></a>
    </li>
    <li class="nav-item {{ Request::is('http://localhost/posyanduku/public/backup') ? 'active' : '' }}">
        <a class="nav-link" href="http://localhost/posyanduku/public/backup" style="margin-top: -15px;">
        <i class="fa-solid fa-database"></i>
        <span>Backup Database</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->
