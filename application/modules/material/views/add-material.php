<?php $attr = array('class' => 'form-horizontal');
echo form_open_multipart('material/add_raw_material', $attr);?>

<div class="block-header clearfix">
    <h2 class="pull-left">เพิ่มวัตถุดิบ</h2>
    <ul class="breadcrumb pull-right">
        <li><a href="index.html">หน้าหลัก</a></li>
        <li><a href="<?php echo site_url ('material/material_page');?>">กลุ่มของวัตถุดิบ</a></li>
        <li><a href="<?php echo site_url ('material/material_d_page');?>">วัตถุดิบ</a></li>
        <li><a href="<?php echo site_url ('material/raw_page');?>">เพิ่มวัตถุดิบ</a></li>
    </ul>
</div>

<div class="row">
    <div class="col-sm-2"></div>
    <div class="col-sm-8">
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
                        <label class="col-sm-2 col-xs-2 control-label">ชื่อวัตถุดิบ:</label>
                        <div class="col-sm-10 col-xs-10">
                            <input class="form-control" id="focusedInput" type="text" placeholder="ชื่อวัตถุดิบ" name="mat_name">
                        </div>
                        <label class="col-sm-2 col-xs-2 control-label">จำนวน :</label>
                        <div class="col-sm-10 col-xs-10">
                            <input class="form-control" id="focusedInput" type="text" placeholder="จำนวน" name="mat_quantity">
                        </div>
                        <label class="col-sm-2 col-xs-2 control-label">หน่วย :</label>
                        <div class="col-sm-10 col-xs-10">
                            <input class="form-control" id="focusedInput" type="text" placeholder="หน่วย" name="mat_unit">
                        </div>
                        <label class="col-sm-2 col-xs-2 control-label">ราคา :</label>
                        <div class="col-sm-10 col-xs-10">
                            <input class="form-control" id="focusedInput" type="text" placeholder="ราคา" name="mat_cost">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-4">
                            <button type="save" class="btn btn-success btn-block">บันทึก</a></button>
                        </div>
                        <div class="col-sm-4">
                            <a href="<?php echo site_url ('material/material_d_page');?>" type="cancel" class="btn btn-danger btn-block">ยกเลิก</a>
                        </div>
                        <div class="col-sm-2"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php echo form_close();?>
