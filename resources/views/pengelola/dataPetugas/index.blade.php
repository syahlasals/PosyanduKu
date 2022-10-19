<!DOCTYPE html>
<html lang="en">

<head>
    <title>Data Anak</title>
    @include('template.head')
</head>
<body>
<div id="wrapper">
       @include('template.sidepengelola')
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                @include('template.nav')
    <div class="container">
        <h1 class="text-center mb-5 mt-5"><b>DATA PETUGAS</b></h1>
        
        <div>
            @if ($message = Session::get('success'))
            <div class="alert alert-success " role="alert">
                <strong><p>{{ $message }}</p></strong>
                <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
              </div>
            @endif
        </div>
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
            @include('template.footer')
        </div>
    </div>
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>
</body>
<script> $(document).ready( function () {
    $('#datapetugas').DataTable();
} );
</script>
</html>