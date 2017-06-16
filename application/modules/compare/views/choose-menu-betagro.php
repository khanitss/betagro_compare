<div class="block-header clearfix">
  <h2 class="pull-left">เมนูเบทาโกร</h2>
  <ul class="breadcrumb pull-right">
    <li><a href="<?php echo site_url('dashboard/home');?>">หน้าหลัก</a></li>
    <li><a href="<?php echo site_url('compare/choose_menu1_page');?>">เมนูทั่วไป</a></li>
    <li><a href="<?php echo site_url('compare/choose_menu2_page');?>">เมนูเบทาโกร</a></li>
  </ul>
</div>

<div class="row">
  <div class="col-sm-10 col-xs-8"></div>
  <div class="col-sm-2 col-xs-4 text-right">
    <a href="<?php echo site_url('compare/choose_menu1_page');?>">
      <button class="btn btn-success">กลับ</button>
    </a>
  </div>
</div>

</br>

<div class="row">
  <?php foreach ($food_betagro_list as $key => $value) {?>
    <div class="col-md-3">
        <div class="card card-padding">
          <a href="<?php echo site_url('compare/compare_page/'.$value['food_id']);?>">

            <br>

            <div class="row">
              <div class="col-md-12 text-center">
                <img src="<?php echo base_url('images_compare/'.$value['food_pic']);?>" class="img-responsive img-thumbnail" width="400px" height="400px"/>
              </div>
            </div>

            <div class="row text-center" style="margin-top: 10px;">
              <strong>
                <?php
                  $food_name=($value['food_name']!=''? $value['food_name'] : 'ไม่ได้ระบุ...');
                  echo $food_name;?>
              <?php foreach ($betagro as $key => $value) {?>
                <?php
                  $food_for=($value['food_for']!=''? $value['food_for'] : 'ไม่ได้ระบุ...');
                  echo $food_for;?>
                <?php
                  $food_unit=($value['food_unit']!=''? $value['food_unit'] : 'ไม่ได้ระบุ...');
                  echo $food_unit;
                ?>
                  <?php }?>
              </strong>
            </div>

          </a>
        </div>
      </div>
    <?php }?>
  </div>
