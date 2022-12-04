
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Petugas Entry</title>
    @include('template.head')
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
    <!--sidebar-->

    <!--End Sidebar-->
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!--Topbar-->
                @include('template.nav')

                <!--End of Topbar-->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <div class="container">
                        <div class="row">
                            <div class="col my-2">
                                <img src="{{ asset('template/img/Group_90bg.svg') }}" alt="">
                            </div>
                            <div class="col my-5 d-flex card card-registrasi">
                                <div class="d-flex align-items-center justify-content-center text-center">
                                    <h1><b>Selamat Datang, {{ Auth::user()->name }}</b></h1>
                                </div>
                                    <div class="card-body ">
                                        <!-- <p style="margin-left: 72px;">Belum terdaftar? Klik tombol dibawah ini <br>
                                        <a href="/entry/pendaftaranAnak" class="btn btn-primary card-ap justify-item-center"  role="button" aria-expanded="false" aria-controls="collapseExample" style="margin-left: 72px;">
                                            Pendaftaran Anak
                                        </a></p>
                                        <p style="margin-left: 72px;">Sudah terdaftar? Klik tombol dibawah ini <br>
                                        <a href="/entry/InputImunisasi" class="btn btn-primary card-ap justify-item-center" role="button" aria-expanded="false" aria-controls="collapseExample" style="margin-left: 72px;">
                                            Input Imunisasi
                                        </a></p> -->
                                
</div>
                                
                                <!-- <a href="/entry/InputImunisasi" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseExample">
                                    <div class="card-body">
                                        <div class="card-ap card-daftar">
                                            <h4 class=" d-flex align-items-center justify-content-center py-2 text-center"><b>Sudah Daftar</b></h4> 
                                        </div>
                                    </div>
                                </a>
                                <a href="/entry/InputImunisasi" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseExample">
                                    <div class="card-body">
                                        <div class="card-ap card-daftar">
                                            <h4 class=" d-flex align-items-center justify-content-center py-2 text-center"><b>Sudah Daftar</b></h4> 
                                        </div>
                                    </div>
                                </a> -->
</div>
                                <div class="row">
                                 <div class="col">
                                <a href="{{ url('/entry/pendaftaranAnak') }}" class="card card-ip">
                                    <div class="card-body">
                                        <span class=" d-flex align-items-center justify-content-center mb-3 text-center"><b>Pendaftaran Anak</b></span> 
                                        <div class="baby d-flex align-items-center justify-content-center">
                                        <iconify-icon icon="material-symbols:login" style="color: black;" width="30" height="30"></iconify-icon>
                                        </div> 
                                    </div>
                                </a>
                            </div>
                            <div class="col">
                                <a href="{{ url('/entry/InputImunisasi') }}" class="card card-ip">
                                    <div class="card-body">
                                        <span class=" d-flex align-items-center justify-content-center mb-3 text-center"><b>Input Imunisasi</b></span> 
                                        <div class="baby d-flex align-items-center justify-content-center">
                                        <iconify-icon icon="material-symbols:input" style="color: black;" width="30" height="30"></iconify-icon>
                                        </div> 
                                    </div>
                                </a>
                            </div>
                            <div class="col">
                                <a href="{{ url('entry/daftarOrtu') }}" class="card card-ip">
                                    <div class="card-body">
                                        <span class=" d-flex align-items-center justify-content-center mb-3 text-center"><b>Pendaftaran Orangtua</b></span> 
                                        <div class="baby d-flex align-items-center justify-content-center">
                                        <iconify-icon icon="mdi:register" style="color: black;" width="30" height="30"></iconify-icon>
                                        </div> 
                                    </div>
                                </a>
                            </div>
                            </div>
                           
                                
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            @include('template.footer')
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    @include('template.modalLogout')
    <!--Script-->
    @include('template.script')
    <!-- End of Script-->
 
</body>

</html>