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
       Petugas Entry
   </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item active">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true"
            aria-controls="collapsePages">
            <i class="bi bi-pencil-fill"></i>
            <span>Input Imunisasi</span>
        </a>
        <div id="collapsePages" class="collapse show" aria-labelledby="headingPages"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Form Input</h6>
                <a class="collapse-item" href="{{ url('pendaftaranAnak') }}">Form Pendaftaran</a>
                <a class="collapse-item" href="#">Form Pertumbuhan</a>
                <a class="collapse-item" href="{{ url('vaksin') }}">Form Vaksin</a>
                <a class="collapse-item" href="{{ url('vitamin') }}">Form Vitamin</a>
                <a class="collapse-item" href="#">Form Riwayat Penyakit</a>
                <div class="collapse-divider"></div>
            </div>
        </div>
    </li>

    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Data Stunting</span>
        </a>
    </li>

    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="bi bi-person-lines-fill"></i>
            <span>Antrian</span>
        </a>
    </li>

    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="bi bi-upc-scan"></i>
            <span>Scan QR</span>
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
