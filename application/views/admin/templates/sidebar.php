<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="<?php if(isset($page) && $page=="dashboard"){echo 'active'; }?>">
          <a href="<?php echo site_url(); ?>admin">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            
          </a>
        </li>
        
       <li class="treeview <?php if(isset($page) && ($page=="banners" || $page=="addbanner" || $page=="editbanner") ){echo 'active'; }?>">
          <a href="#">
            <i class="fa fa-image"></i> <span>Banner</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="<?php if(isset($page) && $page=="addbanner"){echo 'active'; }?>"><a href="<?php echo base_url('admin/Banners/add') ?>"><i class="fa fa-circle-o"></i>Add Banner</a></li>
            <li class="<?php if(isset($page) && $page=="banners"){echo 'active'; }?>"><a href="<?php echo base_url('admin/Banners') ?>"><i class="fa fa-circle-o"></i>Show All</a></li>
          </ul>
        </li>
        
        <li class="treeview <?php if(isset($page) && ($page=="pages" || $page=="addpage" || $page=="editpage") ){echo 'active'; }?>">
          <a href="#">
            <i class="fa fa-file"></i>
            <span>Pages</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="<?php if(isset($page) && $page=="pages"){echo 'active'; }?>"><a href="<?php echo site_url('admin/pages'); ?>"><i class="fa fa-circle-o"></i> All Pages</a></li>
            
            <li class="<?php if(isset($page) && $page=="addpage"){echo 'active'; }?>"><a href="<?php echo site_url('admin/pages/add'); ?>"><i class="fa fa-circle-o"></i> Add Page</a></li>
            
          </ul>
        </li>
        
        <li class="treeview <?php if(isset($page) && ($page=="addresses" || $page=="editaddress")){echo 'active'; }?>">
          <a href="#">
            <i class="fa fa-file"></i>
            <span>Addresses</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="<?php if(isset($page) && $page=="editaddress"){echo 'active'; }?>"><a href="<?php echo site_url('admin/addresses'); ?>"><i class="fa fa-circle-o"></i>Edit Address</a></li>
            
          </ul>
        </li>     
        
        <li class="treeview <?php if(isset($page) && ($page=="newsandevents" || $page=="allnews" || $page=="addnews")){echo 'active'; }?>">
          <a href="#">
            <i class="fa fa-file"></i>
            <span>News & Events</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="<?php if(isset($page) && $page=="allnews"){echo 'active'; }?>"><a href="<?php echo site_url('admin/newsandevents'); ?>"><i class="fa fa-circle-o"></i>All News & Event</a></li>
            <li class="<?php if(isset($page) && $page=="addnews"){echo 'active'; }?>"><a href="<?php echo site_url('admin/newsandevents/add'); ?>"><i class="fa fa-circle-o"></i>Add News & Event</a></li>
            
          </ul>
        </li> 



<!--
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Careers</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('admin/careers') ?>"><i class="fa fa-circle-o"></i>Add Job</a></li>
            <li><a href="<?php echo base_url('admin/showalljobs') ?>"><i class="fa fa-circle-o"></i>Show All</a></li>
          </ul>
        </li>
-->

        </ul>
    </section>
    <!-- /.sidebar -->
  </aside>