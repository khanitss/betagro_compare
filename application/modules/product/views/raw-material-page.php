<div class="block-header clearfix">
    <h2 class="pull-left">ผลิตภัณฑ์เบทาโกร</h2>
    <ul class="breadcrumb pull-right">
        <li><a href="<?php echo site_url ('dashboard/home');?>">หน้าหลัก</a></li>
        <li><a href="<?php echo site_url('product/material_page');?>">กลุ่มของผลิตภัณฑ์เบทาโกร</a></li>
        <li><a href="<?php echo site_url('product/material_d_page/'.$this->uri->segment(3));?>">ผลิตภัณฑ์เบทาโกร</a></li>
    </ul>
</div>

<?php 
    $attr = array('class' => 'form-horizontal', 'autocomplete'=>'off');
    echo form_open('product/material_d_page', $attr);
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
        <a href="<?php echo site_url('product/raw_page/'.$cat_id);?>" class="btn btn-success btn-block">เพิ่มผลิตภัณฑ์เบทาโกร</a>
    </div>
</div>
<?php echo form_close();?>

<div class="row">
    <?php foreach ($material_detail as $key => $value) {
        if ($value['mat_type']==1){
            ?>
            <div class="col-sm-3">
                <div class="thumbnail img-check">
                    <center>
                        <a href="<?php echo site_url('product/edit_page/'.$this->uri->segment(3).'/'.$value['mat_id']);?>" class="text-center">
                            <img src="<?php echo base_url('images_compare/'.$value['mat_pic']);?>" style="width: auto; height: 150px; margin-top : 10px; ">
                        </a>
                    </center>
                    <div class="caption">
                        <center>
                            <p><?php echo $value['mat_name'];?> <?php echo $value['mat_quantity'];?> <?php echo $value['mat_unit'];?> <br/><?php echo $value['mat_cost'];?> บาท</p>
                        </center>
                    </div>
                </div>
            </div>
            <?php
        }
    }
    ?>
</div>
