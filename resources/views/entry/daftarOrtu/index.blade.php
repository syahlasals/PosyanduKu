<!DOCTYPE html>
<html lang="en">

<head>
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
                <div class="container-fluid"><br>
                    <h1 class="text-center"><b>Pendaftaran Orang Tua</b></h1><br><br>
                    <div class="container d-flex justify-item-center justify-content-center"><br>
                        <div class="card card-form">
                            <div class="card-body">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <strong>Waduh!</strong>Kesalahan input.<br><br>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            @if (Session::has('nokk'))
                                <div class="alert alert-danger">{{ Session::get('nokk') }}</div>
                            @endif
                            @if (Session::has('nokk_ortu'))
                                <div class="alert alert-danger">{{ Session::get('nokk_ortu') }}</div>
                            @endif
                            @if (Session::has('nikayah'))
                                <div class="alert alert-danger">{{ Session::get('nikayah') }}</div>
                            @endif
                            @if (Session::has('nikibu'))
                                <div class="alert alert-danger">{{ Session::get('nikibu') }}</div>
                            @endif
                            @if (Session::has('ortu'))
                                <div class="alert alert-danger">{{ Session::get('ortu') }}</div>
                            @endif
                            <form method="POST" action="/store2/daftarOrtu" id="myform" style="margin-top: 15px; margin-bottom: 15px;">
                                @csrf
                                <div class="row" style="margin-bottom: 15px;">
                                    <div class="col-3">
                                        <label for="no_kk"><b>Nomor Kartu Keluarga</b></label>
                                    </div>
                                    <div class="col-1"><b>:</b></div>
                                    <div class="col-8">
                                        <input type="number" name="no_kk" id="no_kk" class="form-control" required>
                                    </div>
                                </div>
                                        
                                <div class="row" style="margin-bottom: 15px;">
                                    <div class="col-3">
                                        <label for="alamat_ortu"><b>Alamat</b></label>
                                    </div>
                                    <div class="col-1"><b>:</b></div>
                                    <div class="col-8">
                                        <input type="text" name="alamat_ortu" id="alamat_ortu" class="form-control" required>
                                    </div>
                                </div>
                                <div class="row" style="margin-bottom: 15px;">
                                    <div class="col-3">
                                        <label for="rt"><b>RT</b></label>
                                    </div>
                                    <div class="col-1"><b>:</b></div>
                                    <div class="col-8">
                                        <input type="number" name="rt" id="rt" class="form-control" required>
                                    </div>
                                </div>
                                <div class="row" style="margin-bottom: 15px;">
                                    <div class="col-3">
                                        <label for="rw"><b>RW</b></label>
                                    </div>
                                    <div class="col-1"><b>:</b></div>
                                    <div class="col-8">
                                        <input type="number" name="rw" id="rw" class="form-control" required>
                                    </div>
                                </div>
                                <div class="row" style="margin-bottom: 15px;">
                                    <div class="col-3">
                                        <label for="nik_ayah"><b>NIK Ayah</b></label>
                                    </div>
                                    <div class="col-1"><b>:</b></div>
                                    <div class="col-8">
                                        <input type="number" name="nik_ayah" id="nik_ayah" class="form-control" required>
                                    </div>
                                </div>
                                <div class="row" style="margin-bottom: 15px;">
                                    <div class="col-3">
                                        <label for="nik_ibu"><b>NIK Ibu</b></label>
                                    </div>
                                    <div class="col-1"><b>:</b></div>
                                    <div class="col-8">
                                        <input type="number" name="nik_ibu" id="nik_ibu" class="form-control" required>
                                    </div>
                                </div>
                                <div class="row" style="margin-bottom: 15px;">
                                    <div class="col-3">
                                        <label for="nama_ayah"><b>Nama Ayah</b></label>
                                    </div>
                                    <div class="col-1"><b>:</b></div>
                                    <div class="col-8">
                                        <input type="text" name="nama_ayah" id="nama_ayah" class="form-control" required>
                                    </div>
                                </div>
                                <div class="row" style="margin-bottom: 15px;">
                                    <div class="col-3">
                                        <label for="nama_ibu"><b>Nama Ibu</b></label>
                                    </div>
                                    <div class="col-1"><b>:</b></div>
                                    <div class="col-8">
                                        <input type="text" name="nama_ibu" id="nama_ibu" class="form-control" required>
                                    </div>
                                </div>
                                <div class="row" style="margin-bottom: 15px;">
                                    <div class="col-3">
                                        <label for="pekerjaan_ayah"><b>Pekerjaan Ayah</b></label>
                                    </div>
                                    <div class="col-1"><b>:</b></div>
                                    <div class="col-8">
                                        <input type="text" name="pekerjaan_ayah" id="pekerjaan_ayah" class="form-control" required>
                                    </div>
                                </div>
                                <div class="row" style="margin-bottom: 15px;">
                                    <div class="col-3">
                                        <label for="pekerjaan_ibu"><b>Pekerjaan Ibu</b></label>
                                    </div>
                                    <div class="col-1"><b>:</b></div>
                                    <div class="col-8">
                                        <input type="text" name="pekerjaan_ibu" id="pekerjaan_ibu" class="form-control" required>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col" colspan="3" style="margin-left: 245px;">
                                    <a href="{{ url('entry') }}" class="btn btn-main ml-3" role="button" aria-disabled="true">Kembali</a>

                                        <button class="btn btn-main" type="submit" style="margin-left: 15px;">Daftar</button>
                                    </div>
                                </div>
                                </form>
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

    @include('sweetalert::alert')

</body>

</html>