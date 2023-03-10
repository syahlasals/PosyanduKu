<!DOCTYPE html>
<html lang="en">

<head>
    @include('template.head')
</head>

<body id="page-top">
@include('template.load')
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
                {{-- <x-app-layout>
                </x-app-layout> --}}

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <div class="container">
                        <div class="row">
                            <div class="col-6 my-5">
                                <img src="{{ asset('template/img/Group_82bg.svg') }}" alt="">
                            </div>
                            <div class="col-6 my-5 d-flex">
                                <div class="d-flex align-items-center justify-content-center text-center">
                                <h1><b>Selamat Datang, {{ Auth::user()->name }}</b></h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <a href="{{ url('pengelola/dataAnak') }}"class="card card-ip">
                                    <div class="card-body">
                                        <span class=" d-flex align-items-center justify-content-center mb-3 text-center"><b>Data Anak</b></span> 
                                        <div class="baby d-flex align-items-center justify-content-center">
                                            <iconify-icon icon="cil:baby" style="color:black;" width="30" height="30"></iconify-icon>
                                        </div> 
                                    </div>
                                </a>
                            </div>
                            <div class="col">
                                <a href="{{ url('pengelola/dataImunisasi') }}" class="card card-ip">
                                    <div class="card-body">
                                        <span class=" d-flex align-items-center justify-content-center mb-3 text-center"><b>Rekap Anak</b></span> 
                                        <div class="baby d-flex align-items-center justify-content-center">
                                            <iconify-icon icon="bxs:report" style="color: black;" width="30" height="30"></iconify-icon>
                                        </div> 
                                    </div>
                                </a>
                            </div>
                            <!-- <div class="col">
                                <a href="{{ url('pengelola/dataPetugas') }}" class="card card-ap ">
                                    <div class="card-body">
                                        <span class=" d-flex align-items-center justify-content-center mb-3 text-center"><b>Data Petugas</b></span> 
                                        <div class="baby d-flex align-items-center justify-content-center">
                                            <iconify-icon icon="healthicons:doctor-female-outline" style="color: white;"width="30" height="30"></iconify-icon>
                                        </div> 
                                    </div>
                                </a>
                            </div> -->
                            <div class="col">
                                <a href="{{ url('pengelola/dataPosyandu') }}" class="card card-ip">
                                    <div class="card-body">
                                        <span class=" d-flex align-items-center justify-content-center mb-3 text-center"><b>Profile Posyandu</b></span> 
                                        <div class="baby d-flex align-items-center justify-content-center">
                                            <iconify-icon icon="icon-park-solid:hospital-three" style="color: black;"width="30" height="30"></iconify-icon>
                                        </div> 
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row mb-3">
                            <div class="col d-flex justify-content-center my-5" style="height: 400px">
                                <canvas id="userChart" class="rounded shadow" style="width:100%;max-width:500px;height:100%;max-height:500px"></canvas>
                            </div>
                        </div>
                    </div>
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

    <!-- Logout Modal-->
    @include('template.modalLogout')

    <!--Script-->
    @include('template.script')
    <!-- End of Script-->

    <!-- CHARTS -->
<script>
    var ctx = document.getElementById('userChart').getContext('2d');
    var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'pie',
// The data for our dataset
        data: {
            labels:  {!!json_encode($chart->labels)!!} ,
            datasets: [
                {
                    label: 'Status Penyimpangan per Anak',
                    // backgroundColor: {!! json_encode($chart->colours)!!} ,
                    backgroundColor: ["#647BB1", "#CCB2E0", "#B198E3", "#9FD8FB", "#E2E2E2" ] ,
                    data:  {!! json_encode($chart->dataset)!!} ,
                },
            ]
        },
// Configuration options go here
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true,
                        callback: function(value) {if (value % 1 === 0) {return value;}}
                    },
                    scaleLabel: {
                        display: false
                    }
                }]
            },
            legend: {
                labels: {
                    // This more specific font property overrides the global property
                    fontColor: '#122C4B',
                    fontFamily: "Poppins",
                    padding: 5,
                    boxWidth: 5,
                    fontSize: 16,
                }
            },
            layout: {
                padding: {
                    left: 5,
                    right: 5,
                    top: 0,
                    bottom: 5
                }
            },
            maintainAspectRatio: false,
            responsive: true,
        }
    });
</script>

</body>

</html>