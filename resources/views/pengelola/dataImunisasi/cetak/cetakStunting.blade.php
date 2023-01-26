@include('template.cetakimun')


        <table id="dataimunisasi" class="table table-bordered text-center" border="1">
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
            </tr>
        </thead>
        <tbody>
            @foreach ($anakList as $data)
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
            </tr>
            @endforeach
        </tbody>
    </table>


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
</body>
<!-- <script> 
$(document).ready( function () {
    $('#dataimunisasi').DataTable();
} );
</script> -->
</html>