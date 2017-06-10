<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie9"><![endif]-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>BETAGRO COMPARE</title>

   <!-- Vendor CSS -->
  <link href="<?php echo base_url('vendors/fullcalendar/dist/fullcalendar.min.css');?>" rel="stylesheet">
  <link href="<?php echo base_url('vendors/animate.css/animate.min.css');?>" rel="stylesheet">
  <link href="<?php echo base_url('vendors/sweetalert/dist/sweetalert.css');?>" rel="stylesheet">
  <link href="<?php echo base_url('vendors/material-design-iconic-font/dist/css/material-design-iconic-font.min.css');?>" rel="stylesheet">
  <link href="<?php echo base_url('vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css');?>" rel="stylesheet">
  <link href="<?php echo base_url('vendors/map/jvectormap/jquery-jvectormap-2.0.3.css');?>" rel="stylesheet">
  <link href="<?php echo base_url('vendors/flag-icons/css/flag-icon.min.css');?>" rel="stylesheet">

  <!-- Dashplus CSS -->
  <link href="<?php echo base_url('dist/css/dashplus_1.min.css');?>" rel="stylesheet">
  <link href="<?php echo base_url('dist/css/dashplus_2.min.css');?>" rel="stylesheet">

</head>
<body class="layout-fixed-left-menu left-sidebar-toggled">
  <!-- HEADER/TOPBAR SECTION -->
  <header id="header" class="clearfix" data-dp-theme="bluegrey">
    <ul class="main-header">
      <li class="dp-trigger" data-dp-action="left-sidebar-toggle" data-dp-target="#sidebar-left">
        <a href=""><i class="menu-icon zmdi zmdi-arrow-left"></i></a>
      </li>
      <li class="header-logo hidden-xs">
        <a href="<?php echo site_url('');?>">BETAGRO compare</a>
      </li>
    </ul>
  </header>

  <!-- Right Side Bar -->
  <aside id="sidebar-right" class="sidebar">
    <div class="lg-body mcs-overflow">
      <ul class="tab-nav m-t-10 p-l-15 p-r-15" role="tablist">
        <li class="active">
          <a href="#control-tab-contacts" aria-controls="control-tab-contacts" role="tab" data-toggle="tab"><i class="him-icon zmdi zmdi-accounts"></i></a>
        </li>
        <!-- <li>&nbsp;</li> -->
        <li class="close-btn">
          <a href="" data-dp-action="sidebar-close" data-dp-target="#sidebar-right"><i class="zmdi zmdi-close"></i></a>
        </li>
      </ul>

      <div class="tab-content">
        <div role="tabpanel" class="tab-pane active p-l-25 p-r-25 p-b-25 p-t-10" id="control-tab-contacts">
          <div class="list-group">
            <?php for ($i=0; $i < 9; $i++) {
    ?>
            <a class="list-group-item media" href="">
              <div class="pull-left p-relative">
                <img class="lg-item-img" src="<?php echo base_url('dist/images/profile-pics/2.jpg'); ?>" alt="">
                <!-- <i class="chat-status-busy"></i> -->
              </div>
              <div class="media-body">
                <div class="lg-item-heading">(<?php echo($i+1); ?>) Thomas Douglas</div>
                <small class="lg-item-text">Available</small>
              </div>
            </a>
            <?php
} ?>
          </div>
        </div>
      </div>
    </div>
  </aside>

  <section id="main">
    <!-- Main Nav Bar -->
    <nav id="sidebar-left" class="sidebar mcs-overflow">
      <?php $this->load->view('left_menu'); ?>
      <!-- Left Side Bar -->
    </nav>

    <!-- Content Section START -->
    <section id="content">
      <div class="container col-lg-12">
        <?php
          if (isset($nav) && $rows_nav !='') {
              $this->load->view('init_sys/nav_bar');
          }

          $this->load->view($content);
          ?>
        <!-- Card Content -->
      </div>
    </section>
    <!-- Content Section END -->
  </section>

  <!-- Footer -->
  <!-- <footer id="footer">
    Copyright &copy; 2016
  </footer> -->

  <!-- Javascript Libraries -->
  <script src="<?php echo base_url('vendors/moment/min/moment.min.js');?>"></script>
  <script src="<?php echo base_url('vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js');?>"></script>
  <script src="<?php echo base_url('vendors/Waves/dist/waves.min.js');?>"></script>
  <script src="<?php echo base_url('vendors/bootstrap-growl/bootstrap-growl.min.js');?>"></script>
  <script src="<?php echo base_url('vendors/sweetalert/dist/sweetalert.min.js');?>"></script>
  <script src="<?php echo base_url('vendors/bootstrap-wizard/jquery.bootstrap.wizard.min.js');?>"></script>
  <script src="<?php echo base_url('vendors/bootgrid/jquery.bootgrid.updated.min.js');?>"></script>
  <script src="<?php echo base_url('vendors/fileinput/fileinput.min.js');?>"></script>
  <script src="<?php echo base_url('vendors/bootstrap-select/dist/js/bootstrap-select.js');?>"></script>
  <script src="<?php echo base_url('vendors/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js');?>"></script>

  <script src="<?php echo base_url('dist/js/dashplus.min.js');?>"></script>

  <!-- my customs js -->
  <script src="<?php echo base_url('dist/js/my-bootgrid.js');?>"></script>

  <script type="text/javascript">
    $(document).ready(function() {
      bootgrid();
    });
  </script>

</body>
</html>
