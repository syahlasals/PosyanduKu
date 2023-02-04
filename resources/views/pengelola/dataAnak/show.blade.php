
<!DOCTYPE html>
<html lang="en">

<head>
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
                <br><h1 class="text-center"><b>Detail Data Anak</b></h1><br><br>

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
                                    <label for="nokk"><b>Nama Anak</b></label>
                                </div>
                                <div class="col-1"><b>:</b></div>
                                <div class="col-6">
                                    {{ $anak->nama_anak }}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-5">
                                    <label for="nokk"><b>Nama Ayah</b></label>
                                </div>
                                <div class="col-1"><b>:</b></div>
                                <div class="col-6">
                                    {{ $anak->ortus->nama_ayah}}
                            </div>
                            <div class="row">
                                <div class="col-5">
                                    <label for="nokk"><b>Nama Ibu</b></label>
                                </div>
                                <div class="col-1"><b>&nbsp;&nbsp;&nbsp;:</b></div>
                                <div class="col-6">
                                    &nbsp;&nbsp;&nbsp;{{ $anak->ortus->nama_ibu }}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-5">
                                    <label for="nokk"><b>Usia</b></label>
                                </div>
                                <div class="col-1"><b>&nbsp;&nbsp;&nbsp;:</b></div>
                                <div class="col-6">
                                    &nbsp;&nbsp;&nbsp;{{ $anak->tahun }} tahun 
                                    {{ $anak->bulan }} bulan
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-5">
                                    <label for="nokk"><b>Tempat, Tanggal Lahir</b></label>
                                </div>
                                <div class="col-1"><b>&nbsp;&nbsp;&nbsp;:</b></div>
                                <div class="col-6">
                                    &nbsp;&nbsp;&nbsp;{{ $anak->tmp_anak }}, {{ $anak->tgl_anak ->format('d F Y')}}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-5">
                                    <label for="nokk"><b>Jenis Kelamin</b></label>
                                </div>
                                <div class="col-1"><b>&nbsp;&nbsp;&nbsp;:</b></div>
                                <div class="col-6">
                                    &nbsp;&nbsp;&nbsp;{{ $anak->jenkel_anak == 'L' ? 'Laki-Laki' : 'Perempuan'}}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-5">
                                    <label for="nokk"><b>Golongan Darah</b></label>
                                </div>
                                <div class="col-1"><b>&nbsp;&nbsp;&nbsp;:</b></div>
                                <div class="col-6">
                                    &nbsp;&nbsp;&nbsp;{{ $anak->golongan_darah }}
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                    <br>
                <div class="d-grid gap-2 d-md-flex justify-content-md-center mb-3">
                    <a href="{{ url('/pengelola/dataAnak') }}" class="btn btn-main" role="button" aria-disabled="true">Kembali</a>
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
