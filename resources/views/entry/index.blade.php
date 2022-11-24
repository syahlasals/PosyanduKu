
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
       @include('template.sideentry')
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
                            <div class="col my-5">
                                <img src="{{ asset('template/img/Group_90bg.svg') }}" alt="">
                            </div>
                            <div class="col my-5 d-flex card card-registrasi">
                                <div class="d-flex align-items-center justify-content-center text-center">
                                    <h1><b>Selamat Datang, {{ Auth::user()->name }}</b></h1>
                                </div>
                                <a href="/entry/pendaftaranAnak">
                                    <div class="card-body">
                                        <div class="card-ap card-daftar">
                                            <h4 class=" d-flex align-items-center justify-content-center py-2 text-center"><b>Pendaftaran</b></h4> 
                                        </div>
                                    </div>
                                </a>
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