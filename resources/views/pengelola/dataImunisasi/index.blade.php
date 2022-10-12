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
<body>
    <div class="container"><br>
        <h1 class="text-center" >DATA IMUNISASI</h1>
        <br>
        <br><br>
        <div>
            @if ($message = Session::get('success'))
            <div class="alert alert-success " role="alert">
                <strong><p>{{ $message }}</p></strong>
                <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
              </div>
            @endif
        </div>
        <table id="dataimunisasi" class="table table-striped table-bordered text-center">
            <thead>
                <tr>
                    <th>NOMOR</th>
                    <th>KODE IMUNISASI</th>
                    <th>ID POSYANDU</th>
                    <th>KODE VAKSIN</th>
                    <th>KODE VITAMIN</th>
                    <th>NIP</th>
                    <th>NIK ANAK</th>
                    <th>KODE PERTUMBUHAN</th>
                    <th>TANGGAL IMUNISASI</th>

                </tr>
            </thead>
            @foreach ($imunisasis as $key => $imns)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$imns->kode_imunisasi}}</td>
                <td>{{$imns->id_posyandu}}</td>
                <td>{{$imns->kode_vaksin}}</td>
                <td>{{$imns->kode_vitamin}}</td>
                <td>{{$imns->nip}}</td>
                <td>{{$imns->nik_anak}}</td>
                <td>{{$imns->kode_pertumbuhan}}</td>
                <td>{{$imns->tgl_imunisasi}}</td>
            </tr>
            @endforeach
        </table>
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
    $('#dataimunisasi').DataTable();
} );
</script>
</html>