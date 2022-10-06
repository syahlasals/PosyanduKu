
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
                    <h1 class="text-center"><b>Masukan Data Vitamin</b></h1><br>
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
                            <form method="POST" action="/entry/vitamin" id="myform">
                                @csrf
                                <div class="row" style="margin-bottom: 15px;">
                                    <div class="col-3">
                                        <label for="kode_vitamin"><b>Kode Vitamin</b></label>
                                    </div>
                                    <div class="col-1"><b>:</b></div>
                                    <div class="col-8">
                                        <input type="number" name="kode_vitamin" id="kode_vitamin" class="form-control">
                                    </div>
                                </div>
                                <div class="row" style="margin-bottom: 15px;">
                                    <div class="col-3">
                                        <label for="nip"><b>NIP</b></label>
                                    </div>
                                    <div class="col-1"><b>:</b></div>
                                    <div class="col-8"> 
                                        <input type="number" name="nip" id="nip" class="form-control">
                                    </div>
                                </div>
                                <div class="row" style="margin-bottom: 15px;">
                                    <div class="col-3">
                                        <label for="nik_anak"><b>NIK Anak</b></label>
                                    </div>
                                    <div class="col-1"><b>:</b></div>
                                    <div class="col-8">
                                        <input type="number" name="nik_anak" id="nik_anak" class="form-control">
                                    </div>
                                </div>
                                <div class="row" style="margin-bottom: 15px;">
                                    <div class="col-3">
                                        <label for="janis_vitamin"><b>Jenis Vitamin</b></label>
                                    </div>
                                    <div class="col-1"><b>:</b></div>
                                    <div class="col-8">
                                        <select class="form-select" aria-label="Default select example" style="border-radius: 30px; width: 250px;" name="jenis_vitamin" id="jenis_vitamin">
                                            <option selected>Pilih Vitamin</option>
                                            <option value="Kapsul Merah">Kapsul Merah</option>
                                            <option value="Kapsul Biru">Kapsul Biru</option>
                                        </select>                                    
                                    </div>
                                </div>
                                <button class="btn btn-main" type="submit">Simpan</button>
                                <a href="{{ url('entry') }}" class="btn btn-main" role="button" aria-disabled="true">Kembali</a>
                            </form>
                        </div><br>
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