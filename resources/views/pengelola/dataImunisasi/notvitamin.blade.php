@include('template.load')
@include('template.imun')
        <a href="{{ url('/pengelola/dataImunisasi/notvitamin/print') }}" class="btn btn-main" target="_blank" role="button" aria-disabled="true">Cetak Rekap Anak <i class="fa-solid fa-print ml-1"></i></a><br><br>
        <table id="dataimunisasi" class="table table-striped table-bordered text-center" border="1">
        <thead>
            <tr>
                <th>Nomor</th>
                <!--<th>Nama Posyandu</th>-->
                <th>NIK Anak</th>
                <th>Nama Anak</th>
                <!--<th>Tanggal Imunisasi</th>-->
                <th>Vaksin</th>
                <th>Vitamin</th>
                <th>Kondisi Anak</th>
                <th>Aksi</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($notvitamin as $data)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <!--<td></td>-->
                <td>{{ $data->nik_anak }}</td>
                <td>{{ $data->nama_anak }}</td>
                {{-- <td>
                    @foreach ($data->vaksins as $item)
                    {{ $item->tgl_vaksin }}
                    @endforeach
                </td> --}}
                <td>
                    @foreach ($data->vaksins as $item)
                    {{ $item->jenis_vaksin }} <br>
                    @endforeach
                </td>
                <td>
                    @foreach ($data->vitamins as $item)
                    {{ $item->jenis_vitamin }} <br>
                    @endforeach
                </td>
                <td>@foreach ($data->tumbuhs as $item)
                    {{ $item->status_penyimpangan }} <br>
                    @endforeach
                </td>
                <td>
                    <a href="history/{{$data->nik_anak}}"><button type="button" class="btn btn-info" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Riwayat"><i class="fa-solid fa-clock-rotate-left"></i></button></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    @include('template.imun2')