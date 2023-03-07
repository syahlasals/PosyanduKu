<!DOCTYPE html>
<html lang="en">

<head>
    <title>Aktivitas Login</title>
    @include('template.head')
</head>
<?php session_start(); ?>
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
                    <h1 class="text-center mt-5 mb-5"><b>AKTIVITAS LOGIN</b></h1>
                    <div class="container">
                        <table id="logactivity" class="table table-striped table-bordered text-center">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Deskripsi</th>
                                    <th>Diperbaharui Oleh</th>
                                    <th>Waktu Aksi</th>
                                </tr>
                            </thead>
                            @foreach ($logsList as $key => $log)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $log->deskripsi }}</td>
                                <td>{{ $log->updated_by == '1' ? 'Petugas Entry' : 'Petugas Pengelola' }}</td>
                                <td>{{ $log->action_date }}</td>
                            </tr>
                            @endforeach
                            </div>
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

<!-- Logout Modal-->
@include('template.modalLogout')

<!--Script-->
@include('template.script3')
<!-- End of Script-->
 
@include('sweetalert::alert')

    </body>
    </html>

