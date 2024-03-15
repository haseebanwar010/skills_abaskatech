<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$baseUrl = $this->config->item('base_url');
?>
<footer class="main-footer">
    <div class="pull-right hidden-xs">
<!--      <b>Version</b> 2.4.0-->
    </div>
<!--
    <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
    reserved.
-->
  </footer>
  
 </div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?php echo base_url('assets/admin/bower_components/jquery/dist/jquery.min.js');?>"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url('assets/admin/bower_components/jquery-ui/jquery-ui.min.js');?>"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url('assets/admin/bower_components/bootstrap/dist/js/bootstrap.min.js');?>"></script>
<!-- Morris.js charts -->
<script src="<?php echo base_url('assets/admin/bower_components/raphael/raphael.min.js');?>"></script>
<script src="<?php echo base_url('assets/admin/bower_components/morris.js/morris.min.js');?>"></script>
<!-- Sparkline -->
<script src="<?php echo base_url('assets/admin/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js');?>"></script>
<!-- jvectormap -->
<script src="<?php echo base_url('assets/admin/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js');?>"></script>
<script src="<?php echo base_url('assets/admin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js');?>"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url('assets/admin/bower_components/jquery-knob/dist/jquery.knob.min.js');?>"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url('assets/admin/bower_components/moment/min/moment.min.js');?>"></script>
<script src="<?php echo base_url('assets/admin/bower_components/bootstrap-daterangepicker/daterangepicker.js');?>"></script>
<!-- datepicker -->
<script src="<?php echo base_url('assets/admin/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js');?>"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url('assets/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js');?>"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url('assets/admin/bower_components/jquery-slimscroll/jquery.slimscroll.min.js');?>"></script>
<!-- FastClick -->
<script src="<?php echo base_url('assets/admin/bower_components/fastclick/lib/fastclick.js');?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('assets/admin/dist/js/adminlte.min.js');?>"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url('assets/admin/dist/js/pages/dashboard.js');?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('assets/admin/dist/js/demo.js');?>"></script>
<!-- DataTables -->
<script src="<?php echo base_url('assets/admin/bower_components/datatables.net/js/jquery.dataTables.min.js');?>"></script>
<script src="<?php echo base_url('assets/admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js');?>"></script>
<!-- CK Editor -->
<script src="<?php echo base_url('assets/admin/bower_components/ckeditor/ckeditor.js');?>"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url('assets/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js');?>"></script>





<script>
  $(function () {
//      CKEDITOR.replace( 'editor1', {
//  extraPlugins: 'imageuploader'
//});
//
//
//CKEDITOR.editorConfig = function( config ) {
//  config.extraPlugins = 'imageuploader';
//};
        CKEDITOR.replace('editor1', { 
});
//      CKEDITOR.replace('editor1', { 
//    filebrowserImageUploadUrl: '/upload.php?type=image' 
//});
//      CKEDITOR.replace( 'editor1',
//                {
//                    filebrowserBrowseUrl :'js/ckeditor/filemanager/browser/default/browser.html?Connector=http://www.mixedwaves.com/filemanager_in_ckeditor/js/ckeditor/filemanager/connectors/php/connector.php',
//                    filebrowserImageBrowseUrl : 'js/ckeditor/filemanager/browser/default/browser.html?Type=Image&amp;Connector=http://www.mixedwaves.com/filemanager_in_ckeditor/js/ckeditor/filemanager/connectors/php/connector.php',
//                    filebrowserFlashBrowseUrl :'js/ckeditor/filemanager/browser/default/browser.html?Type=Flash&amp;Connector=http://www.mixedwaves.com/filemanager_in_ckeditor/js/ckeditor/filemanager/connectors/php/connector.php',
//		    filebrowserUploadUrl  :'http://www.mixedwaves.com/filemanager_in_ckeditor/js/ckeditor/filemanager/connectors/php/upload.php?Type=File',
//		    filebrowserImageUploadUrl : 'http://www.mixedwaves.com/filemanager_in_ckeditor/js/ckeditor/filemanager/connectors/php/upload.php?Type=Image',
//		    filebrowserFlashUploadUrl : 'http://www.mixedwaves.com/filemanager_in_ckeditor/js/ckeditor/filemanager/connectors/php/upload.php?Type=Flash'
// 
//});
      
      
      
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
//    CKEDITOR.replace('editor1')
    //bootstrap WYSIHTML5 - text editor
    $('.textarea').wysihtml5()
  })
</script>

<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>

<script>
  $(function () {
      //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    })

  })
</script>

</body>
</html>