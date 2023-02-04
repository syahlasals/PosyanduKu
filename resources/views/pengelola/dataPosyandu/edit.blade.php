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

                <!-- Begin Page Content -->
                <div class="container-fluid"><br>
                    <h1 class="text-center"><b>Perbaharui Data Posyandu</b></h1><br><br>
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
                            <form method="POST" action="{{ route('dataPosyandu.update', $prfl->id_posyandu) }}" id="myform">
                                @csrf
                                @method('PUT')
                                    <input type="hidden" name="id_posyandu" id="id_posyandu" class="form-control" value="{{ $prfl->id_posyandu }}">
                                <div class="row" style="margin-bottom: 15px;">
                                    <div class="col-3">
                                        <label for="nama_posyandu"><b>Nama Posyandu</b></label>
                                    </div>
                                    <div class="col-1"><b>:</b></div>
                                    <div class="col-8">
                                        <input type="text" name="nama_posyandu" id="nama_posyandu" class="form-control" value="{{ $prfl->nama_posyandu }}" disabled>
                                        <input type="hidden" name="nama_posyandu" id="nama_posyandu" class="form-control" value="{{$prfl ->nama_posyandu}}">
                                    </div>
                                </div>
                                <div class="row" style="margin-bottom: 15px;">
                                    <div class="col-3">
                                        <label for="alamat_posyandu"><b>Alamat Posyandu</b></label>
                                    </div>
                                    <div class="col-1"><b>:</b></div>
                                    <div class="col-8"> 
                                        <input type="text" name="alamat_posyandu" id="alamat_posyandu" class="form-control" value="{{ $prfl->alamat_posyandu }}">
                                    </div>
                                </div>
                                <div class="row" style="margin-bottom: 15px;">
                                    <div class="col-3">
                                        <label for="nama_rt"><b>Nama RT</b></label>
                                    </div>
                                    <div class="col-1"><b>:</b></div>
                                    <div class="col-8">
                                        <input type="text" name="nama_rt" id="nama_rt" class="form-control" value="{{ $prfl->nama_rt }}">
                                    </div>
                                </div>
                                <div class="row" style="margin-bottom: 15px;">
                                    <div class="col-3">
                                        <label for="nama_rw"><b>Nama RW</b></label>
                                    </div>
                                    <div class="col-1"><b>:</b></div>
                                    <div class="col-8">
                                        <input type="text" name="nama_rw" id="nama_rw" class="form-control" value="{{ $prfl->nama_rw }}">                        
                                    </div>
                                </div>
                                <div class="row" style="margin-bottom: 15px;">
                                    <div class="col-3">
                                        <label for="ketua"><b>Ketua Posyandu</b></label>
                                    </div>
                                    <div class="col-1"><b>:</b></div>
                                    <div class="col-8">
                                        <input type="text" name="ketua" id="ketua" class="form-control" value="{{ $prfl->ketua }}">                        
                                    </div>
                                </div>
                                <div class="row" style="margin-bottom: 15px;">
                                    <div class="col-3">
                                        <label for="sekretaris"><b>Sekretaris</b></label>
                                    </div>
                                    <div class="col-1"><b>:</b></div>
                                    <div class="col-8">
                                        <input type="text" name="sekretaris" id="sekretaris" class="form-control" value="{{ $prfl->sekretaris }}">                        
                                    </div>
                                </div>
                                <div class="row" style="margin-bottom: 15px;">
                                    <div class="col-3">
                                        <label for="bendahara"><b>Bendahara</b></label>
                                    </div>
                                    <div class="col-1"><b>:</b></div>
                                    <div class="col-8">
                                        <input type="text" name="bendahara" id="bendahara" class="form-control" value="{{ $prfl->bendahara }}">                        
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col" colspan="3" style="margin-left: 240px;">
                                    <a href="{{ url('/pengelola/dataPosyandu') }}" class="btn btn-main ml-3" role="button" aria-disabled="true">Kembali</a>
                                    <button class="btn btn-main" type="submit" style="margin-left: 15px;">Simpan</button>
                                    </div>
                                </div>
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