<style>
.nav-tabs {
    border-bottom: 2px solid #009688;
}

.nav-tabs>li>a {
    color: #009688;
    font-size: 16px;
    border: 1px solid transparent;
    border-radius: 2px 2px 0 0;
}

.nav-tabs>li>a:hover {
    border-color: #00e6cf #00e6cf #00e6cf;
}

.nav-tabs>li.active>a, .nav-tabs>li.active>a:hover, .nav-tabs>li.active>a:focus {
    font-size: 16px;
    color: #ffffff;
    background-color: #009688;
    border: 2px solid #009688;
    border-bottom-color: transparent;
    cursor: default;
}
</style>

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
    <div class="col-sm-10 col-xs-6"></div>
    <div class="col-sm-2 col-xs-6 text-center">
        <a href="<?php echo site_url('food/add_food');?>">
            <button class="btn btn-success btn-block">เพิ่มเมนู</button>
        </a>
    </div>
</div>

<ul class="nav nav-tabs" id="tabContent">
    <li class="active"><a href="#standard" data-toggle="tab">เมนูทั่วไป</a></li>
    <li><a href="#betagro" data-toggle="tab">เมนูเบทาโกร</a></li>
</ul>

<div class="tab-content">
    <div class="tab-pane active" id="standard">
        <?php
        foreach ($food_list as $key => $value) {
            if ($value['food_type'] == '0' and $value['food_status'] == '1') {
                ?>
                <div class="col-sm-3">
                    <div class="card">
                        <a href="<?php echo site_url('food/food_details/'.$value['food_id']); ?>" class="text-center">
                            <center>
                                <img src="<?php echo base_url('images_compare/'.$value['food_pic']); ?>" class="img-thumbnail" style="margin-top: 10px; width: auto; height: 180px;"/>
                            </center>
                            <p class="caption" style="margin-top: 10px;">
                                <strong>
                                    <?php echo $value['food_name']; ?> <?php echo $value['food_for']; ?> <?php echo $value['food_unit']; ?>
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

    <div class="tab-pane" id="betagro">
        <?php
        foreach ($food_list as $key => $value) {
            ?>
            <?php if ($value['food_type'] == '1' and $value['food_status'] == '1') {
                ?>
                <div class="col-sm-3">
                    <div class="card">
                        <a href="<?php echo site_url('food/food_details/'.$value['food_id']); ?>" class="text-center">
                            <center>
                                <img src="<?php echo base_url('images_compare/'.$value['food_pic']); ?>" class="img-thumbnail" style="margin-top: 10px;width: auto; height: 180px;"/>
                            </center>
                            <p class="caption" style="margin-top: 10px;">
                                <strong>
                                    <?php echo $value['food_name']; ?> <?php echo $value['food_for']; ?> <?php echo $value['food_unit']; ?>
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
</div>
