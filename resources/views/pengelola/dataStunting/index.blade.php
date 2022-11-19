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
       @include('template.sidepengelola')
    <!--End Sidebar-->
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!--Topbar-->
                @include('template.nav')
                <!--End of Topbar-->

    <div class="container">
        <h1 class="text-center mt-5 mb-5"><b>DATA STUNTING</b></h1>

        <table id="datastunting" class="table table-striped table-bordered text-center" border="1">
            <thead>
                <tr>
                    <th>RW</th>
                    <th>RT</th>
                    <th>Jumlah Balita Terdaftar</th>
                    <th>Jumlah Balita Stunting</th>
                    {{-- <th>Prevalensi Balita Diukur (%)</th>
                    <th>Prevalensi Balita Stunting (%)</th>   --}}
                </tr>
            </thead>
            <tr>
                <td>01</td>
                <td>02</td>
                <td>{{ $anaks }}</td>
                <td>1122</td>
                {{-- <td>20%</td>
                <td>50%</td> --}}
            </tr>
            <tr>
                <td colspan="4"><b>Total : {{ $anaks }}</b></td>
                {{-- <td>36,7%</td>
                <td>76,3%</td> --}}
            </tr>
        </table>

        <div class="row">
            <div class="col" colspan="3">
                <a href="{{ url('entry/InputImunisasi') }}" class="btn btn-main ml-3" role="button" aria-disabled="true">Kembali</a>
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
<script> 
    $(document).ready( function () {
        $('#datastunting').DataTable();
    } );
    </script>
</html>