<!-- Content Section START -->
<div class="block-header clearfix">
    <h2 class="pull-left">เมนูอาหาร</h2>
    <ul class="breadcrumb pull-right">
        <li><a href="<?php echo site_url('dashboard/home');?>">หน้าหลัก</a></li>
        <li><a href="">รายการอาหาร</a></li>
    </ul>
</div>

<!-- col standard-->
<div class="row">
    <div class="col-sm-10 col-xs-8"></div>
    <div class="col-sm-2 col-xs-4 text-center">
        <a href="<?php echo site_url('food/add_food');?>">
            <button class="btn btn-success btn-block">เพิ่มเมนู</button>
        </a>
    </div>
</div>

<div class="row">
    <div class="block-header">
        <h4>เมนูทั่วไป</h4>
    </div>
    <?php
    foreach ($food_list as $key => $value) {
        ?>
        <?php if($value['food_type'] == '0' and $value['food_status'] == '1')
        {
            ?>
            <div class="col-sm-3">
                <div class="card">
                    <a href="<?php echo site_url('food/food_details/'.$value['food_id']);?>" class="text-center">
                        <center><img src="<?php echo base_url('images_compare/'.$value['food_pic']);?>" class="img-thumbnail" style="margin-top: 10px; width: auto; height: 180px;"/><center>
                        <p class="caption" style="margin-top: 10px;">
                            <strong>
                                <?php echo $value['food_name'];?> <?php echo $value['food_for'];?> <?php echo $value['food_unit'];?>
                            </strong>
                        </p>
                    </a>
                </div>
            </div>
            <?php
        }
    }
    ?>
</div>

<div class="row">
    <div class="block-header">
        <h4>เมนูเบทาโกร</h4>
    </div>
    <?php
    foreach ($food_list as $key => $value) {
        ?>
        <?php if ($value['food_type'] == '1' and $value['food_status'] == '1')
        {
            ?>
            <div class="col-sm-3">
                <div class="card">
                    <a href="<?php echo site_url('food/food_details/'.$value['food_id']);?>" class="text-center">
                        <center><img src="<?php echo base_url('images_compare/'.$value['food_pic']);?>" class="img-thumbnail" style="width: auto; height: 180px;"/></center>
                        <p class="caption" style="margin-top: 10px;">
                            <strong>
                                <?php echo $value['food_name'];?> <?php echo $value['food_for'];?> <?php echo $value['food_unit'];?>
                            </strong>
                        </p>
                    </a>
                </div>
            </div>
            <?php
        }
    }
    ?>
</div>
