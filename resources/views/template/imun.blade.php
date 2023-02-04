<!DOCTYPE html>
<html lang="en">

<head>
    <title>Data Posyandu</title>
    @include('template.head')
</head>
<?php session_start(); ?>
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
                                <span class=" d-flex align-items-center justify-content-center mb-3 text-center"><b>Jumlah Anak <br> Terdaftar</b></span> 
                                <h1 class="text-center">{{ $semua }}</h1>
                            </div>
                            </a>
                        </div>
                        <div class="col">
                            <a href="{{ url('pengelola/dataImunisasi/normal') }}" class="card card-ip">
                            <div class="card-body">
                                <span class=" d-flex align-items-center justify-content-center mb-3 text-center"><b>Jumlah Anak <br> Normal</b></span> 
                                <h1 class="text-center">{{ count($normal) }}</h1>
                            </div>
                            </a>
                        </div>
                        <div class="col">
                            <a href="{{ url('pengelola/dataImunisasi/giziBuruk') }}" class="card card-ap">
                            <div class="card-body">
                                <span class=" d-flex align-items-center justify-content-center mb-3 text-center"><b>Jumlah Anak <br> Gizi Buruk</b></span> 
                                <h1 class="text-center">{{ count($giziBuruk) }}</h1>
                            </div>
                            </a>
                        </div>
                        <div class="col">
                            <a href="{{ url('pengelola/dataImunisasi/obesitas') }}" class="card card-ip">
                            <div class="card-body">
                                <span class=" d-flex align-items-center justify-content-center mb-3 text-center"><b>Jumlah Anak <br> Obesitas</b></span> 
                                <h1 class="text-center">{{ count($obesitas) }}</h1>
                            </div>
                            </a>
                        </div>
                        <div class="col">
                            <a href="{{ url('pengelola/dataImunisasi/stunting') }}" class="card card-ap">
                            <div class="card-body">
                                <span class=" d-flex align-items-center justify-content-center mb-3 text-center"><b>Jumlah Anak <br> Stunting</b></span> 
                                <h1 class="text-center">{{ count($stunting) }}</h1>
                            </div>
                            </a>
                        </div>
                    </div>
            <br>
            
                    <table class="table table-bordered text-center">
                        <tr>
                            <th>
                                <a class="table-filter" href="{{ url('pengelola/dataImunisasi/notvaksin') }}">
                                        <span class=" d-flex align-items-center justify-content-center mb-3 text-center">Anak Yang Belum Dapat Vaksin : {{ count($notvaksin) }} </span>
                                </a>
                            </th>
                            <th>
                                <a class="table-filter" href="{{ url('pengelola/dataImunisasi/notvitamin') }}" >
                                        <span class=" d-flex align-items-center justify-content-center mb-3 text-center">Anak Yang Belum Dapat Vitamin : {{ count($notvitamin) }}</span> 
                                </a>
                            </th>
                            <th>
                                <a class="table-filter" href="{{ url('pengelola/dataImunisasi/notkondisi') }}" >
                                        <span class=" d-flex align-items-center justify-content-center mb-3 text-center">Anak Yang Belum Terdeteksi Kelainan  : {{ count($notvitamin) }}</span> 
                                </a>
                            </th>
                        </tr>
                    </table>

        {{-- isi disinii --}}
