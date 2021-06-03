
      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2020</span>
          </div>
        </div>
      </footer>
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
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url(); ?>assets/admin/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url(); ?>assets/admin/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url(); ?>assets/admin/js/sb-admin-2.min.js"></script>
  
  <!-- Page level plugins -->
  <script src="<?php echo base_url(); ?>assets/admin/vendor/chart.js/Chart.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/admin/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/admin/vendor/datatables/dataTables.bootstrap4.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/admin/vendor/jstars/jstars.js"></script>
  <script src="https://cdn.ckeditor.com/ckeditor5/21.0.0/classic/ckeditor.js"></script>

  <!-- Page level custom scripts -->
  <script src="<?php echo base_url(); ?>assets/admin/js/demo/datatables-demo.js"></script>

  <!-- Page level custom scripts -->
  <script> 
      $("#ow").hide();
    $("#level").on("change", function () {
      var value = $("#level option:selected").val();
      switch (value) {
        case '1':
          $("#ow").hide();
          break;
        case '2':
          $("#ow").show();
          break;
        default:
          $("#ow").hide();
      }
    });
  </script>
  <script type="text/javascript">
    $(document).ready(function(){
        $('#kategori').change(function(){
            var id=$('#kategori').val();
            $.ajax({
                url : "<?php echo base_url();?>logdata/wisata/get_subkategori",
                method : "POST",
                data : {id_kategori: id},
                async : true,
                dataType : 'json',
                success: function(data){
                    var html = "<option value=''>-- Select Sub Kategori --</option>";
                    var i;
                    for(i=0; i<data.length; i++){
                        html += "<option value='"+data[i].id+"'>"+data[i].nama+"</option>";
                    }
                    $('.sub_kategori').html(html);
                     
                }
            });
        });
    });
    $(document).ready(function () {
        $('[data-toggle="popover"]').popover();
    });
  </script>
  
    <script>
            ClassicEditor
        .create( document.querySelector( '#editor' ), {
            toolbar: [ 'heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote' ]
        } )
        .then( editor => {
            console.log( 'Editor was initialized', editor );
        } )
        .catch( error => {
            console.error( error.stack );
        } );
    </script>
</body>

</html>
