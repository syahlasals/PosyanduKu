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

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item {{ Request::is('entry/pendaftaranAnak') ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('entry/pendaftaranAnak') }}">
            <i class="fa-solid fa-child"></i>
            <span>Daftar Anak</span>
        </a>
    </li>
    <li class="nav-item {{ Request::is('entry/InputImunisasi') ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('entry/InputImunisasi') }}">
            <i class="bi bi-pencil-fill"></i>
            <span>Input Imunisasi</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->
