
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Data Posyandu</title>
    @include('template.head')
</head>
<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
    <!--sidebar-->
       @include('template.sidepengelola')
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
                    <!-- Page Heading -->
                    <h1 class="h3 mb-0 text-black-800 text-center"><b>PROFIL POSYANDU</b></h1>
                    <div class="horizon d-flex align-items-center justify-content-center">
                        <hr width="30%">
                    </div>
                    
                    <div class="d-flex align-items-center justify-content-center mb-3">
                        <img  src="{{ asset('template/img/logo_posyandu.svg') }}" alt="logo posyandu">
                    </div>

                    @foreach ($profiles as $key => $prfl)
                    <div class="main-content">
                        <div class="d-flex align-items-center justify-content-center mb-5">
                            <h3><b>{{ $prfl->nama_posyandu }}</b></h3>
                        </div>
                        <div class="alamat">
                            <h5 class="d-flex align-items-center justify-content-center"><b>Alamat</b></h5>
                            <p class="d-flex align-items-center justify-content-center">{{ $prfl->alamat_posyandu }}</p>
                        </div>
                        <div class="row mb-3">
                            <div class="col"></div>
                            <div class="col">
                                <h5 class="d-flex align-items-center justify-content-center"><b>Nama RT</b></h5>
                                <p class="d-flex align-items-center justify-content-center">{{ $prfl->nama_rt }}</p>
                            </div>
                            <div class="col d-flex align-items-center justify-content-center">
                                <div class="garis_verikal"></div>
                            </div>
                            <div class="col">
                                <h5 class="d-flex align-items-center justify-content-center"><b>Nama RW</b></h5>
                                <p class="d-flex align-items-center justify-content-center">{{ $prfl->nama_rw }}</p>
                            </div>
                            <div class="col"></div>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <h5 class="d-flex align-items-center justify-content-center"><b>Ketua Posyandu</b></h5>
                                <p class="d-flex align-items-center justify-content-center">{{ $prfl->ketua }}</p>
                            </div>
                            <div class="col d-flex align-items-center justify-content-center">
                                <div class="garis_verikal"></div>
                            </div>
                            <div class="col">
                                <h5 class="d-flex align-items-center justify-content-center"><b>Sekretaris Posyandu</b></h5>
                                <p class="d-flex align-items-center justify-content-center">{{ $prfl->sekretaris }}</p>
                            </div>
                            <div class="col d-flex align-items-center justify-content-center">
                                <div class="garis_verikal"></div>
                            </div>
                            <div class="col">
                                <h5 class="d-flex align-items-center justify-content-center"><b>Bendahara Posyandu</b></h5>
                                <p class="d-flex align-items-center justify-content-center">{{ $prfl->bendahara }}</p>
                            </div>
                        </div>
                   
 </div>
                    @endforeach
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-3">
                        <a href="{{ url('pengelola') }}" class="btn btn-main" role="button" aria-disabled="true">Kembali</a>
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