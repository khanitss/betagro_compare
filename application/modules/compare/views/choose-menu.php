<!-- Content Section START -->
<div class="block-header clearfix">
  <h2 class="pull-left">Choose Standard Menu</h2>
  <ul class="breadcrumb pull-right">
    <li><a href="<?php echo site_url('dashboard/home');?>">Home</a></li>
    <li><a href="<?php echo site_url('compare/choose_menu1_page');?>">Choose Standard Menu</a></li>
  </ul>
</div>

<div class="row">
  <?php foreach ($food_standard_list as $key => $value) {?>
    <div class="col-md-4">
      <a href="<?php echo site_url('compare/choose_menu2_page/'.$value['food_id']);?>">
        <div class="row">
          <img src="<?php echo base_url('file/items_img/008.jpg');?>" class="img-responsive" style="width:90%"/>
        </div>

        <div class="row text-center" style="margin-top: 10px;">
          <strong><?php echo $value['food_name'];?></strong>
        </div>
      </a>
    </div>
  <?php }?>
</div>

<!-- <label for="item1">

  <div class="caption">ขาหมูน้ำแดง</div>
</lable> -->
