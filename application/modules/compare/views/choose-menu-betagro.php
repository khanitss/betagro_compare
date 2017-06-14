<!-- Content Section START -->
        <div class="block-header clearfix">
          <h2 class="pull-left">Choose Betrago Menu</h2>
          <ul class="breadcrumb pull-right">
            <li><a href="<?php echo site_url('dashboard/home');?>">Home</a></li>
            <li><a href="<?php echo site_url('compare/choose_menu1_page');?>">Choose Standard Menu</a></li><li><a href="<?php echo site_url('compare/choose_menu2_page');?>">Choose Betagro Menu</a></li>
          </ul>
        </div>
<!-- back -->
        <div class="row">
            <div class="col-sm-10 col-xs-8"></div>
                <div class="col-sm-2 col-xs-4 text-center">
                    <a href="<?php echo site_url('compare/choose_menu1_page');?>">
                        <button class="btn btn-success">Back</button>
                    </a>
                </div>
        </div></br>
<!-- choose menu --><?php
$id = $this->uri->segment(3);
?>
<div class="row">
  <?php foreach ($food_betagro_list as $key => $value) {?>
      <div class="col-md-3">
        <div class="card">
          <div class="card card-padding">
            <a href="<?php echo site_url('compare/compare_page/'.$id.$value['food_id']);?>">
            <div class="row">
              <div class="col-md-12">
                  <img src="<?php echo base_url('file/items_img/008.jpg');?>" class="img-responsive img-thumbnail " />
              </div>
            </div>
            <div class="row text-center" style="margin-top: 10px;">
              <strong><?php echo $value['food_name'];?></strong>
            </div>
            </a>
          </div>
         </div>
      </div>
  <?php }?>
</div>
