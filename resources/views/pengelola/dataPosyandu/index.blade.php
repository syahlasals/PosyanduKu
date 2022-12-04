
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Data Posyandu</title>
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

                <!-- Begin Page Content -->
                <div class="container-fluid"><br>
                    <!-- Page Heading -->
                    <h1 class="h3 mb-0 text-black-800 text-center"><b>PROFIL POSYANDU</b></h1>
                    <div class="horizon d-flex align-items-center justify-content-center">
                        <hr width="30%">
                    </div>
                    
                    <div class="d-flex align-items-center justify-content-center mb-3">
                        <img  src="{{ asset('template/img/logo_posyandu.svg') }}" alt="logo posyandu">
                    </div>

                    @foreach ($profilesList as $key => $prfl)
                    <div class="main-content">
                        <div class="d-flex align-items-center justify-content-center mb-5">
                            <h3><b>{{ $prfl->nama_posyandu }}</b></h3>
                        </div>
                        <div class="alamat">
                            <h5 class="d-flex align-items-center justify-content-center"><b>Alamat</b></h5>
                            <p class="d-flex align-items-center justify-content-center">{{ $prfl->alamat_posyandu }}</p>
                        </div>
                        <div class="row mb-3">
                            <div class="col"></div>
                            <div class="col-3">
                                <h5 class="d-flex align-items-center justify-content-center"><b>Nama RT</b></h5>
                                <p class="d-flex align-items-center justify-content-center">{{ $prfl->nama_rt }}</p>
                            </div>
                            <div class="col-1 d-flex align-items-center justify-content-center">
                                <div class="garis_verikal"></div>
                            </div>
                            <div class="col-3">
                                <h5 class="d-flex align-items-center justify-content-center"><b>Nama RW</b></h5>
                                <p class="d-flex align-items-center justify-content-center">{{ $prfl->nama_rw }}</p>
                            </div>
                            <div class="col"></div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-3">
                                <h5 class="d-flex align-items-center justify-content-center"><b>Ketua Posyandu</b></h5>
                                <p class="d-flex align-items-center justify-content-center">{{ $prfl->ketua }}</p>
                            </div>
                            <div class="col-1 d-flex align-items-center justify-content-center">
                                <div class="garis_verikal"></div>
                            </div>
                            <div class="col-4">
                                <h5 class="d-flex align-items-center justify-content-center"><b>Sekretaris Posyandu</b></h5>
                                <p class="d-flex align-items-center justify-content-center">{{ $prfl->sekretaris }}</p>
                            </div>
                            <div class="col-1 d-flex align-items-center justify-content-center">
                                <div class="garis_verikal"></div>
                            </div>
                            <div class="col-3">
                                <h5 class="d-flex align-items-center justify-content-center"><b>Bendahara Posyandu</b></h5>
                                <p class="d-flex align-items-center justify-content-center">{{ $prfl->bendahara }}</p>
                            </div>
                        </div>
                   </div>
                    @endforeach

                    <div class="accordion accordion-flush profile-acor my-5" id="accordionFlushExample">
                        <div class="accordion-item" style="background-color: #edf0f2;">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                    VISI
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">                                
                                    <li>Mampu mendeteksi dan memantau perkembangan kesehatan masyarakat setempat demi terciptanya peningkatan kesehatan masyarakat.</li>
                                    <li>Melaksanakan kegiatan keposyanduaan secara bertanggung jawab untuk mencapai masa depan keluarga yang lebih baik.</li>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item" style="background-color: #edf0f2;">
                            <h2 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                    MISI
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <li>Menjadi organisasi kesehatan yang dapat mendorong seluruh masyarakat untuk peduli terhadap kesehatan lingkungan hidup.</li>
                                    <li>Menjadi kader yang berkualitas dengan memiliki dedikasi tinggi dan kepeduli terhadap lingkungannya.</li>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item" style="background-color: #edf0f2;">
                            <h2 class="accordion-header" id="flush-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                    Alamat Lengkap
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Jl. Nanjung Kp. Mekar Bakti RT 02 RW 05 Desa Lagadar Kecamatan Margaasih Kabupaten Bandung</div>
                            </div>
                        </div>
                    </div>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-3">
                        <a href="{{ url('pengelola') }}" class="btn btn-main" role="button" aria-disabled="true">Kembali</a>
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

</body>

</html>