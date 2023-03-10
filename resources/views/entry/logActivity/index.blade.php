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

                <div class="container-fluid">
                    <h1 class="text-center mt-5 mb-5"><b>AKTIVITAS LOGIN</b></h1>
                    <div class="container">
                    <div class="card">
                        <h5 class="card-header" style="background-color: #e7f1ff; color:#2f6ee6;">AKTIVITAS LOGIN</h5>
                        <div class="card-body" style="margin-left: 100px;">
                        <p class="card-text">
                            <table>
                                <div class="row">
                                <tr>
                                    <th class="col-4 text-center"><u>Deskripsi</th></u>
                                    <th class="col-4 text-center"><u>Diperbaharui Oleh</th></u>
                                    <th class="col-4 text-center"><u>Waktu Aksi</th></u>
                                </tr>
                            </thead>
                            </div>
                            <div class="row">
                            @foreach ($logsList as $key => $log)
                            <tr>
                            </thead>
                                <td class="col-4 text-center text-align">{{ $log->deskripsi }}</td>
                                <td class="col-4 text-center">{{ $log->updated_by == '1' ? 'Petugas Entry' : 'Petugas Pengelola' }}</td>
                                <td class="col-4 text-center">{{ $log->action_date }}</td>
                            </tr>
                            @endforeach
                            </div>
                            </table>
                        <!-- <table id="logactivity" class="table table-striped table-bordered text-center">
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
                        </table> -->
                    </div>
                </div>
                <br>
                <a href="{{ url('entry') }}" class="btn btn-main" role="button" aria-disabled="true">Kembali</a>
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
        @include('template.script3')


        <!-- End of Script-->    
</body>
@include('sweetalert::alert')
</html>