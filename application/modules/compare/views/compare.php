<div class="block-header clearfix">
  <h2 class="pull-left">Compere : standard menu & betegro menu</h2>

  <ul class="breadcrumb pull-right">
    <li><a href="<?php echo site_url('dashboard/home');?>">Home</a></li>
    <li><a href="<?php echo site_url('compare/choose_menu1_page');?>">Choose Menu Standard</a></li>
    <li><a href="<?php echo site_url('compare/choose_menu2_page');?>">Choose Betagro Menu</a></li>
    <li><a href="<?php echo site_url('compare/compare_page');?>">Compare</a></li>
  </ul>
</div>

<div class="row">
  <div class="col-sm-10 col-xs-8"></div>
  <div class="col-sm-2 col-xs-4 text-right">
    <a href="<?php echo site_url('compare/choose_menu1_page');?>">
      <button class="btn btn-success">Back</button>
    </a>
  </div>
</div>

</br>

<div class="row">
    <div class="col-md-6">
      <?php $this->load->view('compare/profile_standard_panel');?>
    </div>

    <div class="col-md-6">
      betagro
    </div>

</div>
