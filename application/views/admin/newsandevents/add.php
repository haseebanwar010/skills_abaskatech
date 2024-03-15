<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$baseUrl = $this->config->item('base_url');
?>
<!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->
 
    
    
    <div class="content-wrapper">
        
       <?php if(validation_errors()){ ?>
        <section class="content alertcontent">    
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-ban"></i> Alert!</h4>
                <?php echo validation_errors(); ?>
            </div>
        </section>
    <?php } ?>
       
    <section class="content-header">
      <h1>
        Add News & Events
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo $baseUrl; ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo $baseUrl; ?>admin/banners">News & Events</a></li>
        <li class="active"> Add News & Events</li>
      </ol>
    </section>
          <section class="content">
              <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Add News & Event</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form id="" role="form" method="post" action="<?php echo $baseUrl; ?>admin/newsandevents/add" enctype="multipart/form-data">
              
                <div class="col-lg-6">
                    <div class="form-group fileformgroup">
                        <label>Title</label>
                        <input name="title" type="text" value="" required  class="form-control" >
                    </div>
                </div>
                
              <div class="form-group">
                <label>Date:</label>

                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" name="date" required class="form-control pull-right" id="datepicker">
                </div>
                <!-- /.input group -->
              </div>
                
                <div class="col-lg-6">
                    <div class="form-group fileformgroup">
                        <label>Image</label>
                        <input name="image" type="file" required class="form-control">
                    </div>
                </div>
                  <div class="col-lg-12">
                    <div class="form-group fileformgroup">
                        <label>Description</label>
                        <textarea name="description" class="form-control"></textarea>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="form-group">
                        <button class="btn bg-navy margin submitbtn" type="submit">Submit</button>
                    </div>
                </div>
              </form>
            </div>
            <!-- /.box-body -->
          </div>
        </section>
    </div>


<script>
    
</script>
