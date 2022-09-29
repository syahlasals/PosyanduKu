
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

                <!-- Begin Page Content -->
                <div class="container-fluid">
                <div class="container d-flex justify-item-center justify-content-center">
                    <div class="card card-form2">
                        <div class="card-body">
                            <div class="row">
                                <div class="col text-center">
                                    <h3>{{ $anak->nama_anak }}</h3>
                                </div>
                            </div>
                        <hr>
                            <div class="row">
                                <div class="col-5">
                                    <label for="nokk"><b>No KK</b></label>
                                </div>
                                <div class="col-1"><b>:</b></div>
                                <div class="col-6">
                                    {{ $anak->no_kk }}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-5">
                                    <label for="nokk"><b>No NIK</b></label>
                                </div>
                                <div class="col-1"><b>:</b></div>
                                <div class="col-6">
                                    {{ $anak->nik_anak }}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-5">
                                    <label for="nokk"><b>Anak</b></label>
                                </div>
                                <div class="col-1"><b>:</b></div>
                                <div class="col-6">
                                    {{ $anak->nama_anak }}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-5">
                                    <label for="nokk"><b>Tempat, Tanggal Lahir</b></label>
                                </div>
                                <div class="col-1"><b>:</b></div>
                                <div class="col-6">
                                    {{ $anak->tmp_anak }}, {{ $anak->tgl_anak }}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-5">
                                    <label for="nokk"><b>Jenis Kelamin</b></label>
                                </div>
                                <div class="col-1"><b>:</b></div>
                                <div class="col-6">
                                    {{ $anak->jenkel_anak }}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-5">
                                    <label for="nokk"><b>Golongan Darah</b></label>
                                </div>
                                <div class="col-1"><b>:</b></div>
                                <div class="col-6">
                                    {{ $anak->golongan_darah }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    <br>
                <div class="d-grid gap-2 d-md-flex justify-content-md-center mb-3">
                    <a href="{{ url('dataAnak') }}" class="btn btn-main" role="button" aria-disabled="true">Kembali</a>
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
