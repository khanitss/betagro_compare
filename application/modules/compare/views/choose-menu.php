<div class="block-header clearfix">
  <h2 class="pull-left">เมนูเทั่วไป</h2>
  <ul class="breadcrumb pull-right">
    <li><a href="<?php echo site_url('dashboard/home');?>">หน้าหลัก</a></li>
    <li><a href="<?php echo site_url('compare/choose_menu1_page');?>">เมนูทั่วไป</a></li>
  </ul>
</div>

<div class="row">
  <?php foreach ($food_standard_list as $key => $value) {?>
    <div class="col-md-3">
      <div class="card">
        <div class="card card-padding">
          <a href="<?php echo site_url('compare/choose_menu2_page/'.$value['food_id']);?>">

            <br>

            <div class="row">
              <div class="col-md-12 text-center">
                <img src="<?php echo base_url('images_compare/'.$value['food_pic']);?>" class="img-responsive img-thumbnail" />
              </div>
            </div>

            <div class="row text-center" style="margin-top: 10px;">
              <strong>
                <?php
                  $food_name=($value['food_name']!=''? $value['food_name'] : 'ไม่ได้ระบุ...');
                  echo $food_name;
                ?>
              </strong>
            </div>
          </a>
        </div>
      </div>
    </div>
    <?php }?>
  </div>
