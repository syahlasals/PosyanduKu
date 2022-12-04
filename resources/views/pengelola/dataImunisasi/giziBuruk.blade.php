<!DOCTYPE html>
<html lang="en">

<head>
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
        <h1 class="text-center mt-5 mb-5"><b>REKAP ANAK</b></h1>
        
        <div>
            @if ($message = Session::get('success'))
            <div class="alert alert-success " role="alert">
                <strong><p>{{ $message }}</p></strong>
                <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
        </div>

        <div class="row">
            <div class="col">
                <a href="{{ url('pengelola/dataImunisasi') }}" class="card card-ap">
                <div class="card-body">
                    <span class=" d-flex align-items-center justify-content-center mb-3 text-center"><b>Jumlah Balita <br> Terdaftar</b></span> 
                    <h1 class="text-center">{{ $semua }}</h1>
                </div>
                </a>
            </div>
            <div class="col">
                <a href="{{ url('pengelola/dataImunisasi/normal') }}" class="card card-ip">
                <div class="card-body">
                    <span class=" d-flex align-items-center justify-content-center mb-3 text-center"><b>Jumlah Balita <br> Normal</b></span> 
                    <h1 class="text-center">{{ $normal }}</h1>
                </div>
                </a>
            </div>
            <div class="col">
                <a href="{{ url('pengelola/dataImunisasi/giziBuruk') }}" class="card card-ap">
                <div class="card-body">
                    <span class=" d-flex align-items-center justify-content-center mb-3 text-center"><b>Jumlah Balita <br> Gizi Buruk</b></span> 
                    <h1 class="text-center">{{ $giziBuruk }}</h1>
                </div>
                </a>
            </div>
            <div class="col">
                <a href="{{ url('pengelola/dataImunisasi/obesitas') }}" class="card card-ip">
                <div class="card-body">
                    <span class=" d-flex align-items-center justify-content-center mb-3 text-center"><b>Jumlah Balita <br> Obesitas</b></span> 
                    <h1 class="text-center">{{ $obesitas }}</h1>
                </div>
                </a>
            </div>
            <div class="col">
                <a href="{{ url('pengelola/dataImunisasi/stunting') }}" class="card card-ap">
                <div class="card-body">
                    <span class=" d-flex align-items-center justify-content-center mb-3 text-center"><b>Jumlah Balita <br> Stunting</b></span> 
                    <h1 class="text-center">{{ $stunting }}</h1>
                </div>
                </a>
            </div>
        </div>

        <br><br>

        <a href="{{ url('pengelola/dataImunisasi/giziBuruk/print') }}" class="btn btn-primary" target="_blank">Print Rekap Anak</a><br><br>
        <table id="dataimunisasi" class="table table-striped table-bordered text-center" border="1">
        <thead>
            <tr>
                <th>Nomor</th>
                <!--<th>Nama Posyandu</th>-->
                <th>NIK Anak</th>
                <th>Nama Anak</th>
                <!--<th>Tanggal Imunisasi</th>-->
                <th>Vaksin</th>
                <th>Vitamin</th>
                <th>Status Pertumbuhan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($anakList as $data)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <!--<td></td>-->
                <td>{{ $data->nik_anak }}</td>
                <td>{{ $data->nama_anak }}</td>
                {{-- <td>
                    @foreach ($data->vaksins as $item)
                    {{ $item->tgl_vaksin }}
                    @endforeach
                </td> --}}
                <td>
                    @foreach ($data->vaksins as $item)
                    {{ $item->jenis_vaksin }},
                    @endforeach
                </td>
                <td>
                    @foreach ($data->vitamins as $item)
                    {{ $item->jenis_vitamin }},
                    @endforeach
                </td>
                <td>@foreach ($data->tumbuhs as $item)
                    {{ $item->status_penyimpangan }},
                    @endforeach
                </td>
                <td>
                    <a href="history/{{$data->nik_anak}}"><button type="button" class="btn btn-info" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Riwayat"><i class="fa-solid fa-clock-rotate-left"></i></button></a>
                </td>
            </tr>
            @endforeach
        </tbody>
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

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
<i class="fas fa-angle-up"></i>
</a>
</body>
</html>