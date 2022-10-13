
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Petugas Pengelola</title>
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
                {{-- <x-app-layout>
                </x-app-layout> --}}

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <div class="card card-welcomep mb-5">
                        <div class="card-body d-flex align-items-center justify-content-center">
                         <h1 style="color: white;"><b>Selamat Datang, Petugas Pengelola</b></h1>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col d-flex justify-content-end">
                            <a href="{{ url('pengelola/dataAnak') }}"class="card card-ap">
                                <div class="card-body">
                                    <h3 class=" d-flex align-items-center justify-content-center mb-3"><b>Data Anak</b></h3> 
                                    <div class="baby d-flex align-items-center justify-content-center">
                                        <iconify-icon icon="cil:baby" style="color: white;" width="125" height="106"></iconify-icon>
                                    </div> 
                                </div>
                            </a>
                        </div>
                        <div class="col d-flex justify-content-start">
                            <a href="{{ url('pengelola/dataImunisasi') }}" class="card card-ip">
                                <div class="card-body">
                                    <h3 class=" d-flex align-items-center justify-content-center mb-3"><b>Data Imunisasi</b></h3> 
                                    <div class="baby d-flex align-items-center justify-content-center">
                                        <iconify-icon icon="fontisto:injection-syringe" style="color: white;" width="125" height="106"></iconify-icon>
                                    </div> 
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col d-flex justify-content-end">
                            <a href="{{ url('pengelola/dataPetugas') }}" class="card card-ip ">
                                <div class="card-body">
                                    <h3 class=" d-flex align-items-center justify-content-center mb-3"><b>Data Petugas</b></h3> 
                                    <div class="baby d-flex align-items-center justify-content-center">
                                        <iconify-icon icon="healthicons:doctor-female-outline" style="color: white;" width="125" height="106"></iconify-icon>
                                    </div> 
                                </div>
                            </a>
                        </div>
                        <div class="col d-flex justify-content-start">
                            <a href="{{ url('pengelola/dataPosyandu') }}" class="card card-ap">
                                <div class="card-body">
                                    <h3 class=" d-flex align-items-center justify-content-center mb-3"><b>Data Posyandu</b></h3> 
                                    <div class="baby d-flex align-items-center justify-content-center">
                                        <iconify-icon icon="icon-park-solid:hospital-three" style="color: white;" width="125" height="106"></iconify-icon>
                                    </div> 
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
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!--Script-->
    @include('template.script')
    <!-- End of Script-->

</body>

</html>