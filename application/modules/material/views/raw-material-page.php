<div class="block-header clearfix">
    <h2 class="pull-left">วัตถุดิบ</h2>
    <ul class="breadcrumb pull-right">
        <li><a href="<?php echo site_url ('dashboard/home');?>">หน้าหลัก</a></li>
        <li><a href="<?php echo site_url('material/material_page');?>">กลุ่มของวัตถุดิบ</a></li>
        <li><a href="<?php echo site_url('material/material_d_page/'.$cat_id);?>">วัตถุดิบ</a></li>
    </ul>
</div>

<div class="form-group">
    <div class="col-sm-10 col-xs-6"></div>
    <div class="col-sm-2 col-xs-6 text-center">
        <a href="<?php echo site_url('material/raw_page/'.$cat_id);?>">
            <button class="btn btn-success btn-block">เพิ่มวัตถุดิบ</button>
        </a>
    </div>
    <br/>
</div>

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
