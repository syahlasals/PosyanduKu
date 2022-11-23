<!DOCTYPE html>
<html lang="en">

<head>
    <title>Data Posyandu</title>
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

    <div class="container-fluid">
        <h1 class="text-center mt-5 mb-5"><b>Rekap Anak</b></h1>
        
        <div>
            @if ($message = Session::get('success'))
            <div class="alert alert-success " role="alert">
                <strong><p>{{ $message }}</p></strong>
                <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
        </div>
        <table id="dataimunisasi" class="table table-striped table-bordered text-center" border="1">
            <thead>
                <tr>
                    <th>Nomor</th>
                    <th>Nama Posyandu</th>
                    <th>NIK Anak</th>
                    <th>Nama Anak</th>
                    <th>Tanggal Imunisasi</th>
                    <th>Vaksin</th>
                    <th>Vitamin</th>
                    <th>Status Pertumbuhan</th>  
                </tr>
            </thead>
            @foreach ($imunisasiList as $data)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $data->profiles->nama_posyandu }}</td>
                <td>{{ $data->anaks->nik_anak }}</td>
                <td>{{ $data->anaks->nama_anak }}</td>
                <td>{{ $data->tgl_imunisasi }}</td>
                <td>{{ $data->vaksins->jenis_vaksin }}</td>
                <td>{{ $data->vitamins->jenis_vitamin }}</td>
                <td>{{ $data->pertumbuhanstatuss->status_penyimpangan }}</td>
            </tr>
            @endforeach
        </table>
        <a href="{{ url('pengelola') }}" class="btn btn-main" role="button" aria-disabled="true">Kembali</a>

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
</body>
<script> 
$(document).ready( function () {
    $('#dataimunisasi').DataTable();
} );
</script>
</html>