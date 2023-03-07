<!DOCTYPE html>
<html lang="en">

<head>
    @include('template.head')
</head>
<body id="page-top" onload="window.print()">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!--Topbar-->
                <!--End of Topbar-->

    <div class="container">
        <h2 class="text-center mt-5 mb-3"><b>LAPORAN HASIL KEGIATAN POSYANDU RW 05<br>DESA LAGADAR KECAMATAN MARGAASIH KABUPATEN BANDUNG</b></h2>
        <h6 class="text-center mb-5">Jl. Nanjung Kp. Mekar Bakti RT 02 RW 05 Desa Lagadar Kecamatan Margaasih Kabupaten Bandung</h6>

        <div class="card" style="background-color: black; height:5px;"></div><br><br>
        <div class="row justify-content-center">
            <div class="col">
                <h5 class="text-center">
                    Tanggal : {{ $tanggal }} <br><br>
                    Balita Terdaftar : {{ $semua }} <br>
                    Jumlah Balita belum terdeteksi kelainan : {{ gettype($notkondisi) == 'integer' ? $notkondisi  : count($notkondisi) }} 
                </h5>
            </div> 
        </div><br>
        <div class="row">
            <div class="col">
                <h5 style="margin-left: 9%;">
                    Jumlah Balita Normal : {{ $normal }} <br>
                    Jumlah Balita Obesitas : {{ $obesitas }} <br>
                    Jumlah Balita belum vaksin : {{ gettype($notvaksin) == 'integer' ? $notvaksin  : count($notvaksin) }} <br>
                </h5>
            </div>
            <div class="col">
                <h5 style="margin-left: 29%;">Jumlah Balita Gizi Buruk : {{ $giziBuruk }} <br>
                    Jumlah Balita Stunting : {{ $stunting }} <br>
                    Jumlah Balita belum vitamin : {{ gettype($notvitamin) == 'integer' ? $notvitamin  :  count($notvitamin)}} <br>
                </h5>
            </div>
        </div>
        <br>
