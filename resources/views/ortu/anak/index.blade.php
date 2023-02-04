<!DOCTYPE html>
<html lang="en">
<head>
    @include('template.head')
</head>
    <body>  
        {{-- @include('template.navortu') --}}
        @include('template.nav0')
        <div class="container my-5">
                <div class="container-fluid">       
                    <div class="card">
                        <div class="card-body">
                        @if ($errors->any())
                                <div class="alert alert-danger">
                                    <strong>Waduh!</strong>Kesalahan input.<br><br>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            
                            <form method="POST" action="/ortu" id="myform">
                            @csrf
                            <div class="row">
                                <h5 class="text-center my-3"><b>PENDAFTARAN ORANG TUA</b></h5>
                                <div class="col-12 col-lg-12 col-md-12 col-sm-12 d-flex my-3 justify-content-center" style="height: 40%; width:40%;">
                                    <img src="{{ asset('template/img/motherhood.svg') }}" alt="" style="height: 40%; width:40%;">
                                </div>
                            </div>
                            
                            <div class="card">
                                <div class="card-body">
                                    @if (Session::has('nokk'))
                                <div class="alert alert-danger">{{ Session::get('nokk') }}</div>
                                @endif
                                @if (Session::has('nokk'))
                                <div class="alert alert-danger">{{ Session::get('nokk') }}</div>
                                @endif
                                @if (Session::has('nokk_ortu'))
                                    <div class="alert alert-danger">{{ Session::get('nokk_ortu') }}</div>
                                @endif
                                @if (Session::has('nikayah'))
                                    <div class="alert alert-danger">{{ Session::get('nikayah') }}</div>
                                @endif
                                @if (Session::has('nikibu'))
                                    <div class="alert alert-danger">{{ Session::get('nikibu') }}</div>
                                @endif
                                    <div class="row my-3">
                                        <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                                            <div class="d-flex mb-3">
                                                <div class="col-5"> <label for="no_kk"><b>No KK</b></label></div>
                                                <div class="col-1">:</div>
                                                <div class="col-6"><input type="number" name="no_kk" id="no_kk" class="form-control"></div>
                                            </div>
                                            <div class="d-flex mb-3">
                                                <div class="col-5"> <label for="alamat_ortu"><b>Alamat</b></label></div>
                                                <div class="col-1">:</div>
                                                <div class="col-6"><input type="text" name="alamat_ortu" id="alamat_ortu" class="form-control"></div>
                                            </div>
                                            <div class="d-flex mb-3">
                                                <div class="col-5"> <label for="rw"><b>RW</b></label></div>
                                                <div class="col-1">:</div>
                                                <div class="col-6"><input type="number" name="rw" id="rw" class="form-control"></div>
                                            </div>
                                            <div class="d-flex mb-3">
                                                <div class="col-5"> <label for="rt"><b>RT</b></label></div>
                                                <div class="col-1">:</div>
                                                <div class="col-6"><input type="number" name="rt" id="rt" class="form-control"></div>
                                            </div>
                                            <div class="d-flex mb-3">
                                                <div class="col-5"> <label for="nik_ayah"><b>NIK Ayah</b></label></div>
                                                <div class="col-1">:</div>
                                                <div class="col-6"><input type="number" name="nik_ayah" id="nik_ayah" class="form-control"></div>
                                            </div>                                            
                                        </div>
                                        <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                                            <div class="d-flex mb-3">
                                                <div class="col-5"> <label for="nama_ayah"><b>Nama Ayah</b></label></div>
                                                <div class="col-1">:</div>
                                                <div class="col-6"><input type="text" name="nama_ayah" id="nama_ayah" class="form-control"></div>
                                            </div>
                                            <div class="d-flex mb-3">
                                                <div class="col-5"> <label for="pekerjaan_ayah"><b>Pekerjaan Ayah</b></label></div>
                                                <div class="col-1">:</div>
                                                <div class="col-6"><input type="text" name="pekerjaan_ayah" id="pekerjaan_ayah" class="form-control"></div>
                                            </div>
                                            <div class="d-flex mb-3">
                                                <div class="col-5"> <label for="nik_ibu"><b>NIK Ibu</b></label></div>
                                                <div class="col-1">:</div>
                                                <div class="col-6"><input type="number" name="nik_ibu" id="nik_ibu" class="form-control"></div>
                                            </div>
                                            <div class="d-flex mb-3">
                                                <div class="col-5"> <label for="nama_ibu"><b>Nama Ibu</b></label></div>
                                                <div class="col-1">:</div>
                                                <div class="col-6"> <input type="text" name="nama_ibu" id="nama_ibu" class="form-control"></div>
                                            </div>
                                            <div class="d-flex mb-3">
                                                <div class="col-5"> <label for="pekerjaan_ibu"><b>Pekerjaan Ibu</b></label></div>
                                                <div class="col-1">:</div>
                                                <div class="col-6"><input type="text" name="pekerjaan_ibu" id="pekerjaan_ibu" class="form-control"></div>
                                            </div> <br>
                                            <div class="row">
                                                <div class="row">
                                                    <div class="col" colspan="3">
                                                        <button class="btn btn-main" type="submit" style="margin-left: 260px;">Daftar</button>
                                                    </div>
                                                </div>
                                            </div>   
                                        </form>
                                        </div>
                                    </div>
                                </div>
                            </div><br>
                            Sudah daftar? <a href="{{ url('ortu') }}">Klik ini untuk masuk ke dashboard.</a><br>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
        @include('template.modalLogout')
        @include('template.script')
        @include('sweetalert::alert')
    </body>
</html>
