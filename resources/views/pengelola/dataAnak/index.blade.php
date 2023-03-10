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
                    <h1 class="text-center mt-5 mb-5"><b>DATA ANAK</b></h1>
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <th>
                                    <a class="card" style="text-decoration: none; color:black; font-weight:bold">
                                            <span class=" d-flex align-items-center justify-content-center text-center p-2">Perempuan : {{ $gender[0]->gender }} Orang</span>
                                    </a>
                                </th>
                            </div>
                            <div class="col">
                                <th>
                                    <a class="card" style="text-decoration: none; color:black; font-weight:bold">
                                            <span class=" d-flex align-items-center justify-content-center text-center p-2">Laki-Laki : {{ $genderdua[0]->genderdua }} Orang</span>
                                    </a>
                                </th>
                            </div>

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

                        
                        

                        <!-- <table class="table table-borderless text-center">
                        <tr>
                            <th>
                                <a class="card table-filter" href="{{ url('pengelola/goldaro') }}">
                                        <span class=" d-flex align-items-center justify-content-center text-center p-2">Golongan Darah O</span>
                                </a>
                            </th>
                            <th>
                                <a class="card table-filter" href="{{ url('pengelola/goldara') }}">
                                        <span class=" d-flex align-items-center justify-content-center text-center p-2">Golongan Darah A</span>
                                </a>
                            </th>
                            <th>
                                <a class="card table-filter" href="{{ url('pengelola/goldarb') }}">
                                        <span class=" d-flex align-items-center justify-content-center text-center p-2">Golongan Darah B</span>
                                </a>
                            </th>
                            <th>
                                <a class="card table-filter" href="{{ url('pengelola/goldarab') }}">
                                        <span class=" d-flex align-items-center justify-content-center text-center p-2">Golongan Darah AB</span>
                                </a>
                            </th>
                        </tr>
                        </table> -->

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