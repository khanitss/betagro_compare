<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie9"><![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login</title>

  <link rel="icon" href="<?php echo base_url('file/images/hotel-icon.png');?>" type="image/x-icon" />
  <link rel="shortcut icon" href="<?php echo base_url('file/images/hotel-icon.png');?>" type="image/x-icon" />

  <!-- Vendor CSS -->
  <link href="<?php echo base_url('vendors/animate.css/animate.min.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('vendors/material-design-iconic-font/dist/css/material-design-iconic-font.min.css'); ?>" rel="stylesheet">

  <!-- Dashplus CSS -->
  <link href="<?php echo base_url('dist/css/dashplus_1.min.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('dist/css/dashplus_2.min.css'); ?>" rel="stylesheet">

  <style>
    .lc-block {
      max-width: 400px;
    }
    .lcb-form .input-group  {
      display: inline-block;
      width: 100%;
    }

    .lc-block:not(.lc-block-alt) .lcb-form {
      padding: 35px 55px 35px 55px;
    }

    .lcb-form {
      padding: 35px 55px 35px 55px;
    }

    .lc-block .checkbox {
      margin: 5px 0 0 5px;
      text-align: left;
    }
    .lc-block:not(.toggled) {
      display: inline-block;
    }
    .input-group-addon{
      font-size: 18px;
    }
  </style>
</head>
<body>
  <div class="login-content">
    <!-- Login -->
    <div class="lc-block " id="l-login">
      <div class="lcb-form">
        <!-- < class="text-center "></> -->
        <h3 class="m-b-25 m-t-25 c-grey-800">Log In</h3>

        <?php
        $attr = array(
          'class'         => 'form-horizontal ls_form',
          'autocomplete'  => 'off'
          );
        echo form_open('authen/login', $attr);
        ?>
        <div class="form-group fg-float">
          <div class="col-sm-2 p-l-0">
            <span class="input-group-addon"><i class="zmdi zmdi-account"></i></span>
          </div>
          <div class="col-sm-10 p-l-0">
            <div class="fg-line">
            <input type="text" class="form-control fg-input">
            <label class="fg-label">Username</label>
          </div>
          </div>
        </div>

        <div class="form-group fg-float">
          <div class="col-sm-2 p-l-0">
            <span class="input-group-addon"><i class="zmdi zmdi-key"></i></span>
          </div>
          <div class="col-sm-10 p-l-0">
            <div class="fg-line">
              <input type="password" class="form-control fg-input">
              <label class="fg-label">Password</label>
            </div>
          </div>
        </div>


        <div class="input-group m-t-20">
          <button type="submit" class="btn btn-primary btn-lg btn-block waves-effect">Log In</button>
        </div>
        <?php echo form_close();?>

      </div>
    </div>
  </div>

  <!-- Javascript Libraries -->
  <script src="<?php echo base_url('vendors/jquery/dist/jquery.min.js'); ?>"></script>
  <script src="<?php echo base_url('vendors/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>
  <script src="<?php echo base_url('vendors/Waves/dist/waves.min.js'); ?>"></script>

  <script src="<?php echo base_url('dist/js/dashplus.min.js');?>"></script>
</body>
</html>
