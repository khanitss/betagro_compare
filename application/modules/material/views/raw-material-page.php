<div class="block-header clearfix">
    <h2 class="pull-left">วัตถุดิบ</h2>
    <ul class="breadcrumb pull-right">
        <li><a href="<?php echo site_url ('dashboard/home');?>">หน้าหลัก</a></li>
        <li><a href="<?php echo site_url('material/material_page');?>">กลุ่มของวัตถุดิบ</a></li>
        <li><a href="<?php echo site_url('material/material_d_page/'.$cat_id);?>">วัตถุดิบ</a></li>
    </ul>
</div>

<?php 
    $attr = array('class' => 'form-horizontal', 'autocomplete'=>'off');
    echo form_open('material/material_d_page', $attr);
?>
<div class="form-group">
    <div class="col-sm-8 col-xs-4">
        <input type="text" name="txt_search_name" value="<?php echo $txt_search_name;?>" class="form-control" placeholder="ค้นหา..." style="background-color: #fff; padding-left: 7px;">
    </div>
    
    <div class="col-sm-2 col-xs-2">
        <input type="hidden" name="cat_id" value="<?php echo $cat_id;?>">
        <button type="submit" class="btn btn-info btn-block">ค้นหา</button>
    </div>

    <div class="col-sm-2 col-xs-6 text-center">
        <a href="<?php echo site_url('material/raw_page/'.$cat_id);?>" class="btn btn-success btn-block">เพิ่มวัตถุดิบ</a>
    </div>
</div>
<?php echo form_close();?>

<div class="row">
    <?php foreach ($material_detail as $key => $value) {?>
        <div class="col-sm-3">
            <div class="thumbnail">
                <center>
                    <a href="<?php echo site_url('material/edit_page/'.$cat_id.'/'.$value['mat_id']);?>" class="text-center">
                        <img src="<?php echo base_url('images_compare/'.$value['mat_pic']);?>" style="width: auto; height: 180px; margin-top : 10px;">
                    </a>
                </center>
                <div class="caption text-center">
                        <p><?php echo $value['mat_name'];?> <?php echo $value['mat_quantity'];?> <?php echo $value['mat_unit'];?> <br/><?php echo $value['mat_cost'];?>  บาท</p>
                </div>
            </div>
        </div>
    <?php }?>
</div>
