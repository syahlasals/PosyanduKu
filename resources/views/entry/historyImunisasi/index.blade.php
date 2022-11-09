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
                <!--End of Topbar-->

    <div class="container">
        <h1 class="text-center mt-5 mb-5"><b>HISTORY IMUNISASI</b></h1>

        <div class="row">
            <div class="col" colspan="3">
                {{-- <button class="btn btn-main" type="submit" style="margin-left: 260px;">Simpan</button> --}}
                <a href="{{ url('entry/InputImunisasi') }}" class="btn btn-main ml-3" role="button" aria-disabled="true">Kembali</a>
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

</body>
</html>