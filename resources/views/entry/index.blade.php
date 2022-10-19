
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Petugas Entry</title>
    @include('template.head')
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
    <!--sidebar-->
       @include('template.sideentry')
    <!--End Sidebar-->
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!--Topbar-->
                @include('template.nav')
                {{-- <x-app-layout>
                </x-app-layout> --}}

                <!--End of Topbar-->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <div class="card card-welcomep mb-5">
                        <div class="card-body d-flex align-items-center justify-content-center">
                        <h1 style="color: white;"><b>Selamat Datang, Petugas Entry</b></h1>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col d-flex justify-content-end">
                            <a href="/entry/pendaftaranAnak" class="card card-ap">
                                <div class="card-body">
                                    <h4 class=" d-flex align-items-center justify-content-center mb-3"><b>Pendaftaran</b></h4> 
                                </div>
                            </a>
                        </div>
                        <div class="col d-flex justify-content-start">
                            <a href="#" class="card card-pv">
                                <div class="card-body">
                                    <h4 class=" d-flex align-items-center justify-content-center mb-3"><b>Pertumbuhan</b></h4>  
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col d-flex justify-content-end">
                            <a href="/entry/vitamin" class="card card-pv ">
                                <div class="card-body">
                                    <h4 class=" d-flex align-items-center justify-content-center mb-3"><b>Vitamin</b></h4> 
                                </div>
                            </a>
                        </div>
                        <div class="col d-flex justify-content-start">
                            <a href="#" class="card card-pr">
                                <div class="card-body">
                                    <h4 class=" d-flex align-items-center justify-content-center mb-3"><b>Riwayat Penyakit</b></h4> 
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col d-flex justify-content-center">
                            <a href="/entry/vaksin" class="card card-pv ">
                                <div class="card-body">
                                    <h4 class=" d-flex align-items-center justify-content-center mb-3"><b>Vaksin</b></h4> 
                                </div>
                            </a>
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

    {{-- <!-- Logout Modal-->
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        {{-- <x-jet-dropdown-link href="{{ route('logout') }}"
                 @click.prevent="$root.submit();">
            {{ __('Log Out') }}
        </x-jet-dropdown-link> --}}

    {{-- <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                    <a class="btn btn-primary" href="{{ route('logout') }}"
                    @click.prevent="$root.submit();">Logout</a>
                </div>
            </div>
        </div>
    </div>
    </form> --}} 

    <!--Script-->
    @include('template.script')
    <!-- End of Script-->

</body>

</html>