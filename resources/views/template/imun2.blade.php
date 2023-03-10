<div class="d-grid gap-2 d-md-flex justify-content-md mb-3 mt-3">
   <a href="{{ url('pengelola') }}" class="btn btn-main" role="button" aria-disabled="true">Kembali</a>
</div>
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
@include('template.script3')
<!-- End of Script-->

@include('sweetalert::alert')

   </body>


   <script> 
   $(document).ready( function () {
       $('#dataimunisasi').DataTable();
   } );
   </script>
   </html>