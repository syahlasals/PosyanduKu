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
        <h2 class="text-center" >HASIL PELAYANAN
        <br>SIMULASI DETEKSI INTERVENSI DIDI TUMBUH KEMBANG (SDIDTK)</h2>
        <h5 class="text-center">(dilaksanakan oleh dokter/perawat/bisan/tenaga terlatih)</h5>
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
        <table id="datastunting" class="table table-striped table-bordered text-center">
            <thead>
                <tr>
                    <th rowspan="3" class="justify-content-center">Umur Anak</th>
                    <th colspan="10">Jenis Skrining/Deteksi Dini Penyimpangan Tumbuh Kembang</th>
                </tr>
                <tr>
                    <th></th>
                    <th colspan="3">Deteksi Dini Penyimpangan Pertumbuhan</th>
                    <th colspan="3">Deteksi Dini Penyimpangan Perkembangan</th>
                    <th colspan="3">Deteksi Dini Penyimpangan Perilaku Emosional</th>
                </tr>
                <tr>
                    <th>KODE PERTUMBUHAN</th>
                    <th>BB/TB</th>
                    <th>TB/U</th>
                    <th>LK</th>
                    <th>KPSP</th>
                    <th>TDD</th>
                    <th>TDL</th>
                    <th>KMPE</th>
                    <th>M-CHAT</th>
                    <th>GPPH*</th>

                </tr>
            </thead>

            @foreach ($sdidtks as $key => $sdidtk)
            <tr>
                <th>{{$key + 1}} Bulan</th>
                <td>{{$sdidtk->kode_pertumbuhan}}</td>
                <td>{{$sdidtk->bbdn_tbdn}}</td>
                <td>{{$sdidtk->tb_u}}</td>
                <td>{{$sdidtk->lk}}</td>
                <td>{{$sdidtk->kpsp}}</td>
                <td>{{$sdidtk->tdd}}</td>
                <td>{{$sdidtk->tdl}}</td>
                <td>{{$sdidtk->kmpe}}</td>
                <td>{{$sdidtk->mchat}}</td>
                <td>{{$sdidtk->gpph}}</td>
            </tr>
            @endforeach
        </table>
        <a href="{{ url('entry/InputImunisasi') }}" class="btn btn-main ml-3" role="button" aria-disabled="true">Kembali</a>
    </div>
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
        $('#datastunting').DataTable();
    } );
    </script>
    </html>