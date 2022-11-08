
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
                {{-- <x-app-layout>
                </x-app-layout> --}}

                <!--End of Topbar-->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <div class="card card-welcomep mb-5">
                        <div class="card-body d-flex align-items-center justify-content-center">
                        <h1 style="color: white;"><b>Selamat Datang, {{ Auth::user()->name }}</b></h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col d-flex justify-content-center">
                            <a href="/entry/pendaftaranAnak" class="card card-ap">
                                <div class="card-body">
                                    <h4 class=" d-flex align-items-center justify-content-center mb-3"><b>Pendaftaran</b></h4> 
                                </div>
                            </a>
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