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
        <table id="inputimunisasi" class="table table-striped table-bordered text-center">
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
                <td width="30%">
                <div class="row d-flex">
                    <div class="col-12">
                        
                <a href="/entry/history"><button type="button" class="btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="History"><i class="fa-solid fa-clock-rotate-left"></i></button></a>
                        <a href="/entry/pertumbuhan/{{$anak->nik_anak}}"><button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Form Pertumbuhan"><i class="fa-solid fa-hands-holding-child"></i></button></a>
                        <a href="/entry/vaksin/{{$anak->nik_anak}}"><button type="button" class="btn btn-success" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Form Vaksin"><i class="fa-solid fa-syringe"></i></button></a>
                        <a href="/entry/vitamin/{{$anak->nik_anak}}"><button type="button" class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Form Vitamin"><i class="fa-solid fa-capsules"></i></button></a>
                        <a href="/entry/formSdidtk/{{$anak->nik_anak}}"><button type="button" class="btn btn-danger" style="background-color: #dc55d5; border-color: #dc55d5;" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Form SDIDTK"><i class="fa-solid fa-person"></i></button></a>
                        <a href="/entry/sdidtkAnak"><button type="button" class="btn btn-danger" style="background-color: #FFD700; border-color: #FFD700;" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Data SDIDTK"><i class="fa-solid fa-calendar"></i></button></a>
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
    
        <!-- Script-->   
        @include('template.script2')


        <!-- End of Script-->    
</body>
@include('sweetalert::alert')
<script> $(document).ready( function () {
    $('#inputimunisasi').DataTable();
} );
</script>
</html>