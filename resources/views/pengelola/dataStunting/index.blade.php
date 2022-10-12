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

            <tr>
                <th>0 Bulan</th>
            </tr>
            <tr>
                <th>3 Bulan</th>
            </tr>
            <tr>
                <th>6 Bulan</th>
            </tr>
            <tr>
                <th>9 Bulan</th>
            </tr>

            <tr>
                <th>12 Bulan</th>
            </tr>

            <tr>
                <th>15 Bulan</th>
            </tr>

            <tr>
                <th>18 Bulan</th>
            </tr>

            <tr>
                <th>21 Bulan</th>
            </tr>

            <tr>
                <th>24 Bulan</th>
            </tr>

            <tr>
                <th>30 Bulan</th>
            </tr>

            <tr>
                <th>36 Bulan</th>
            </tr>

            <tr>
                <th>42 Bulan</th>
            </tr>

            <tr>
                <th>48 Bulan</th>
            </tr>

            <tr>
                <th>54 Bulan</th>
            </tr>

            <tr>
                <th>60 Bulan-6 Tahun</th>
            </tr>

            <!-- @foreach ($stuntings as $key => $stntg)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$stntg->kode_pertumbuhan}}</td>
                <td>{{$stntg->bb/tb}}</td>
                <td>{{$stntg->tb/u}}</td>
                <td>{{$stntg->lk}}</td>
                <td>{{$stntg->kpsp}}</td>
                <td>{{$stntg->tdd}}</td>
                <td>{{$stntg->tdl}}</td>
                <td>{{$stntg->kmpe}}</td>
                <td>{{$stntg->mchat}}</td>
                <td>{{$stntg->gpph}}</td>
            </tr>
            @endforeach -->
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
</html>