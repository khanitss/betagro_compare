<div class="block-header clearfix">
    <h2 class="pull-left">แก้ไขผลิตภัณฑ์เบทาโกร</h2>
    <ul class="breadcrumb pull-right">
        <li><a href="<?php echo site_url('dashboard/home');?>">หน้าหลัก</a></li>
        <li><a href="<?php echo site_url ('product/product_page');?>">ผลิตภัณฑ์เบทาโกร</a></li>
        <li><a href="<?php echo site_url('product/product_edit/'.$this->uri->segment(3));?>">แก้ไขผลิตภัณฑ์เบทาโกร</a></li>
    </ul>
</div>

<?php
$attr = array('class' => 'form-horizontal');
echo form_open_multipart('product/update_product_details/'.$this->uri->segment(3),$attr);
?>
<?php
foreach ($product_details as $key => $value){
    ?>
    <div class="col-sm-2"></div>
    <div class="col-sm-8">
        <div class="card ">
            <div class="card-body card-padding">
                <h2><?php echo $value['mat_name'];?></h2>
                <div class="card-body card-padding text-center">
                    <div class="fileinput fileinput-new card-body card-padding" data-provides="fileinput" align="center">
                        <span class="btn btn-default btn-file m-r-10">
                            <span class="fileinput-new"><img src="<?php echo base_url('images_compare/'.$value['mat_pic']);?>" width="100%"></span>
                            <span class="fileinput-exists">Change</span>
                            <input type="file" name="upload_file">
                        </span>
                        <span class="fileinput-filename"></span>
                        <a href="#" class="close fileinput-exists" data-dismiss="fileinput">&times;</a>
                    </div>

                    <div class="card-body card-padding">
                        <div class="form-group">
                            <label class="col-sm-2 col-xs-2 control-label">ชื่อ :</label>
                            <div class="col-sm-10 col-xs-10">
                                <input class="form-control" id="focusedInput" type="text" name="mat_name" placeholder="<?php echo $value['mat_name'];?>">
                            </div>
                            <label class="col-sm-2 col-xs-2 control-label">จำนวน :</label>
                            <div class="col-sm-10 col-xs-10">
                                <input class="form-control" id="focusedInput" type="text" name="mat_quantity" placeholder="<?php echo $value['mat_quantity'];?>">
                            </div>
                            <label class="col-sm-2 col-xs-2 control-label">หน่วย :</label>
                            <div class="col-sm-10 col-xs-10">
                                <input class="form-control" id="focusedInput" type="text" name="mat_unit" placeholder="<?php echo $value['mat_unit'];?>">
                            </div>
                            <label class="col-sm-2 col-xs-2 control-label">ราคา :</label>
                            <div class="col-sm-10 col-xs-10">
                                <input class="form-control" id="focusedInput" type="text" name="mat_cost" placeholder="<?php echo $value['mat_cost'];?>">
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-4">
                            <button type="save" class="btn btn-success btn-block">บันทึก</button>
                        </div>
                        <div class="col-sm-4">
                            <a href="<?php echo site_url ('product/product_page');?>" type="back" class="btn btn-danger btn-block">กลับ</a>
                        </div>
                        <div class="col-sm-2"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
}
?>
<?php echo form_close();?>
