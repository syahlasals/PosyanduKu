
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
                    <h1 class="text-center"><b>Edit Data</b></h1><br>
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
                            <form method="POST" action="{{ route('dataPetugas.update', $ptgs->nip) }}" id="myform">
                                @csrf
                                @method('PUT')
                                <div class="row" style="margin-bottom: 15px;">
                                    <div class="col-3">
                                        <label for="nip"><b>NIP</b></label>
                                    </div>
                                    <div class="col-1"><b>:</b></div>
                                    <div class="col-8">
                                        <input type="text" name="nip" id="nip" class="form-control" value="{{ $ptgs->nip }}" required="">
                                    </div>
                                </div>
                                <div class="row" style="margin-bottom: 15px;">
                                    <div class="col-3">
                                        <label for="nama"><b>NAMA</b></label>
                                    </div>
                                    <div class="col-1"><b>:</b></div>
                                    <div class="col-8"> 
                                        <input type="text" name="nama_petugas" id="nama_petugas" class="form-control" value="{{ $ptgs->nama_petugas }}" required="">
                                    </div>
                                </div>
                                <div class="row" style="margin-bottom: 15px;">
                                    <div class="col-3">
                                        <label for="jenkel_petugas"><b>JENIS KELAMIN</b></label>
                                    </div>
                                    <div class="col-1"><b>:</b></div>
                                    <div class="col-8">
                                        <div class="form-check">
                                        <input type="radio" class="form-check-input" name="jenkel_petugas" id="lakilaki"
                                            value="L" {{ $ptgs->jenkel_petugas == 'L' ? 'checked' : '' }}> 
                                        <label for="lakilaki" class="form-check-label">Laki-laki</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <input type="radio" class="form-check-input" name="jenkel_petugas" id="perempuan"
                                            value="P" {{ $ptgs->jenkel_petugas == 'P' ? 'checked' : '' }}> 
                                        <label for="perempuan" class="form-check-label">Perempuan</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row" style="margin-bottom: 15px;">
                                    <div class="col-3">
                                        <label for="jabatan"><b>JABATAN</b></label>
                                    </div>
                                    <div class="col-1"><b>:</b></div>
                                    <div class="col-8">
                                        <input type="text" name="jabatan" id="jabatan" class="form-control" value="{{ $ptgs->jabatan }}" required="">
                                    </div>
                                </div>
                                <div class="row" style="margin-bottom: 15px;">
                                    <div class="col-3">
                                        <label for="alamat_petugas"><b>ALAMAT</b></label>
                                    </div>
                                    <div class="col-1"><b>:</b></div>
                                    <div class="col-8">
                                        <input type="text" name="alamat_petugas" id="alamat_petugas" class="form-control" value="{{ $ptgs->alamat_petugas }}" required="">
                                    </div>
                                </div>
                                <button class="btn btn-main" type="submit">Save</button>
                                {{-- <button class="btn btn-main" type="btn" href="{{ url('/pengelola/dataPetugas') }}">Kembali</button> --}}
                                <a href="{{ url('/pengelola/dataPetugas') }}" class="btn btn-main" role="button" aria-disabled="true">Kembali</a>
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

