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
                    <h1 class="text-center mt-5 mb-5"><b>DATA ANAK</b></h1>
                    <div class="container">
                        <div>
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success " role="alert">
                                <strong><p>{{ $message }}</p></strong>
                                <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif
                        </div>
                        <table id="dataanak" class="table table-striped table-bordered text-center">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>No KK</th>
                                    <th>NIK Anak</th>
                                    <th>Nama Anak</th>
                                    <th>Tempat, Tanggal Lahir</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Golongan Darah</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            @foreach ($anaks as $key => $anak)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $anak->no_kk }}</td>
                                <td>{{ $anak->nik_anak }}</td>
                                <td>{{ $anak->nama_anak }}</td>
                                <td>{{ $anak->tmp_anak}}, <br> {{ $anak->tgl_anak }}</td>
                                <td>{{ $anak->jenkel_anak }}</td>
                                <td>{{ $anak->golongan_darah }}</td>
                                <td>
                                    <div class="row">
                                        <div class="col-4">
                                            <a href="dataAnak/{{ $anak->nik_anak }}" class="btn btn-warning d-flex"><iconify-icon icon="fa:eye" width="20px" height="20px"></iconify-icon></a>
                                        </div>
                                        <div class="col-4">
                                            <a href="dataAnak/{{ $anak->nik_anak }}/edit" class="btn btn-info d-flex"><iconify-icon icon="akar-icons:edit" width="20px" height="20px"></iconify-icon></a>
                                        </div>
                                        <div class="col-4">
                                            <form id="delete-form" method="POST" action="dataAnak/{{ $anak->nik_anak }}">
                                                @csrf
                                                @method('delete')
                                                <div class="form-group">
                                                    <button class="btn btn-danger border-0 d-flex" onclick="return confirm('Are you sure you want to delete this post?')">
                                                        <span data-feather="x-circle"></span><iconify-icon icon="fluent:delete-24-filled" width="20px" height="20px"></iconify-icon>
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                            </div>
                        </table>
                        <a href="{{ url('pengelola') }}" class="btn btn-main" role="button" aria-disabled="true">Kembali</a>
                    </div>
            </div>
        </div>
        </div>
        
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
        $('#dataanak').DataTable();
    } );
    </script>
    </html>
