
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
                    <h1 class="text-center"><b>Form SDIDTK</b></h1><br>
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
                            <form method="POST" action="/entry/formSdidtk" id="myform" style="margin-top: 15px; margin-bottom: 15px;">
                                @csrf
                                <div class="row" style="margin-bottom: 15px;">
                                    <div class="row" style="margin-bottom: 15px;">
                                        <div class="col-3">
                                            <label for="nik_anak"><b>NIK Anak</b></label>
                                        </div>
                                        <div class="col-1"><b>:</b></div>
                                        <div class="col-8">
                                            <input type="text" name="nik_anak" id="nik_anak" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row" style="margin-bottom: 15px;">
                                        <div class="col-3">
                                            <label for="kode_pertumbuhan"><b>Kode Pertumbuhan</b></label>
                                        </div>
                                        <div class="col-1"><b>:</b></div>
                                        <div class="col-8">
                                            <input type="text" name="kode_pertumbuhan" id="kode_pertumbuhan" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <label for="bb_tb"><b>BB/TB</b></label>
                                    </div>
                                    <div class="col-1"><b>:</b></div>
                                    <div class="col-8">
                                        <div class="form-check">
                                        <div class="row">
                                            <div class="col">
                                                <input type="radio" class="form-check-input" name="bb_tb" id="normal"
                                                value="1">
                                                <label for="normal" class="form-check-label">Normal</label>
                                            </div>
                                            <div class="col-8">
                                                <input type="radio" class="form-check-input" name="bb_tb" id="tidaknormal"
                                                value="0">
                                                <label for="tidaknormal" class="form-check-label">Tidak Normal</label>
                                            </div>
                                        </div>
                                        </div>
                                    </div>

                                    <div class="col-3">
                                        <label for="tb_u"><b>TB/U</b></label>
                                    </div>
                                    <div class="col-1"><b>:</b></div>
                                    <div class="col-8">
                                        <div class="form-check">
                                        <div class="row">
                                            <div class="col">
                                                <input type="radio" class="form-check-input" name="tb_u" id="normal"
                                                value="1">
                                                <label for="normal" class="form-check-label">Normal</label>
                                            </div>
                                            <div class="col-8">
                                                <input type="radio" class="form-check-input" name="tb_u" id="tidaknormal"
                                                value="0">
                                                <label for="tidaknormal" class="form-check-label">Tidak Normal</label>
                                            </div>
                                        </div>
                                        </div>
                                    </div>

                                    <div class="col-3">
                                        <label for="lk"><b>LK</b></label>
                                    </div>
                                    <div class="col-1"><b>:</b></div>
                                    <div class="col-8">
                                        <div class="form-check">
                                        <div class="row">
                                            <div class="col">
                                                <input type="radio" class="form-check-input" name="lk" id="normal"
                                                value="1">
                                                <label for="normal" class="form-check-label">Normal</label>
                                            </div>
                                            <div class="col-8">
                                                <input type="radio" class="form-check-input" name="lk" id="tidaknormal"
                                                value="0">
                                                <label for="tidaknormal" class="form-check-label">Tidak Normal</label>
                                            </div>
                                        </div>
                                        </div>
                                    </div>

                                    <div class="col-3">
                                        <label for="kpsp"><b>KPSP</b></label>
                                    </div>
                                    <div class="col-1"><b>:</b></div>
                                    <div class="col-8">
                                        <div class="form-check">
                                        <div class="row">
                                            <div class="col">
                                                <input type="radio" class="form-check-input" name="kpsp" id="normal"
                                                value="1">
                                                <label for="normal" class="form-check-label">Normal</label>
                                            </div>
                                            <div class="col-8">
                                                <input type="radio" class="form-check-input" name="kpsp" id="tidaknormal"
                                                value="0">
                                                <label for="tidaknormal" class="form-check-label">Tidak Normal</label>
                                            </div>
                                        </div>
                                        </div>
                                    </div>

                                    <div class="col-3">
                                        <label for="tdd"><b>TDD</b></label>
                                    </div>
                                    <div class="col-1"><b>:</b></div>
                                    <div class="col-8">
                                        <div class="form-check">
                                        <div class="row">
                                            <div class="col">
                                                <input type="radio" class="form-check-input" name="tdd" id="normal"
                                                value="1">
                                                <label for="normal" class="form-check-label">Normal</label>
                                            </div>
                                            <div class="col-8">
                                                <input type="radio" class="form-check-input" name="tdd" id="tidaknormal"
                                                value="0">
                                                <label for="tidaknormal" class="form-check-label">Tidak Normal</label>
                                            </div>
                                        </div>
                                        </div>
                                    </div>

                                    <div class="col-3">
                                        <label for="tdl"><b>TDL</b></label>
                                    </div>
                                    <div class="col-1"><b>:</b></div>
                                    <div class="col-8">
                                        <div class="form-check">
                                        <div class="row">
                                            <div class="col">
                                                <input type="radio" class="form-check-input" name="tdl" id="normal"
                                                value="1">
                                                <label for="normal" class="form-check-label">Normal</label>
                                            </div>
                                            <div class="col-8">
                                                <input type="radio" class="form-check-input" name="tdl" id="tidaknormal"
                                                value="0">
                                                <label for="tidaknormal" class="form-check-label">Tidak Normal</label>
                                            </div>
                                        </div>
                                        </div>
                                    </div>

                                    <div class="col-3">
                                        <label for="kmpe"><b>KMPE</b></label>
                                    </div>
                                    <div class="col-1"><b>:</b></div>
                                    <div class="col-8">
                                        <div class="form-check">
                                        <div class="row">
                                            <div class="col">
                                                <input type="radio" class="form-check-input" name="kmpe" id="normal"
                                                value="1">
                                                <label for="normal" class="form-check-label">Normal</label>
                                            </div>
                                            <div class="col-8">
                                                <input type="radio" class="form-check-input" name="kmpe" id="tidaknormal"
                                                value="0">
                                                <label for="tidaknormal" class="form-check-label">Tidak Normal</label>
                                            </div>
                                        </div>
                                        </div>
                                    </div>

                                    <div class="col-3">
                                        <label for="mchat"><b>M-CHAT</b></label>
                                    </div>
                                    <div class="col-1"><b>:</b></div>
                                    <div class="col-8">
                                        <div class="form-check">
                                        <div class="row">
                                            <div class="col">
                                                <input type="radio" class="form-check-input" name="mchat" id="normal"
                                                value="1">
                                                <label for="normal" class="form-check-label">Normal</label>
                                            </div>
                                            <div class="col-8">
                                                <input type="radio" class="form-check-input" name="mchat" id="tidaknormal"
                                                value="0">
                                                <label for="tidaknormal" class="form-check-label">Tidak Normal</label>
                                            </div>
                                        </div>
                                        </div>
                                    </div>

                                    <div class="col-3">
                                        <label for="gpph"><b>GPPH*</b></label>
                                    </div>
                                    <div class="col-1"><b>:</b></div>
                                    <div class="col-8">
                                        <div class="form-check">
                                        <div class="row">
                                            <div class="col">
                                                <input type="radio" class="form-check-input" name="gpph" id="normal"
                                                value="1">
                                                <label for="normal" class="form-check-label">Normal</label>
                                            </div>
                                            <div class="col-8">
                                                <input type="radio" class="form-check-input" name="gpph" id="tidaknormal"
                                                value="0">
                                                <label for="tidaknormal" class="form-check-label">Tidak Normal</label>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col" colspan="3">
                                        <button class="btn btn-main" type="submit" style="margin-left: 260px;">Simpan</button>
                                        <a href="{{ url('entry/InputImunisasi') }}" class="btn btn-main ml-3" role="button" aria-disabled="true">Kembali</a>
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

</body>

</html>







