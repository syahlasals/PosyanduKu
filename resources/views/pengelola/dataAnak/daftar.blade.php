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

    <div class="card">
        <div class="card-header">
            <h2 class="text-center" style="margin-top: 30px; margin-left: 30px; color:	#000000;">Form Pendaftaran Anak</h2>
        </div>
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger" style="margin-left: 40%; width: 30%;">
                    Kesalahan input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="row" style="margin-left: 30%;">
                <div class="col-lg-8">
                    <form method="POST" action="/dataAnak/" id="myform">
                        @csrf
                        <div style="margin-bottom: 15px;" class="form-group">
                            <label for="no_kk">No KK</label>
                            <input type="number" name="no_kk" id="no_kk" class="form-control">
                        </div>
                        <div style="margin-bottom: 15px;" class="form-group">
                            <label for="nik_anak">NIK Anak</label>
                            <input type="number" name="nik_anak" id="nik_anak" class="form-control">
                        </div>
                        <div style="margin-bottom: 15px;" class="form-group">
                            <label for="nama_anak">Nama Anak</label>
                            <input type="text" name="nama_anak" id="nama_anak" class="form-control">
                        </div>
                        {{-- <select class="form-select mb-3" aria-label="jenkel_anak">
                            <option>Pilih Jenis Kelamin</option>
                            <option value="L" selected="">Laki-Laki</option>
                            <option value="P" selected="">Perempuan</option>
                        </select> --}}
                        <div style="margin-bottom: 15px;" class="form-group">
                            <label for="jenkel_anak">Jenis Kelamin</label>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="jenkel_anak" id="lakilaki"
                                    value="L">
                                <label for="lakilaki" class="form-check-label">Laki-laki</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="jenkel_anak" id="perempuan"
                                    value="P">
                                <label for="perempuan" class="form-check-label">Perempuan</label>
                            </div>
                        </div>

                        <div style="margin-bottom: 15px;" class="form-group">
                            <label for="tgl_anak">Tanggal Lahir</label>
                            <input type="date" name="tgl_anak" id="tgl_anak" class="form-control">
                        </div>
                        <div style="margin-bottom: 15px;" class="form-group">
                            <label for="tmp_anak">Tempat Lahir</label>
                            <input type="text" name="tmp_anak" id="tmp_anak" class="form-control">
                        </div>
                        <div style="margin-bottom: 15px;" class="form-group">
                            <label for="golongan_darah">Golongan Darah</label>
                            <input type="text" name="golongan_darah" id="golongan_darah" class="form-control">
                        </div>
                        <div class="mb-3">
                            <br>
                            <div class="d-flex align-content-flex-end">
                                <button class="btn btn-primary" type="submit" style="margin-left: 440px;">Daftar</button>
                            </div>
                            <div class="form-group mt-2">
                                <a href="{{ url('/dataAnak') }}">
                                    Kembali Ke halaman Utama</a>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
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