<!DOCTYPE html>
<html lang="en">
@include('template.load')
@include('template.filterortu')

                    <h1 class="text-center mt-5 mb-5"><b>DATA ORANG TUA RW 3</b></h1>
                    <div class="container">

                    <div class="row">
                        <div class="col">
                        <div class="dropdown-center mt-3 mb-3">
                            <button class="btn btn-white btn-md dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="border-color: #647BB1; color:black;">
                                        Pilih RW
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item {{ Request::is('pengelola/dataOrtu') ? 'active' : '' }}" href="{{ url('pengelola/dataOrtu') }}">RW 01</a></li>
                                        <li><a class="dropdown-item {{ Request::is('pengelola/dataOrtu/tampildua') ? 'active' : '' }}" href="{{ url('pengelola/dataOrtu/tampildua') }}">RW 02</a></li>
                                        <li><a class="dropdown-item {{ Request::is('pengelola/dataOrtu/tampiltiga') ? 'active' : '' }}" href="{{ url('pengelola/dataOrtu/tampiltiga') }}">RW 03</a></li>
                                        <li><a class="dropdown-item {{ Request::is('pengelola/dataOrtu/tampilempat') ? 'active' : '' }}" href="{{ url('pengelola/dataOrtu/tampilempat') }}">RW 04</a></li>
                                        <li><a class="dropdown-item {{ Request::is('pengelola/dataOrtu/tampillima') ? 'active' : '' }}" href="{{ url('pengelola/dataOrtu/tampillima') }}">RW 05</a></li>
                                    </ul>
                            </div>
                        </div>
                    </div>
                    
                        <table id="dataortu" class="table table-striped table-bordered text-center">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>NO KK</th>
                                    <th>Nama Ayah</th>
                                    <th>Nama Ibu</th>
                                    <th>RT</th>
                                    <th>RW</th>
                                    <th>Alamat Ortu</th>
                                </tr>
                            </thead>
                            @foreach ($rwtiga as $key => $tiga)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $tiga->no_kk }}</td>
                                    <td>{{ $tiga->nama_ayah }}</td>
                                    <td>{{ $tiga->nama_ibu }}</td>
                                    <td>{{ $tiga->rt }}</td>
                                    <td>{{ $tiga->rw }}</td>
                                    <td>{{ $tiga->alamat_ortu }}</td>
                                </tr>
                            @endforeach
                            </div>
                        </table>
                        <a href="{{ url('pengelola') }}" class="btn btn-main" role="button" aria-disabled="true">Kembali</a>
                    </div>
                    <!-- /.container-fluid -->
    </div>
    <!-- End of Main Content -->

@include('template.filterortu2')