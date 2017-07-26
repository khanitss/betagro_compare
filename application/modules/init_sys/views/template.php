<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie9"><![endif]-->
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BETAGRO COMPARE</title>

    <script src="<?php echo base_url('vendors/jquery/dist/jquery.min.js');?>"></script>
    <script src="<?php echo base_url('vendors/bootstrap/dist/js/bootstrap.min.js');?>"></script>

    <!-- Vendor CSS -->
    <link href="<?php echo base_url('vendors/fullcalendar/dist/fullcalendar.min.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('vendors/animate.css/animate.min.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('vendors/sweetalert/dist/sweetalert.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('vendors/material-design-iconic-font/dist/css/material-design-iconic-font.min.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('vendors/map/jvectormap/jquery-jvectormap-2.0.3.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('vendors/flag-icons/css/flag-icon.min.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css');?>" rel="stylesheet">

    <!-- Google front -->
    <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">

    <!-- Dashplus CSS -->
    <link href="<?php echo base_url('dist/css/dashplus_1.min.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('dist/css/dashplus_2.min.css');?>" rel="stylesheet">

    <!-- PieChart -->
    <style>html { font-size: 14px; font-family: Arial, Helvetica, sans-serif; }</style>
    <title></title>
    <link rel="stylesheet" href="https://kendo.cdn.telerik.com/2017.2.504/styles/kendo.common-material.min.css" />
    <link rel="stylesheet" href="https://kendo.cdn.telerik.com/2017.2.504/styles/kendo.material.min.css" />
    <link rel="stylesheet" href="https://kendo.cdn.telerik.com/2017.2.504/styles/kendo.material.mobile.min.css" />

    <script src="https://kendo.cdn.telerik.com/2017.2.504/js/jquery.min.js"></script>
    <script src="https://kendo.cdn.telerik.com/2017.2.504/js/kendo.all.min.js"></script>

</head>

<body class="layout-fixed-left-menu left-sidebar-toggled" style="font-family: 'Kanit', sans-serif;">
    <!-- HEADER/TOPBAR SECTION -->
    <?php $this->load->view('header'); ?>

    <section id="main">
        <!-- Main Nav Bar -->
        <?php $this->load->view('left_menu'); ?>

        <!-- Content Section START -->
        <section id="content">
            <div class="container col-lg-12">
                <?php
                if (isset($nav) && $rows_nav !='') {
                    $this->load->view('init_sys/nav_bar');
                }
                $data['alert'] = $this->session->flashdata('alert');
                if ($alert == '1') {
                    ?>
                    <div class="alert alert-success">
                        <strong>บันทึกข้อมูลสำเร็จ</strong>
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                    </div>
                    <?php
                }
                elseif ($alert == '2') {
                    ?>
                    <div class="alert alert-warning">
                        <strong>ลบข้อมูลสำเร็จ</strong>
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                    </div>
                    <?php
                }?>

                <?php $this->load->view($content);?>

            </div>
        </section>
        <!-- Content Section END -->
    </section>

    <!-- Javascript Libraries -->
    <script src="<?php echo base_url('vendors/moment/min/moment.min.js');?>"></script>
    <script src="<?php echo base_url('vendors/Waves/dist/waves.min.js');?>"></script>
    <script src="<?php echo base_url('vendors/sweetalert/dist/sweetalert.min.js');?>"></script>
    <script src="<?php echo base_url('vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js');?>"></script>

    <!-- <script src="<?php echo base_url('vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js');?>"></script> -->
    <!-- <script src="<?php echo base_url('vendors/bootstrap-growl/bootstrap-growl.min.js');?>"></script> -->
    <!-- <script src="<?php echo base_url('vendors/bootstrap-wizard/jquery.bootstrap.wizard.min.js');?>"></script> -->
    <!-- <script src="<?php echo base_url('vendors/bootgrid/jquery.bootgrid.updated.min.js');?>"></script> -->
    <!-- <script src="<?php echo base_url('vendors/fileinput/fileinput.min.js');?>"></script> -->
    <!-- <script src="<?php echo base_url('vendors/bootstrap-select/dist/js/bootstrap-select.js');?>"></script> -->
    <!-- <script src="<?php echo base_url('vendors/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js');?>"></script> -->

    <script src="<?php echo base_url('dist/js/dashplus.min.js');?>"></script>
    <!-- <script src="<?php echo base_url('dist/js/my-bootgrid.js');?>"></script> -->
</body>
</html>
