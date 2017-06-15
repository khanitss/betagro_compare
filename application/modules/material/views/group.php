
<div class="block-header clearfix">
  <h2 class="pull-left"> Raw Material Group</h2>
  <ul class="breadcrumb pull-right">
    <li><a href="<?php echo site_url ('dashboard/home');?>">Home</a></li>
    <li><a href="">Setting</a></li>
    <li><a href="<?php echo site_url ('material/material_page');?>"> Raw Material Group</a></li>
  </ul>
</div>

<div class="row">
  <div class="col-sm-10 col-xs-8"></div>
  <div class="col-sm-2 col-xs-4 text-center">
    <a href ="<?php echo site_url ('material/material_group_page');?>" class="btn btn-success" > Raw Material Group</a>

  </div>
</div>
</br>
</br>

<div class="row">
  <!-- show img -->
  <?php
  foreach ($material_list as $key => $value) {
    ?>
    <div class="col-sm-3">
      <div class="thumbnail img-check">
        <a href="<?php echo site_url('material/material_d_page/'.$value['cat_id']);?>" class="text-center">
          <input id="item1" value="val1" class="hidden" autocomplete="off" >
          <img src="<?php echo base_url('images_compare/'.$value['cat_pic']);?>" alt="light" style="width:96%" class="img-thumbnail">
          <div class="caption">
            <p><?php echo $value['cat_name'];?></p>

          </div>
        </a>
      </div>
    </div>
    <?php 
  }
  ?> 

</div>
</div>
</div>
</div>
