<!DOCTYPE html>
<html lang="en">
<head>
    <title>Beranda</title>
    @include('template.head')
</head>
    <body>  
        @include('template.navortu')
        @include('template.nav')
        <div class="container">
            <div class="wrapper my-5">
                <div class="card greeting">
                    <div class="card-body text-center lg-h2 sm-h6 xm-h6 md-h6">
                        <h5><b>Selamat Datang, Orangtua</b></h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-5">
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-bs-toggle="tab" href="#home">Menu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#menu1">Profil</a>
                </li>
            </ul>
            <div class="tab-content">
                <div id="home" class="container-fluid tab-pane active"><br>
                    <div class="row text-center">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-6 mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <a href="#"><iconify-icon icon="bxs:id-card"></iconify-icon>
                                    <p>Data Anak</p></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-6 mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <a href="#"><iconify-icon icon="fontisto:injection-syringe"></iconify-icon>
                                    <p>Riwayat Imunisasi</p></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-6 mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <a href="#"><iconify-icon icon="fluent:history-24-filled"></iconify-icon>
                                    <p>Riwayat Penyakit</p></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-6 mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <a href="#"><iconify-icon icon="ic:round-calculate"></iconify-icon>
                                    <p>IMT Anak</p></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row text-center">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-12 mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <p>Ambil nomor antrian</p>
                                    <button type="button" class="btn btn-primary btn-sm">Klik untuk antrian</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-12 mb-3">
                            <div class="card">
                                <div class="card-body">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                    Eveniet magni ipsam facilis numquam voluptatem accusamus 
                                    voluptatibus odit omnis dolore! Aliquid velit 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="menu1" class="container-fluid tab-pane fade"><br>         
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 col-lg-6 col-md-6 col-sm-6 d-flex mb-3 justify-content-center">
                                    <img src="{{ asset('template/img/picture_dasboard.svg') }}" alt="">
                                </div>
                                <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                                    <div class="card mb-3">
                                        <div class="card-body">
                                            <div class="d-flex mb-3">
                                                <div class="col-5"><b>Username</b></div>
                                                <div class="col-1">:</div>
                                                <div class="col-6"></div>
                                            </div>
                                            <div class="d-flex mb-3">
                                                <div class="col-5"><b>Email</b></div>
                                                <div class="col-1">:</div>
                                                <div class="col-6"></div>
                                            </div>
                                            <div class="d-flex mb-3">
                                                <div class="col-5"><b>No. Telepon</b></div>
                                                <div class="col-1">:</div>
                                                <div class="col-6"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="card">
                                <div class="card-body">
                                    <div class="row my-3">
                                        <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                                            @foreach ($ortus as $key => $ortu)
                                            <div class="d-flex mb-3">
                                                <div class="col-5"><b>No. KK</b></div>
                                                <div class="col-1">:</div>
                                                <div class="col-6">{{ $ortu->no_kk }}</div>
                                            </div>
                                            <div class="d-flex mb-3">
                                                <div class="col-5"><b>Alamat</b> </div>
                                                <div class="col-1">:</div>
                                                <div class="col-6">{{ $ortu->alamat_ortu }}</div>
                                            </div>
                                            <div class="d-flex mb-3">
                                                <div class="col-5"><b>RT/RW</b></div>
                                                <div class="col-1">:</div>
                                                <div class="col-6">{{ $ortu->rt }}/{{ $ortu->rw }}</div>
                                            </div>
                                            <div class="d-flex mb-3">
                                                <div class="col-5"><b>Nama Ayah</b></div>
                                                <div class="col-1">:</div>
                                                <div class="col-6">{{ $ortu->nama_ayah }}</div>
                                            </div>
                                            <div class="d-flex mb-3">
                                                <div class="col-5"><b>Pekerjaan Ayah</b></div>
                                                <div class="col-1">:</div>
                                                <div class="col-6">{{ $ortu->pekerjaan_ayah }}</div>
                                            </div>
                                            <div class="d-flex mb-3">
                                                <div class="col-5"><b>NIK Ayah</b></div>
                                                <div class="col-1">:</div>
                                                <div class="col-6">{{ $ortu->nik_ayah }}</div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                                            <div class="d-flex mb-3">
                                                <div class="col-5"><b>Nama Ibu</b></div>
                                                <div class="col-1">:</div>
                                                <div class="col-6">{{ $ortu->nama_ibu }}</div>
                                            </div>
                                            <div class="d-flex mb-3">
                                                <div class="col-5"><b>Pekerjaan Ibu</b></div>
                                                <div class="col-1">:</div>
                                                <div class="col-6">{{ $ortu->pekerjaan_ibu }}</div>
                                            </div>
                                            <div class="d-flex mb-3">
                                                <div class="col-5"><b>NIK Ibu</b></div>
                                                <div class="col-1">:</div>
                                                <div class="col-6">{{ $ortu->nik_ibu }}</div>
                                            </div>
                                            @endforeach       
                                       </div>
                                    </div>
                                </div>
                            </div>
                            <a href="{{ route('ortuEdit', $ortu->no_kk) }}" class="btn btn-warning">Ubah</a> --}}
                            <button type="button" class="btn btn-primary">Logout</button>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
        @include('template.modalLogout')
        @include('template.script')
    </body>
</html>