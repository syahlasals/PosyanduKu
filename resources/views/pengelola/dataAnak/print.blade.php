<!DOCTYPE html>
<html lang="en">

<head>
    @include('template.head')
</head>
<body id="page-top" onload="window.print();">
    <div id="wrapper">
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
<body>
    <div class="container"><br>

        <h2 class="text-center mt-5 mb-3"><b>LAPORAN HASIL KEGIATAN POSYANDU RW 05<br>DESA LAGADAR KECAMATAN MARGAASIH KABUPATEN BANDUNG</b></h2>
        <h6 class="text-center mb-5">Jl. Nanjung Kp. Mekar Bakti RT 02 RW 05 Desa Lagadar Kecamatan Margaasih Kabupaten Bandung</h6>
        <div class="card" style="background-color: black; height:5px;"></div><br><br>
        
        <h2 class="text-center" >HASIL PELAYANAN
        <br>SIMULASI DETEKSI INTERVENSI DINI TUMBUH KEMBANG (SDIDTK)</h2>
        <h5 class="text-center">(dilaksanakan oleh dokter/perawat/bidan/tenaga terlatih)</h5>
        <br>
        <h5 class="text-center">Data An. {{$anak->nama_anak}}</h5>
        <br><br>
        <div>
            @if ($message = Session::get('success'))
            <div class="alert alert-success " role="alert">
                <strong><p>{{ $message }}</p></strong>
                <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
              </div>
            @endif
        </div>

        <table id="datastunting" class="table table-bordered text-center">
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
                    <!-- <th>NIK Anak</th>
                    <th>Bulan</th> -->
                    <th>Tanggal</th>
                    <th>BB</th>
                    <th>TB</th>
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
                <!-- <td>{{$sdidtk->nik_anak}}</td>
                <td>{{$sdidtk->bulan}}</td> -->
                <td>{{$sdidtk->tgl_hitung }}</td>
                <td>{{$sdidtk->bb == 1 ? 'Normal' : 'Tidak Normal'}}</td>
                <td>{{$sdidtk->tb == 1 ? 'Normal' : 'Tidak Normal'}}</td>
                <td>{{$sdidtk->lk == 1 ? 'Normal' : 'Tidak Normal'}}</td>
                <td>{{$sdidtk->kpsp ? $sdidtk->kpsp == 1 ? "Normal" : "Tidak Normal" : "" }}</td>
                <td>{{$sdidtk->tdd ? $sdidtk->tdd == 1 ? "Normal" : "Tidak Normal" : "" }}</td>
                <td>{{$sdidtk->tdl ? $sdidtk->tdl == 1 ? "Normal" : "Tidak Normal" : "" }}</td>
                <td>{{$sdidtk->kmpe ? $sdidtk->kmpe == 1 ? "Normal" : "Tidak Normal" : "" }}</td>
                <td>{{$sdidtk->mchat ? $sdidtk->mchat == 1 ? "Normal" : "Tidak Normal" : "" }}</td>
                <td>{{$sdidtk->gpph ? $sdidtk->gpph == 1 ? "Normal" : "Tidak Normal" : "" }}</td>
            </tr>
            @endforeach
        </table>
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