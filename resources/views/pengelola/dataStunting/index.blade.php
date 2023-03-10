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

        <div class="row">
            <div class="col">
                <a href=""class="card card-ap">
                    <div class="card-body">
                        <span class=" d-flex align-items-center justify-content-center mb-3 text-center"><b>Jumlah Balita Terdaftar</b></span> 
                        <h1 class="justify-content-center">{{ $semua }}</h1>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="" class="card card-ip">
                    <div class="card-body">
                        <span class=" d-flex align-items-center justify-content-center mb-3 text-center"><b>Jumlah Balita Normal</b></span> 
                        <h1 class="justify-content-center">{{ $normal }}</h1>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="" class="card card-ap ">
                    <div class="card-body">
                        <span class=" d-flex align-items-center justify-content-center mb-3 text-center"><b>Jumlah Balita Gejala Stunting</b></span> 
                        <h1 class="justify-content-center">{{ $giziBuruk }}</h1>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="" class="card card-ip">
                    <div class="card-body">
                        <span class=" d-flex align-items-center justify-content-center mb-3 text-center"><b>Jumlah Balita Stunting</b></span> 
                        <h1 class="justify-content-center">{{ $stunting }}</h1>
                    </div>
                </a>
            </div>
        </div>
        <br>
        <table id="datastunting" class="table table-striped table-bordered text-center">
            <thead>
                <tr>
                    <th>Jumlah Balita Terdaftar</th>
                    <th>Jumlah Balita Normal</th>
                    <th>Jumlah Balita Gejala Stunting</th>
                    <th>Jumlah Balita Stunting</th>
                </tr>
            </thead>
            <tr>
                <td>{{ $semua }}</td>
                <td>{{ $normal }}</td>
                <td>{{ $giziBuruk }}</td>
                <td>{{ $stunting }}</td>
            </tr>
        </table>

        <div class="row">
            <div class="col" colspan="3">
                <a href="{{ url('pengelola') }}" class="btn btn-main ml-3" role="button" aria-disabled="true">Kembali</a>
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