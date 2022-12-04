
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
                <div class="container-fluid"><br>
                    <h1 class="text-center"><b>Status Penyimpangan</b></h1><br><br>
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
                            <form method="POST" action="/stores/statusPenyimpangan" id="myform" style="margin-top: 15px; margin-bottom: 15px;">
                                @csrf
                                <div class="row" style="margin-bottom: 15px;">
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
                                            <label for="tgl_hitung"><b>Tanggal Imunisasi</b></label>
                                        </div>
                                        <div class="col-1"><b>:</b></div>
                                        <div class="col-8"> 
                                            <input type="date" name="tgl_hitung" id="tgl_hitung" value="{{ $tgl_hitung->tgl_hitung }}" class="form-control" disabled>
                                            <input type="hidden" name="tgl_hitung" id="tgl_hitung" value="{{ $tgl_hitung->tgl_hitung }}" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row" style="margin-bottom: 15px;">
                                        <div class="col-3">
                                            <label for="status_penyimpangan"><b>Status Penyimpangan</b></label>
                                        </div>
                                        <div class="col-1"><b>:</b></div>
                                        <div class="col-8">
                                            <select class="form-select" aria-label="Default select example" style="border-radius: 30px; width: 250px;" name="status_penyimpangan" id="status_penyimpangan">
                                                <option value="Normal">Normal</option>
                                                <option value="Stunting">Stunting</option>
                                                <option value="Gejala Stunting">Gejala Stunting</option>
                                            </select>                                    
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

    @include('sweetalert::alert')

</body>

</html>







