<!DOCTYPE html>
<html lang="en">
<head>
    <title>Beranda</title>
    @include('template.head')
</head>
    <body>  
        @include('template.navortu')
        <div class="container my-5">
                <div class="container-fluid">       
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <h5 class="text-center my-3"><b>Masukan Data Diri Anda</b></h5>
                                <div class="col-12 col-lg-12 col-md-12 col-sm-12 d-flex my-3 justify-content-center" style="height: 40%; width:40%;">
                                    <img src="{{ asset('template/img/motherhood.svg') }}" alt="" style="height: 40%; width:40%;">
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <div class="row my-3">
                                        <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                                            <div class="d-flex mb-3">
                                                <div class="col-5"><b>No KK</b></div>
                                                <div class="col-1">:</div>
                                                <div class="col-6"><input type="number" name="no_kk" id="no_kk" class="form-control"></div>
                                            </div>
                                            <div class="d-flex mb-3">
                                                <div class="col-5"><b>alamat</b></div>
                                                <div class="col-1">:</div>
                                                <div class="col-6"><input type="number" name="alamat_ortu" id="alamat_ortu" class="form-control"></div>
                                            </div>
                                            <div class="d-flex mb-3">
                                                <div class="col-5"><b>RW</b></div>
                                                <div class="col-1">:</div>
                                                <div class="col-6"><input type="number" name="rw" id="rw" class="form-control"></div>
                                            </div>
                                            <div class="d-flex mb-3">
                                                <div class="col-5"><b>RT</b></div>
                                                <div class="col-1">:</div>
                                                <div class="col-6"><input type="number" name="rt" id="rt" class="form-control"></div>
                                            </div>
                                            <div class="d-flex mb-3">
                                                <div class="col-5"><b>NIK Ayah</b></div>
                                                <div class="col-1">:</div>
                                                <div class="col-6"><input type="number" name="nik_ayah" id="nik_ayah" class="form-control"></div>
                                            </div>                                            
                                        </div>
                                        <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                                            <div class="d-flex mb-3">
                                                <div class="col-5"><b>Nama Ayah</b></div>
                                                <div class="col-1">:</div>
                                                <div class="col-6"><input type="text" name="nama_ayah" id="nama_ayah" class="form-control"></div>
                                            </div>
                                            <div class="d-flex mb-3">
                                                <div class="col-5"><b>Pekerjaan Ayah</b></div>
                                                <div class="col-1">:</div>
                                                <div class="col-6"><input type="text" name="pekerjaan_ayah" id="pekerjaan_ayah" class="form-control"></div>
                                            </div>
                                            <div class="d-flex mb-3">
                                                <div class="col-5"><b>NIK Ibu</b></div>
                                                <div class="col-1">:</div>
                                                <div class="col-6"><input type="number" name="nik_ibu" id="nik_ibu" class="form-control"></div>
                                            </div>
                                            <div class="d-flex mb-3">
                                                <div class="col-5"><b>Nama Ibu</b></div>
                                                <div class="col-1">:</div>
                                                <div class="col-6"> <input type="number" name="nama_ibu" id="nama_ibu" class="form-control"></div>
                                            </div>
                                            <div class="d-flex mb-3">
                                                <div class="col-5"><b>Pekerjaan Ibu</b></div>
                                                <div class="col-1">:</div>
                                                <div class="col-6"><input type="text" name="pekerjaan_ibu" id="pekerjaan_ibu" class="form-control"></div>
                                            </div>    
                                       </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
        @include('template.script')
    </body>
</html>