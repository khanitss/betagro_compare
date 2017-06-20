


<div class="block-header clearfix">
    <h2 class="pull-left"> กลุ่มของผลิตภัณฑ์เบทาโกร</h2>
    <ul class="breadcrumb pull-right">
        <li><a href="<?php echo site_url ('dashboard/home');?>">หน้าหลัก</a></li>
        <li><a href="<?php echo site_url ('product/material_page');?>">กลุ่มของผลิตภัณฑ์เบทาโกร</a></li>
    </ul>
</div>

<div class="row">
    <div class="col-sm-10 col-xs-8"></div>
    <div class="col-sm-2 col-xs-4 text-center">
        <a href ="<?php echo site_url ('product/material_group_page');?>" class="btn btn-success btn-block" >เพิ่มกลุ่มของผลิตภัณฑ์เบทาโกร</a>

    </div>
</div>
<br/>


<div class="row">
    <!-- show img -->
    <?php foreach ($material_list as $key => $value)
<<<<<<< HEAD
    {
        if ($value['mat_type']==1){
=======
    { if ($value['cat_type']==1){
>>>>>>> 11142a3dc213948b8d44d7c9081c45ebb1e7356c
        ?>

        <div class="col-sm-3">
            <div class="thumbnail img-check">
                <center><a href="<?php echo site_url('product/material_d_page/'.$value['cat_id']);?>" class="text-center">
                <img src="<?php echo base_url('images_compare/'.$value['cat_pic']);?>" style="width: auto; height: 180px; margin-top: 10px;"></a>
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
    }
}
    ?>
</div>
