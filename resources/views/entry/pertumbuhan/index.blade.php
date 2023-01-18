<!DOCTYPE html>
<html lang="en">

<head>
    @include('template.head')
</head>
<?php session_start(); ?>
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
                    <h1 class="text-center"><b>Masukan Data Pertumbuhan</b></h1><br><br>
                    <div class="container d-flex justify-item-center justify-content-center"><br>
                        <div class="card card-form">
                            <div class="card-body">
                            <!-- @if ($errors->any())
                                <div class="alert alert-danger">
                                    <strong>Waduh!</strong>Kesalahan input.<br><br>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif -->
                            <form method="POST" action="/store/pertumbuhan" id="myform">
                                @csrf
                                <div class="row" style="margin-bottom: 15px;">
                                    <div class="col-3">
                                        <label for="nik_anak"><b>NIK Anak</b></label>
                                    </div>
                                    <div class="col-1"><b>:</b></div>
                                    <div class="col-8">
                                        <input type="number" name="nik_anak" id="nik_anak" class="form-control"value="{{$nik_anak}}" disabled>
                                    </div>
                                    <input type="hidden" name="nik_anak" id="nik_anak" class="form-control" value={{$nik_anak}}>
                                </div>
                                <div class="row" style="margin-bottom: 15px;">
                                    <div class="col-3">
                                        <label for="nik_anak"><b>Nama Anak</b></label>
                                    </div>
                                    <div class="col-1"><b>:</b></div>
                                    <div class="col-8">
                                        <input type="text" name="nama_anak" id="nama_anak" class="form-control"value="{{$nama_anak}}" disabled>
                                    </div>
                                    <input type="hidden" name="nama_anak" id="nama_anak" class="form-control" value={{$nama_anak}}>
                                </div>

                                <div class="row" style="margin-bottom: 15px;">
                                    <div class="col-3">
                                        <label for="tgl_hitung"><b>Tanggal Imunisasi</b></label>
                                    </div>
                                    <div class="col-1"><b>:</b></div>
                                    <div class="col-8"> 
                                        <input type="date" name="tgl_hitung" id="tgl_hitung" class="form-control">
                                    </div>
                                </div>
                                <div class="row" style="margin-bottom: 15px;">
                                    <div class="col-3">
                                        <label for="tinggi"><b>Tinggi</b></label>
                                    </div>
                                    <div class="col-1"><b>:</b></div>
                                    <div class="col-8"> 
                                    <p class="form-control">
                                        <input type="number" name="tinggi" id="tinggi" style="border: none;" >
                                        <span style="margin-left: 43%;">cm</span>
                                    </p>
                                    </div>
                                </div>
                                <div class="row" style="margin-bottom: 15px;">
                                    <div class="col-3">
                                        <label for="berat"><b>Berat</b></label>
                                    </div>
                                    <div class="col-1"><b>:</b></div>
                                    <div class="col-8">
                                        <p class="form-control">
                                            <input type="number" name="berat" id="berat" style="border: none;">
                                            <span style="margin-left: 45%;">kg</span>                     
                                        </p>
                                    </div>
                                </div>
                                <div class="row" style="margin-bottom: 15px;">
                                    <div class="col-3">
                                        <label for="lingkar_kepala"><b>Lingkar Kepala</b></label>
                                    </div>
                                    <div class="col-1"><b>:</b></div>
                                    <div class="col-8">
                                        <p class="form-control">
                                            <input type="number" name="lingkar_kepala" id="lingkar_kepala" style="border: none;">
                                            <span style="margin-left: 43%;">cm</span>            
                                        </p>                   
                                    </div>
                                </div>
                                <div class="row" style="margin-bottom: 15px;">
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
                                            value="2">
                                            <label for="tidaknormal" class="form-check-label">Tidak Normal</label>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                </div>
                                <div class="row" style="margin-bottom: 15px;">
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
                                            value="2">
                                            <label for="tidaknormal" class="form-check-label">Tidak Normal</label>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                </div>
                                <div class="row" style="margin-bottom: 15px;">
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
                                            value="2">
                                            <label for="tidaknormal" class="form-check-label">Tidak Normal</label>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                </div>
                                <div class="row" style="margin-bottom: 15px;">
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
                                            value="2">
                                            <label for="tidaknormal" class="form-check-label">Tidak Normal</label>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                </div>
                                <div class="row" style="margin-bottom: 15px;">
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
                                            value="2">
                                            <label for="tidaknormal" class="form-check-label">Tidak Normal</label>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                </div>
                                <div class="row" style="margin-bottom: 15px;">
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
                                            value="2">
                                            <label for="tidaknormal" class="form-check-label">Tidak Normal</label>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col" colspan="3" style="margin-left: 240px;">
                                    <a href="{{ url('entry/InputImunisasi') }}" class="btn btn-main ml-3" role="button" aria-disabled="true">Kembali</a>

                                        <button class="btn btn-main" type="submit" style="margin-left: 15px;">Simpan</button>
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