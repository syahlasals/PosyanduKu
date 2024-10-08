

<!DOCTYPE html>
<html lang="en">

<head>
    @include('template.head')
</head>

<body id="page-top">
@include('template.load')
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
                    <h1 class="text-center"><b>Masukan Data Vitamin</b></h1><br><br>
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
                            @if (Session::has('tglvitamin'))
                                <div class="alert alert-danger">{{ Session::get('tglvitamin') }}</div>
                            @endif
                            <form method="POST" action="/store/vitamin" id="myform">
                                @csrf
                               
                                <div class="row" style="margin-bottom: 15px;">
                                    <div class="col-3">
                                        <label for="nik_anak"><b>NIK Anak</b></label>
                                    </div>
                                    <div class="col-1"><b>:</b></div>
                                    <div class="col-8">
                                        <input type="text" name="nik_anak" id="nik_anak" class="form-control" value={{$nik_anak}} disabled>
                                    </div>
                                    <input type="hidden" name="nik_anak" id="nik_anak" class="form-control" value={{$nik_anak}}>
                                </div>
                                <div class="row" style="margin-bottom: 15px;">
                                    <div class="col-3">
                                        <label for="nama_anak"><b>Nama Anak</b></label>
                                    </div>
                                    <div class="col-1"><b>:</b></div>
                                    <div class="col-8">
                                        <input type="text" name="nama_anak" id="nama_anak" class="form-control"value="{{$nama_anak}}" disabled>
                                    </div>
                                    <input type="hidden" name="nama_anak" id="nama_anak" class="form-control" value={{$nama_anak}}>
                                </div>
                                <div class="row">
                                    <div class="col-3">
                                        <label for="tgl_vaksin"><b>Riwayat Vitamin</b></label>
                                        </div>
                                        <div class="col-1"><b> :</b></div>
                                        <div class="col-3">
                                    <div class="y" style="width:auto;">
                                            <p>@foreach ($vitamins as $key => $vitamin)
                                                    {{ $vitamin->tgl_vitamin ->format('d F Y')}} <br>
                                                @endforeach
                                            </p>
                                            </div>
                                    </div> 
                                    <div class="col-4">
                                    <div class="y" style="width:auto;">
                                            <p>@foreach ($vitamins as $key => $vitamin)
                                                    {{ $vitamin->jenis_vitamin }}   <br>                        
                                                @endforeach
                                            </p>
                                            </div>
                                    </div>    
                                    </div>    
                                <div class="row" style="margin-bottom: 15px;">
                                    <div class="col-3">
                                        <label for="tgl_vitamin"><b>Tanggal Imunisasi</b></label>
                                    </div>
                                    <div class="col-1"><b>:</b></div>
                                    <div class="col-8"> 
                                        <input type="date" name="tgl_vitamin" id="tgl_vitamin" class="form-control" required>
                                    </div>
                                </div>
                                <div class="row" style="margin-bottom: 15px;">
                                    <div class="col-3">
                                        <label for="janis_vitamin"><b>Jenis Vitamin</b></label>
                                    </div>
                                    <div class="col-1"><b>:</b></div>
                                    <div class="col-8">
                                        <select class="form-select" aria-label="Default select example" style="border-radius: 30px; width: 250px;" name="jenis_vitamin" id="jenis_vitamin">
                                            <option value="Kapsul Merah">Kapsul Merah</option>
                                            <option value="Kapsul Biru">Kapsul Biru</option>
                                        </select>                                    
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col" colspan="3" style="margin-left: 240px;">
                                    <a href="{{ url('entry/InputImunisasi') }}" class="btn btn-main ml-3" role="button" aria-disabled="true">Kembali</a>
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

    @include('sweetalert::alert')
    <!-- End of Script-->


</body>

</html>