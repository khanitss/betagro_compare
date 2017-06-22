<div class="block-header clearfix">
    <h2 class="pull-left">เพิ่มกลุ่มของวัตถุดิบ</h2>
    <ul class="breadcrumb pull-right">
        <li><a href="<?php echo site_url('dashboard/home');?>">หน้าหลัก</a></li>
        <li><a href="<?php echo site_url ('material/material_page');?>">กลุ่มของวัตถุดิบ</a></li>
        <li><a href="<?php echo site_url ('material/material_group_page');?>">เพิ่มกลุ่มของวัตถุดิบ</a></li>
    </ul>
</div>
<div class="form-group">
    <div class="col-sm-10"></div>
    <div class="col-sm-2">
        <a href="<?php echo site_url ('material/material_page');?>"  type="cancel" class="btn btn-warning btn-block">กลับ</a>
    </div>
    <br/>
</div>

<div class="row">
    <?php $attr = array('class' => 'form-horizontal');
    echo form_open_multipart('material/add_mate_group', $attr);?>

    <div class="col-sm-2"></div>
    <div class="col-sm-8">
        <div class="card" align="center">

            <div class="fileinput fileinput-new card-body card-padding" data-provides="fileinput">
                <span class="btn btn-default btn-file m-r-5">
                    <span class="fileinput-new"><img src="<?php echo base_url ('dist/images/icons/addButton.png');?>" width="50%" alt="">
                    </span>
                    <span class="fileinput-exists">Change
                    </span>
                    <input type="file" name="upload_file">
                </span>
                <span class="fileinput-filename">
                </span>
                <a href="#" class="close fileinput-exists" data-dismiss="fileinput">&times;</a>
            </div>
            <h4>เพิ่มกลุ่มของวัตถุดิบ</h4>

            <div class="card-body card-padding">
                <div class="form-group">
                    <label class="col-sm-2 col-xs-2 control-label">ชื่อ :</label>
                    <div class="col-sm-9 col-xs-9">
                        <input class="form-control" id="focusedInput" type="text" placeholder="ชื่อของกลุ่มวัตถุดิบ" name="cat_name">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4"></div>
                    <div class="col-sm-4">
                        <a class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#myAddRawModal">บันทึก</a>
                    </div>
                    <div class="col-sm-4"></div>


                    <div class="col-sm-3"></div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<!-- Modal -->
<div id="myAddRawModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">ยืนยันข้อมูล?</h4>
            </div>

            <div class="modal-body">
                <div class="col-sm-4"></div>
                <div class="col-sm-4">
                    <button type="submit" class="btn btn-success btn-lg btn-block">ยืนยัน</button>
                </div>
                <div class="col-sm-4">
                    <a type="button" data-dismiss="modal" class="btn btn-danger btn-lg btn-block">ยกเลิก</a>
                </div>
            </div>

            <div class="modal-footer">
            </div>

        </div>
    </div>
</div>
<?php echo form_close();?>
</div>
