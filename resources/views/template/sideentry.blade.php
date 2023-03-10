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
   <div class="sidebar-heading">
       Petugas Entry
   </div>-->
      <!-- Divider -->
      <hr class="sidebar-divider">

   <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ Request::is('entry') ? 'active' : '' }}">
    <a class="nav-link" href="{{ url('entry') }}">
        <i class="bi bi-house-door-fill"></i>
        <span>Beranda</span>
    </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true"
            aria-controls="collapsePages" style="margin-top: -15px;">
            <i class="fas fa-fw fa-folder"></i>
            <span>Entry</span>
        </a>
        <div id="collapsePages" class="collapse show" aria-labelledby="headingPages"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Pendaftaran :</h6>
                <a class="collapse-item {{ Request::is('entry/pendaftaranAnak*') ? 'active' : '' }}" href="{{ url('entry/pendaftaranAnak') }}">Daftar Anak</a>
                <a class="collapse-item {{ Request::is('entry/daftarOrtu*') ? 'active' : '' }}" href="{{ url('entry/daftarOrtu') }}">Daftar Orang Tua</a>
                <div class="collapse-divider"></div>
                <h6 class="collapse-header">Inputan :</h6>
                <a class="collapse-item {{ Request::is('entry/InputImunisasi*') || Request::is('entry/pertumbuhan/*') || Request::is('entry/vaksin/*') || Request::is('entry/vitamin/*') || Request::is('entry/statusPenyimpangan/*') ? 'active' : '' }} " href="{{ url('entry/InputImunisasi') }}">Input Imunisasi</a>
                <!-- <a class="collapse-item {{ Request::is('entry/logActivity*') ? 'active' : '' }}" href="{{ url('entry/logActivity') }}">Aktivitas Log</a> -->
            </div>
        </div>
    </li>
    <li class="nav-item {{ Request::is('entry/logActivity') ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('entry/logActivity') }}" style="margin-top: -15px;">
        <i class="fas fa-list fa-sm fa-fw"></i>
            <span>Aktivitas Log</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->
