<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
<script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Petugas Entry</title>
    @include('template.head')
</head>
<body>
<div id="wrapper">
       @include('template.sideentry')
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                @include('template.nav')
<body>
    <div class="container">
        <h1 class="text-center mt-5 mb-5"><b>INPUT IMUNISASI</b></h1>
        
        <div>
            @if ($message = Session::get('success'))
            <div class="alert alert-success " role="alert">
                <strong><p>{{ $message }}</p></strong>
                <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
              </div>
            @endif
        </div>
        <table id="inputimunisasi" class="table table-striped table-bordered text-center">
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
                <td>{{$key+1}}</td>
                <td>{{ $anak->no_kk }}</td>
                <td>{{ $anak->nik_anak }}</td>
                <td>{{ $anak->nama_anak }}</td>
                <td>{{ $anak->tmp_anak}}, {{ $anak->tgl_anak }}</td>
                <td>{{ $anak->jenkel_anak }}</td>
                <td>{{ $anak->golongan_darah }}</td>
                <td>
                <div class="row">
                    <div class="col-3">
                        <a href="/entry/history"><button type="button" class="btn btn-primary">History</button>
                    </div>
                    <div class="col-3">
                        <a href="/entry/pertumbuhan"><button type="button" class="btn btn-secondary">Pertumbuhan</button>
                    </div>
                    <div class="col-3">
                        <a href="/entry/vaksin"><button type="button" class="btn btn-success">Vaksin</button>
                    </div>
                    <div class="col-3">
                        <a href="/entry/vitamin"><button type="button" class="btn btn-danger">Vitamin</button>
                    </div>
                    <div class="col-3">
                        <a href="/entry/dataStunting"><button type="button" class="btn btn-danger" style="background-color: #FFD700; border-color: #FFD700;">SDIDTK</button>
                    </div>
                </div>
                </td>               
            </tr>
            @endforeach
        </table>
        <a href="{{ url('entry') }}" class="btn btn-main" role="button" aria-disabled="true">Kembali</a>
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
    $('#inputimunisasi').DataTable();
} );
</script>
</html>