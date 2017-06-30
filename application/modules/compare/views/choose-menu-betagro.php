<div class="block-header clearfix">
    <h2 class="pull-left">เมนูเบทาโกร</h2>
    <ul class="breadcrumb pull-right">
        <li><a href="<?php echo site_url('dashboard/home');?>">หน้าหลัก</a></li>
        <li><a href="<?php echo site_url('compare/choose_menu1_page');?>">เมนูทั่วไป</a></li>
        <li><a href="">เมนูเบทาโกร</a></li>
    </ul>
</div>

<div class="row">
    <div class="col-sm-10 col-xs-8"></div>
    <div class="col-sm-2 col-xs-4 text-right">
        <a href="<?php echo site_url('compare/choose_menu1_page');?>">
            <button class="btn btn-warning btn-block">กลับ</button>
        </a>
    </div>
</div>

<br/>

<div class="row">
    <div class="form-group">
        <?php foreach ($food_betagro_list as $key => $value)
        {
            ?>
            <?php if($value['food_status'] == '1')
            {
                ?>
                <div class="col-md-3">
                    <div class="thumbnail">
                        <a href="<?php echo site_url('compare/compare_page/'.$value['food_id']);?>" class="text-center">
                            <center><img src="<?php echo base_url('images_compare/'.$value['food_pic']);?>" class="img-thumbnail" style="margin-top: 10px; width: auto; height: 180px;"/></center>
                            <h5 class="caption" style="margin-top: 5px;">
                                <strong>
                                    <?php echo $value['food_name'];?><br/><?php echo $value['food_for'];?> <?php echo $value['food_unit'];?>
                                </strong>
                            </h5>
                        </a>
                    </div>
                </div>
                <?php
            }
        }
        ?>
    </div>
</div>
