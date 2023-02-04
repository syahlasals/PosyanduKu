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
                                    <th>Usia</th>
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
                                <td>{{ $anak->tahun }} th {{ $anak->bulan }} bln</td>
                                <td>
                                <div class="row d-flex">
                                    <div class="col-16">
                                        <a href="dataAnak/{{ $anak->nik_anak }}"><button type="button" class="btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Detail"><i class="fa-solid fa-eye btn-h"></i></button></a>
                                        <a href="dataAnak/sdidtkAnak/{{$anak->nik_anak}}"><button type="button" class="btn btn-info" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Data SDIDTK"><i class="fa-solid fa-calendar btn-h" style="color: #ffffff;"></i></button></a>
                                        <a href="dataAnak/{{ $anak->nik_anak }}/edit"><button type="button" class="btn btn-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit"><i class="fa-solid fa-pen-to-square btn-h" style="color: #ffffff;"></i></button></a>
                                        @csrf
                                        @method('delete')
                                            <button type="button" class="delete btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Hapus" data-id="{{ $anak->nik_anak }}"><i class="fa-solid fa-trash btn-h"></i></button>
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