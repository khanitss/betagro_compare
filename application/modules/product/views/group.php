<div class="block-header clearfix">
    <h2 class="pull-left">กลุ่มผลิตภัณฑ์เบทาโกร</h2>
    <ul class="breadcrumb pull-right">
        <li><a href="<?php echo site_url ('dashboard/home');?>">หน้าหลัก</a></li>
        <li><a href="<?php echo site_url ('product/material_page');?>">กลุ่มของผลิตภัณฑ์เบทาโกร</a></li>
    </ul>
</div>

<?php 
    $attr = array('class' => 'form-horizontal', 'autocomplete'=>'off');
    echo form_open('food/material_page', $attr);
?>
<div class="form-group">
    <div class="col-sm-8 col-xs-4">
        <input type="text" name="txt_search_name" value="<?php echo $txt_search_name;?>" class="form-control" placeholder="ค้นหา..." style="background-color: #fff; padding-left: 7px;">
    </div>
    
    <div class="col-sm-2 col-xs-2">
        <button type="submit" class="btn btn-info btn-block">ค้นหา</button>
    </div>

    <div class="col-sm-2 col-xs-6 text-center">
        <a href ="<?php echo site_url ('product/material_group_page');?>" class="btn btn-success btn-block">เพิ่มกลุ่มผลิตภัณฑ์เบทาโกร</a>
    </div>
</div>
<?php echo form_close();?>

<div class="row">
    <?php
    foreach ($material_list as $key => $value) {?>
    <div class="col-sm-3">
        <div class="thumbnail img-check">
            <center><a href="<?php echo site_url('product/material_d_page/'.$value['cat_id']);?>" class="text-center">
                <img src="<?php echo base_url('images_compare/'.$value['cat_pic']);?>" style="width: auto; height: 180px; margin-top: 10px;"></a>
            </center>
            <div class="caption text-center">
                    <p><?php echo $value['cat_name'];?></p>
            </div>
        </div>
    </div>
    <?php }?>
</div>
