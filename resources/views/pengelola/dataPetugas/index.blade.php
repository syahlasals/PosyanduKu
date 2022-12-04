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

    <div class="container">
        <h1 class="text-center mb-5 mt-5"><b>DATA PETUGAS</b></h1>
        <table id="datapetugas" class="table table-striped table-bordered text-center">
            <thead>
                <tr>
                    <th>NOMOR</th>
                    <th>NIP</th>
                    <th>NAMA</th>
                    <th>JENIS KELAMIN</th>
                    <th>JABATAN</th>
                    <th>ALAMAT</th>
                    <th>AKSI</th>

                </tr>
            </thead>
            @foreach ($petugass as $key => $ptgs)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$ptgs->nip}}</td>
                <td>{{$ptgs->nama_petugas}}</td>
                <td>
                    {{ $ptgs->jenkel_petugas == 'L' ? 'Laki-Laki' : 'Perempuan' }}
                </td>
                <td>{{$ptgs->jabatan}}</td>
                <td>{{$ptgs->alamat_petugas}}</td>
                <td>
                    <div class="row d-flex">
                        <div class="col-16">
                            <a href="{{ route('edit', $ptgs->nip) }}"><button type="button" class="btn btn-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit"><i class="fas fa-pencil-alt"></i></button></a>
                            <button type="button" class="delete btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Hapus" data-id="{{ $ptgs->nip }}"><i class="fas fa-trash-alt"></i></button>
                    </div>
                </td>
            </tr>
            @endforeach
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

@include('sweetalert::alert')

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
<i class="fas fa-angle-up"></i>
</a>
</body>

<script scr="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    </body>
    <script>
        $('.delete').click( function(){
            var ptgs = $(this).attr('data-id');
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
                    url: '/pengelola/hapuspetugas/dataPetugas?nip='+$(this).attr('data-id'),
                    success: swal("Data berhasil di hapus", {
                icon: "success",
                })
                })
                console.log( "nip=" + $(this).attr('data-id'))
                window.location.reload();
            } else {
                swal("Data tidak jadi dihapus");
            }
    });
        });
    </script>

<script> $(document).ready( function () {
    $('#datapetugas').DataTable();
} );
</script>
</html>