  <div class="modal fade" id="image_view" tabindex="-1" role="dialog">
              <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="image_viewLabel">Image View</h4>
                        </div>
                        <div class="modal-body">
                         <img src="" id="img_id" style="width: 100%"  >
                        </div>
                    </div>
              </div>
    </div>



    <div class="modal fade modal-3d-slit" id="images_view_edit" aria-hidden="true"
  aria-labelledby="exampleModalTitle" role="dialog" tabindex="-1">
  <div class="modal-dialog modal-simple">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
        <h4 class="modal-title">Project Images</h4>
      </div>
      <div class="modal-body" id="images_view_edit_data">
      </div>
      
    </div>
  </div>
</div>

 <div class="modal fade modal-3d-slit" id="images_fetch_edit" aria-hidden="true"
  aria-labelledby="exampleModalTitle" role="dialog" tabindex="-1">
  <div class="modal-dialog modal-simple">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
        <h4 class="modal-title">Project Floor Images</h4>
      </div>
      <div class="modal-body" id="images_fetch_edit_data">
      </div>
      
    </div>
  </div>
</div>


  <script src="<?php echo base_url('assets/admin'); ?>/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="<?php echo base_url('assets/admin'); ?>/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="<?php echo base_url('assets/admin'); ?>/plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="<?php echo base_url('assets/admin'); ?>/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="<?php echo base_url('assets/admin'); ?>/plugins/node-waves/waves.js"></script>

    <!-- Jquery DataTable Plugin Js -->
    <script src="<?php echo base_url('assets/admin'); ?>/plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="<?php echo base_url('assets/admin'); ?>/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="<?php echo base_url('assets/admin'); ?>/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url('assets/admin'); ?>/plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="<?php echo base_url('assets/admin'); ?>/plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="<?php echo base_url('assets/admin'); ?>/plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src="<?php echo base_url('assets/admin'); ?>/plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="<?php echo base_url('assets/admin'); ?>/plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="<?php echo base_url('assets/admin'); ?>/plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>
 <script src="<?php echo base_url('assets/admin'); ?>/plugins/tinymce/tinymce.js"></script>
    <!-- Custom Js -->
    <script src="<?php echo base_url('assets/admin'); ?>/js/admin.js"></script>
    <script src="<?php echo base_url('assets/admin'); ?>/js/pages/tables/jquery-datatable.js"></script>
 <script src="https://gurayyarar.github.io/AdminBSBMaterialDesign/js/pages/forms/form-validation.js"></script>
 <script src="https://gurayyarar.github.io/AdminBSBMaterialDesign/plugins/jquery-validation/jquery.validate.js"></script>
 
 <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.6.6/summernote.min.js"></script>
 <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/jquery.validate.js"></script>
 <script src="<?php echo base_url('assets/admin'); ?>/js/pages/ui/modals.js"></script>
 
 
    <script src="<?php echo base_url('assets/admin'); ?>/js/demo.js"></script>
     <script type="text/javascript">
  $(document).ready(function() {
    $('#long_info').summernote({height: 300});
     $("#name").keyup(function (argument) {
        var str = $("#name").val();
         var replaced=str.split(' ').join('-');
         $("#seo").val(replaced);
     });
      $("#title").keyup(function (argument) {
        var str = $("#title").val();
         var replaced=str.split(' ').join('-');
         $("#seo").val(replaced);
     });
    });
  function isNumberKey(evt){
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
      return false;
    return true;
  }
  $('.name').keypress(function (e) {
    var regex = new RegExp("^[ 'a-zA-Z]+$");
    var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
    if (regex.test(str)) {
        return true;
    }

    e.preventDefault();
    return false;
}); 
  function myFunction(argument) {
  var copyText = document.getElementById("copy"+argument);
  copyText.select();
  copyText.setSelectionRange(0, 99999)
  document.execCommand("copy");
  alert("Copied the text: " + copyText.value);
}
</script>


</body>

</html>