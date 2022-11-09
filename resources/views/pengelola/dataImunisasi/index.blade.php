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
        <h1 class="text-center mt-5 mb-5"><b>DATA IMUNISASI</b></h1>
        
        <div>
            @if ($message = Session::get('success'))
            <div class="alert alert-success " role="alert">
                <strong><p>{{ $message }}</p></strong>
                <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
        </div>
        <table id="dataimunisasi" class="table table-striped table-bordered text-center">
            <thead>
                <tr>
                    <th>NOMOR</th>
                    <th>KODE IMUNISASI</th>
                    <th>ID POSYANDU</th>
                    <th>KODE VAKSIN</th>
                    <th>KODE VITAMIN</th>
                    <th>NIP</th>
                    <th>NIK ANAK</th>
                    <th>KODE PERTUMBUHAN</th>
                    <th>TANGGAL IMUNISASI</th>

                </tr>
            </thead>
            @foreach ($imunisasis as $key => $imns)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$imns->kode_imunisasi}}</td>
                <td>{{$imns->id_posyandu}}</td>
                <td>{{$imns->kode_vaksin}}</td>
                <td>{{$imns->kode_vitamin}}</td>
                <td>{{$imns->nip}}</td>
                <td>{{$imns->nik_anak}}</td>
                <td>{{$imns->kode_pertumbuhan}}</td>
                <td>{{$imns->tgl_imunisasi}}</td>
            </tr>
            @endforeach
        </table>
        <a href="{{ url('pengelola') }}" class="btn btn-main" role="button" aria-disabled="true">Kembali</a>
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
@include('template.script2')
<!-- End of Script-->
</body>
<script> $(document).ready( function () {
    $('#dataimunisasi').DataTable();
} );
</script>
</html>