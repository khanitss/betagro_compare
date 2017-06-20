<div class="block-header clearfix">
    <h2 class="pull-left">เมนูทั่วไป</h2>
    <ul class="breadcrumb pull-right">
        <li><a href="<?php echo site_url('dashboard/home');?>">หน้าหลัก</a></li>
        <li><a href="<?php echo site_url('compare/choose_menu1_page');?>">เมนูทั่วไป</a></li>
    </ul>
</div>

<div class="row">
    <div class="form-group">
        <?php foreach ($food_standard_list as $key => $value)
        {
            ?>
            <?php if($value['food_status'] == '1')
            {
                ?>
                <div class="col-md-3">
                    <div class="card">
                        <a href="<?php echo site_url('compare/choose_menu2_page/'.$value['food_id']);?>" class="text-center">
                            <center><img src="<?php echo base_url('images_compare/'.$value['food_pic']);?>" class="img-thumbnail" style="margin-top: 10px; width: auto; height: 180px;"/></center>
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
</div>
