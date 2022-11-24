<!DOCTYPE html>
<html lang="en">

<head>
    @include('template.head')
</head>
<body>
<div id="wrapper">
       @include('template.sideentry')
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                @include('template.nav')
<body>
    <div class="container"><br>
        <h2 class="text-center" >HASIL PELAYANAN
        <br>SIMULASI DETEKSI INTERVENSI DINI TUMBUH KEMBANG (SDIDTK)</h2>
        <h5 class="text-center">(dilaksanakan oleh dokter/perawat/bidan/tenaga terlatih)</h5>
        <br>
        <h5 class="text-center">{{$anak->nama_anak}}</h5>
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
                    <th rowspan="3" class="justify-content-center">No</th>
                    <th colspan="10">Jenis Skrining/Deteksi Dini Penyimpangan Tumbuh Kembang</th>
                </tr>
                <tr>
                    <th></th>
                    <th colspan="3">Deteksi Dini Penyimpangan Pertumbuhan</th>
                    <th colspan="3">Deteksi Dini Penyimpangan Perkembangan</th>
                    <th colspan="3">Deteksi Dini Penyimpangan Perilaku Emosional</th>
                </tr>
                <tr>
                    <th>NIK Anak</th>
                    <!-- <th>Nama Anak</th> -->
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
                <th>{{$key + 1}}</th>
                <td>{{$sdidtk->nik_anak}}</td>
                <!-- <td>{{$sdidtk->nama_anak}}</td> -->
                <td>{{$sdidtk->bb_tb == 1 ? 'Normal' : 'Tidak Normal'}}</td>
                <td>{{$sdidtk->tb_u == 1 ? 'Normal' : 'Tidak Normal'}}</td>
                <td>{{$sdidtk->lk == 1 ? 'Normal' : 'Tidak Normal'}}</td>
                <td>{{$sdidtk->kpsp == 1 ? 'Normal' : 'Tidak Normal'}}</td>
                <td>{{$sdidtk->tdd == 1 ? 'Normal' : 'Tidak Normal'}}</td>
                <td>{{$sdidtk->tdl == 1 ? 'Normal' : 'Tidak Normal'}}</td>
                <td>{{$sdidtk->kmpe == 1 ? 'Normal' : 'Tidak Normal'}}</td>
                <td>{{$sdidtk->mchat == 1 ? 'Normal' : 'Tidak Normal'}}</td>
                <td>{{$sdidtk->gpph == 1 ? 'Normal' : 'Tidak Normal'}}</td>
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
    </html>