<!DOCTYPE html>
<html lang="en">

<head>
    <title>Data Posyandu</title>
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
                    <h1 class="text-center mt-5 mb-5"><b>DATA ANAK</b></h1>
                    <div class="container">
                        <table id="dataanak" class="table table-striped table-bordered text-center">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>NIK Anak</th>
                                    <th>Nama Anak</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            @foreach ($anaks as $key => $anak)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $anak->nik_anak }}</td>
                                <td>{{ $anak->nama_anak }}</td>
                                <td>
                                    {{ $anak->jenkel_anak == 'L' ? 'Laki-Laki' : 'Perempuan' }}
                                </td>
                                <td width="20%">
                                    <div class="row d-flex">
                                        <div class="col-4">
                                            <a href="dataAnak/{{ $anak->nik_anak }}" class="btn btn-warning d-flex"><iconify-icon icon="fa:eye" width="20px" height="20px"></iconify-icon></a>
                                        </div>
                                        <div class="col-4">
                                            <a href="dataAnak/{{ $anak->nik_anak }}/edit" class="btn btn-info d-flex"><iconify-icon icon="akar-icons:edit" width="20px" height="20px">
                        
                                            </iconify-icon></a>
                                        </div>
                                        <div class="col-4">
                                            <!-- <form id="delete-form" method="POST"> -->
                                                <!-- @csrf
                                                @method('delete') -->
                                                <div class="form-group">
                                                    <button class="delete btn btn-danger" data-id="{{ $anak->nik_anak }}">
                                                        <span data-feather="x-circle"></span><iconify-icon icon="fluent:delete-24-filled" width="20px" height="20px"></iconify-icon>
                                                    </button>
                                                </div>
                                            <!-- </form> -->
                                        </div>
                                    </div>
                                </td>
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
@include('template.script2')
<!-- End of Script-->
 
@include('sweetalert::alert')

<script scr="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

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