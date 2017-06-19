<div class="block-header clearfix">
    <h2 class="pull-left"> กลุ่มของวัตถุดิบ</h2>
    <ul class="breadcrumb pull-right">
        <li><a href="<?php echo site_url ('dashboard/home');?>">หน้าหลัก</a></li>
        <li><a href="<?php echo site_url ('material/material_page');?>">กลุ่มของวัตถุดิบ</a></li>
    </ul>
</div>

<div class="row">
    <div class="col-sm-10 col-xs-8"></div>
    <div class="col-sm-2 col-xs-4 text-center">
        <a href ="<?php echo site_url ('material/material_group_page');?>" class="btn btn-success btn-block" >เพิ่มกลุ่มของวัตถุดิบ</a>

    </div>
</div>
<br/>

<div class="row">
    <!-- show img -->
    <?php foreach ($material_list as $key => $value)
    {
        ?>
        <div class="col-sm-3">
            <div class="thumbnail img-check">
                <center><a href="<?php echo site_url('material/material_d_page/'.$value['cat_id']);?>" class="text-center">
                <img src="<?php echo base_url('images_compare/'.$value['cat_pic']);?>" style="width: auto; height: 180px;"></a>
                </center>
                <div class="caption">
                    <center>
                        <p><?php echo $value['cat_name'];?></p>
                    </center>
                </div>
            </div>
        </div>
        <?php
    }
    ?>
</div>
