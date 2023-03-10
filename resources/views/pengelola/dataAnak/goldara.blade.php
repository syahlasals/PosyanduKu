<!DOCTYPE html>
<html lang="en">

<head>
    @include('template.head')
</head>
<?php session_start(); ?>
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

        <div class="container-fluid">
                    <h1 class="text-center mt-5"><b>DATA ANAK</b></h1>
                    <h5 class="text-center"><b>Golongan Darah A</b></h5>
                    <div class="container">

                    <div class="row">
                        <div class="col">
                        <div class="dropdown-center mt-3 mb-3">
                            <button class="btn btn-white btn-md dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="border-color: #647BB1; color:black;">
                                        Lihat Golongan Darah
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item {{ Request::is('pengelola/goldara') ? 'active' : '' }}" href="{{ url('pengelola/goldara') }}">A</a></li>
                                        <li><a class="dropdown-item {{ Request::is('pengelola/goldarb') ? 'active' : '' }}" href="{{ url('pengelola/goldarb') }}">B</a></li>
                                        <li><a class="dropdown-item {{ Request::is('pengelola/goldarab') ? 'active' : '' }}" href="{{ url('pengelola/goldarab') }}">AB</a></li>
                                        <li><a class="dropdown-item {{ Request::is('pengelola/goldaro') ? 'active' : '' }}" href="{{ url('pengelola/goldaro') }}">O</a></li>
                                    </ul>
                            </div>
                        </div>
                    </div>

                        <table id="dataanak" class="table table-striped table-bordered text-center">
                            
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>NIK Anak</th>
                                    <th>Nama Anak</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Golongan Darah</th>
                                    <th>Usia</th>
                                </tr>
                            </thead>
                            @foreach ($anakgoldara as $key => $anak)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $anak->nik_anak }}</td>
                                <td>{{ $anak->nama_anak }}</td>
                                <td>
                                    {{ $anak->jenkel_anak == 'L' ? 'Laki-Laki' : 'Perempuan' }}
                                </td>
                                <td>{{ $anak->golongan_darah }}</td>
                                <td>{{ $anak->tahun }} th {{ $anak->bulan }} bln</td>
                            </tr>
                            @endforeach
                            </div>
                        </table>
                        <a href="{{ url('pengelola/dataAnak') }}" class="btn btn-main" role="button" aria-disabled="true">Kembali</a>
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
    <script>
        $('.delete').click( function(){
            var anak = $(this).attr('data-id');
            swal({
            title: "Yakin?",
            text: "Kamu akan kehilangan data!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
            })
            .then((willDelete) => {
                
            if (willDelete) {
                $.ajax({
                    type: 'GET',
                    url: '/pengelola/delete/dataAnak/'+ $(this).attr('data-id'),
                    success: swal("Data berhasil di hapus", {
                icon: "success",
                }) ,
                })
                window.location.reload();
            } else {
                swal("Data tidak jadi dihapus");
            }
    });
        });
    </script>

    <script> 
    $(document).ready( function () {
        $('#dataanak').DataTable();
    } );
    </script>
    </html>