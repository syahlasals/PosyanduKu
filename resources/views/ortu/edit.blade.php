<!DOCTYPE html>
<html lang="en">
<head>
    @include('template.head')
</head>
    <body>  
    @include('template.load')
        @include('template.navortu')
        <div class="container-fluid">
            <h1 class="text-center"><b>Edit Data</b></h1><br>
            <div class="container d-flex justify-item-center justify-content-center"><br>
                <div class="card card-form">
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
                    <form method="POST" action="{{ route('ortu.updateOrtu', $ortu->no_kk) }}" id="myform">
                        @csrf
                        <div class="row" style="margin-bottom: 15px;">
                            <div class="col-3">
                                <label for="no_kk"><b>No. KK</b></label>
                            </div>
                            <div class="col-1"><b>:</b></div>
                            <div class="col-8">
                                <input type="text" name="no_kk" id="no_kk" class="form-control disable" value="{{ $ortu->no_kk }}" required>
                            </div>
                        </div>
                        <div class="row" style="margin-bottom: 15px;">
                            <div class="col-3">
                                <label for="alamat"><b>Alamat</b></label>
                            </div>
                            <div class="col-1"><b>:</b></div>
                            <div class="col-8"> 
                                <input type="text" name="alamat" id="alamat" class="form-control" value="{{ $ortu->alamat }}" required>
                            </div>
                        </div>
                        <div class="row" style="margin-bottom: 15px;">
                            <div class="col-3">
                                <label for="rt"><b>RT</b></label>
                            </div>
                            <div class="col-1"><b>:</b></div>
                            <div class="col-8"> 
                                <input type="text" name="rt" id="rt" class="form-control" value="{{ $ortu->rt }}" required>
                            </div>
                        </div>
                        <div class="row" style="margin-bottom: 15px;">
                            <div class="col-3">
                                <label for="rw"><b>RW</b></label>
                            </div>
                            <div class="col-1"><b>:</b></div>
                            <div class="col-8"> 
                                <input type="text" name="rw" id="rw" class="form-control" value="{{ $ortu->rw }}" required>
                            </div>
                        </div>
                        <div class="row" style="margin-bottom: 15px;">
                            <div class="col-3">
                                <label for="nama_ayah"><b>Nama Ayah</b></label>
                            </div>
                            <div class="col-1"><b>:</b></div>
                            <div class="col-8"> 
                                <input type="text" name="nama_ayah" id="nama_ayah" class="form-control" value="{{ $ortu->nama_ayah }}" required>
                            </div>
                        </div>
                        <div class="row" style="margin-bottom: 15px;">
                            <div class="col-3">
                                <label for="pekerjaan_ayah"><b>Pekerjaan Ayah</b></label>
                            </div>
                            <div class="col-1"><b>:</b></div>
                            <div class="col-8"> 
                                <input type="text" name="pekerjaan_ayah" id="pekerjaan_ayah" class="form-control" value="{{ $ortu->pekerjaan_ayah }}" required>
                            </div>
                        </div>
                        <div class="row" style="margin-bottom: 15px;">
                            <div class="col-3">
                                <label for="nik_ayah"><b>NIK Ayah</b></label>
                            </div>
                            <div class="col-1"><b>:</b></div>
                            <div class="col-8"> 
                                <input type="text" name="nik_ayah" id="nik_ayah" class="form-control" value="{{ $ortu->nik_ayah }}" required>
                            </div>
                        </div>
                        <div class="row" style="margin-bottom: 15px;">
                            <div class="col-3">
                                <label for="nama_ibu"><b>Nama Ibu</b></label>
                            </div>
                            <div class="col-1"><b>:</b></div>
                            <div class="col-8"> 
                                <input type="text" name="nama_ibu" id="nama_ibu" class="form-control" value="{{ $ortu->nama_ibu }}" required>
                            </div>
                        </div>
                        <div class="row" style="margin-bottom: 15px;">
                            <div class="col-3">
                                <label for="pekerjaan_ibu"><b>Pekerjaan Ibu</b></label>
                            </div>
                            <div class="col-1"><b>:</b></div>
                            <div class="col-8"> 
                                <input type="text" name="pekerjaan_ibu" id="pekerjaan_ibu" class="form-control" value="{{ $ortu->pekerjaan_ibu }}" required>
                            </div>
                        </div>
                        <div class="row" style="margin-bottom: 15px;">
                            <div class="col-3">
                                <label for="nik_ibu"><b>NIK Ibu</b></label>
                            </div>
                            <div class="col-1"><b>:</b></div>
                            <div class="col-8"> 
                                <input type="text" name="nik_ibu" id="nik_ibu" class="form-control" value="{{ $ortu->nik_ibu }}" required>
                            </div>
                        </div>
                        <button class="btn btn-main" type="submit">Simpan</button>
                        <a href="{{ url('ortu') }}" class="btn btn-main" role="button" aria-disabled="true">Kembali</a>
                        </div>
                        </div>
                    </form>
                </div><br>
            </div>
        </div>

        @include('template.script')
    </body>
</html>