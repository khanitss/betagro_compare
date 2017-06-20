<?php $attr = array('class' => 'form-horizontal');
echo form_open_multipart('product/add_raw_material', $attr);?>

<div class="block-header clearfix">
    <h2 class="pull-left">เพิ่มผลิตภัณฑ์เบทาโกร</h2>
    <ul class="breadcrumb pull-right">
        <li><a href="<?php echo site_url('dashboard/home');?>">หน้าหลัก</a></li>
        <li><a href="<?php echo site_url ('product/material_page');?>">กลุ่มของผลิตภัณฑ์เบทาโกร</a></li>
        <li><a href="<?php echo site_url ('product/material_d_page/'.$this->uri->segment(3));?>">ผลิตภัณฑ์เบทาโกร</a></li>
        <li><a href="<?php echo site_url ('product/raw_page');?>">เพิ่มผลิตภัณฑ์เบทาโกร</a></li>
    </ul>
</div>

<div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
        <div class="card" align="center">
            <div class="fileinput fileinput-new card-body card-padding" data-provides="fileinput">
                <span class="btn btn-default btn-file m-r-5">
                    <span class="fileinput-new">
                        <img src="<?php echo base_url ('dist/images/icons/addButton.png');?>" width="50%" alt="">
                    </span>
                    <span class="fileinput-exists">Change
                    </span>
                    <input type="file" name="upload_file">
                </span>
                <span class="fileinput-filename">
                </span>
                <a href="#" class="close fileinput-exists" data-dismiss="fileinput">&times;</a>
                <div class="card-body card-padding">

                    <div class="form-group">
                        <label class="col-sm-4 col-xs-4 control-label">ชื่อผลิตภัณฑ์เบทาโกร:</label>
                        <div class="col-sm-8 col-xs-8">
                            <input class="form-control" id="focusedInput" type="text" placeholder="ชื่อผลิตภัณฑ์เบทาโกร" name="mat_name">
                        </div>
                        <label class="col-sm-4 col-xs-4 control-label">จำนวน :</label>
                        <div class="col-sm-8 col-xs-8">
                            <input class="form-control" id="focusedInput" type="text" placeholder="จำนวนของผลิตภัณฑ์เบทาโกร" name="mat_quantity">
                        </div>
                        <label class="col-sm-4 col-xs-4 control-label">หน่วย :</label>
                        <div class="col-sm-8 col-xs-8">
                            <input class="form-control" id="focusedInput" type="text" placeholder="หน่วยของผลิตภัณฑ์เบทาโกร เช่น กิโลกรัม กรัม เป็นต้น" name="mat_unit">
                        </div>
                        <label class="col-sm-4 col-xs-4 control-label">ราคา :</label>
                        <div class="col-sm-8 col-xs-8">
                            <input class="form-control" id="focusedInput" type="text" placeholder="ราคาของผลิตภัณฑ์เบทาโกร" name="mat_cost">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-4">
                            <button type="save" class="btn btn-success btn-block">บันทึก</a></button>
                        </div>
                        <div class="col-sm-4">
                            <a href="<?php echo site_url ('product/material_d_page/'.$this->uri->segment(3));?>" type="cancel" class="btn btn-danger btn-block">ยกเลิก</a>
                        </div>
                        <div class="col-sm-3"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php echo form_close();?>
