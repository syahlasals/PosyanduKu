
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
                    <h1 class="text-center"><b>Masukan Data Vaksin</b></h1><br>
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
                            <form method="POST" action="/entry/vaksin" id="myform">
                                @csrf
                                <div class="row" style="margin-bottom: 15px;">
                                    <div class="col-3">
                                        <label for="kode_vaksin"><b>Kode Vaksin</b></label>
                                    </div>
                                    <div class="col-1"><b>:</b></div>
                                    <div class="col-8">
                                        <input type="text" name="kode_vaksin" id="kode_vaksin" class="form-control">
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
                                        <label for="janis_vaksin"><b>Jenis Vaksin</b></label>
                                    </div>
                                    <div class="col-1"><b>:</b></div>
                                    <div class="col-8">
                                        <select class="form-select" aria-label="Default select example" style="border-radius: 30px; width: 250px;" name="jenis_vaksin" id="jenis_vaksin">
                                            <option value="HB 0">HB 0</option>
                                            <option value="BCG">BCG</option>
                                            <option value="Polio">Polio</option>
                                            <option value="DPT-HB-Hib 1">DPT-HB-Hib 1</option>
                                            <option value="Polio 2">Polio 2</option>
                                            <option value="DPT-HB-Hib 2">DPT-HB-Hib 2</option>
                                            <option value="Polio 3">Polio 3</option>
                                            <option value="DPT-HB-Hib 3">DPT-HB-Hib 3</option>
                                            <option value="Polio 4">Polio 4</option>
                                            <option value="IPV">IPV</option>
                                            <option value="Campak">Campak</option>
                                        </select>                                    
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col" colspan="3">
                                        <button class="btn btn-main" type="submit" style="margin-left: 260px;">Simpan</button>
                                        <a href="vaksin" class="btn btn-main ml-3" role="button" aria-disabled="true">Kembali</a>
                                    </div>
                                </div>

                                <!-- {{-- <a href="{{ url('entry/vaksin') }}" class="btn btn-main" type="submit">Simpan</a> --}} -->
                                <!-- {{-- <a href="{{ url('entry/InputImunisasi') }}" class="btn btn-main" role="button" aria-disabled="true">Kembali</a> --}} -->
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
    @include('template.modalLogout')

    <!--Script-->
    @include('template.script')
    <!-- End of Script-->

</body>

</html>
