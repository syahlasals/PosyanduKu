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
        <!-- <div>
            @if ($message = Session::get('success'))
            <div class="alert alert-success " role="alert">
                <strong><p>{{ $message }}</p></strong>
                <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
              </div>
            @endif
        </div> -->
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
                <td>{{$ptgs->jenkel_petugas}}</td>
                <td>{{$ptgs->jabatan}}</td>
                <td>{{$ptgs->alamat_petugas}}</td>
                <td>
                <div class="row justify-content">
                <div class="col-3">         
                <form action="{{ route('hapuspetugas') }}">
                    <input type="hidden" name= "nip" value="{{ $ptgs->nip }}">
                    <button type="submit" class="btn btn-danger" style="color:#000000;"><i class="fas fa-trash-alt"></i></button>
                </form>
                </div>
                <div class="col-3">
                <a href="{{ route('edit', $ptgs->nip) }}" class="btn btn-warning" style="color:#000000;"><i class="fas fa-pencil-alt"></i></a>
                </div>
                </td>
                </div>
            </tr>
            @endforeach
        </table>
        <a href="{{ url('pengelola') }}" class="btn btn-main" role="button" aria-disabled="true">Kembali</a>
        </div>
    </div>
</div>
<!-- End of Main Content -->
</div>
<!-- End of Main Content -->

<!-- Footer -->
@include('template.footer')
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- Logout Modal-->
@include('template.modalLogout')

<!--Script-->
@include('template.script2')
<!-- End of Script-->

@include('sweetalert::alert')

</body>
<script> $(document).ready( function () {
    $('#datapetugas').DataTable();
} );
</script>
</html>