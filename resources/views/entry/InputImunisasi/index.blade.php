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

    <div class="container">
        <h1 class="text-center mt-5 mb-5"><b>INPUT IMUNISASI</b></h1>
        
        <div>
            @if ($message = Session::get('success'))
            <div class="alert alert-success " role="alert">
                <strong><p>{{ $message }}</p></strong>
                <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
              </div>
            @endif
        </div>
        <table id="inputimunisasi" class="table table-striped table-bordered text-center">
            <div class="row" style="color:black; font-family: Poppins;">
                <div class="col"><p style="font-weight: bold; text-transform:uppercase">
                    <i class="fa-solid fa-clock-rotate-left"></i> : History Imunisasi</p>
                </div>
                <div class="col"><p style="font-weight: bold; text-transform:uppercase">
                    <i class="fa-solid fa-hands-holding-child"></i> : Form Pertumbuhan</p>
                </div>
                <div class="col"><p style="font-weight: bold; text-transform:uppercase">
                    <i class="fa-solid fa-syringe"></i> : Form Vaksin</p>
                </div>
                <div class="col"><p style="font-weight: bold; text-transform:uppercase">
                    <i class="fa-solid fa-capsules"></i> : Form Vitamin</p>
                </div>
                <div class="col"><p style="font-weight: bold; text-transform:uppercase">
                    <i class="fa-solid fa-person"></i> : Form SDIDTK</p>
                </div>
                <div class="col"><p style="font-weight: bold; text-transform:uppercase">
                    <i class="fa-solid fa-calendar"></i> : Data SDIDTK</p>
                </div>
            </div>
                <br>
            <thead>
                <tr>
                    <th>No</th>
                    <th>No KK</th>
                    <th>NIK Anak</th>
                    <th>Nama Anak</th>
                    <th>Tempat, Tanggal Lahir</th>
                    <th>Jenis Kelamin</th>
                    <th>Golongan Darah</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            @foreach ($anaks as $key => $anak)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{ $anak->no_kk }}</td>
                <td>{{ $anak->nik_anak }}</td>
                <td>{{ $anak->nama_anak }}</td>
                <td>{{ $anak->tmp_anak}}, <br> {{ $anak->tgl_anak }}</td>
                <td>
                    {{ $anak->jenkel_anak == 'L' ? 'Laki-Laki' : 'Perempuan' }}
                </td>
                <td>{{ $anak->golongan_darah }}</td>
                <td width="25%">
                <div class="row d-flex">
                    <div class="col-12">

                        <a href="/entry/history"><button type="button" class="btn btn-primary"><i class="fa-solid fa-clock-rotate-left"></i></button>
                        <a href="/entry/pertumbuhan/{{$anak->nik_anak}}"><button type="button" class="btn btn-secondary"><i class="fa-solid fa-hands-holding-child"></i></button>
                        <a href="/entry/vaksin/{{$anak->nik_anak}}"><button type="button" class="btn btn-success"><i class="fa-solid fa-syringe"></i></button>
                        <a href="/entry/vitamin/{{$anak->nik_anak}}"><button type="button" class="btn btn-danger"><i class="fa-solid fa-capsules"></i></button>
                        <a href="/entry/formSdidtk"><button type="button" class="btn btn-danger" style="background-color: #FFD700; border-color: #FFD700;"><i class="fa-solid fa-person"></i></button>
                        <a href="/entry/sdidtkAnak"><button type="button" class="btn btn-danger" style="background-color: #dc55d5; border-color: #dc55d5;"><i class="fa-solid fa-calendar"></i></button>
                    </div>
                </div>
                </td>
            </tr>
            @endforeach
        </table>
        <a href="{{ url('entry') }}" class="btn btn-main" role="button" aria-disabled="true">Kembali</a>
        <br>
    </div>
                    <!-- /.container-fluid -->

                </div>
                <!-- End of Main Cont
    
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
    
        <!--Script--=
        @include('template.script2')
        <!-- End of Script-->    
</body>
<script> $(document).ready( function () {
    $('#inputimunisasi').DataTable();
} );
</script>

<script>

  $("[data-toggle='tooltip']").tooltip(); // Initialize Tooltip

</script>
</html>