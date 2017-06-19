<div class="block-header clearfix">
    <h2 class="pull-left">เพิ่มคน/อุปกรณ์</h2>
    <ul class="breadcrumb pull-right">
        <li><a href="index.html">หน้าหลัก</a></li>
        <li><a href="<?php echo site_url ('man/man_page');?>">คน/อุปกรณ์</a></li>
        <li><a href="#">เพิ่มคน/อุปกรณ์</a></li>
    </ul>
</div>

<div class="row">
    <?php
    $attr = array('class' => 'form-horizontal');
    echo form_open_multipart('man/add_man',$attr);
    ?>
    <div class="col-sm-2"></div>
    <div class="col-sm-8">
        <div class="card" align="center">

            <div class="fileinput fileinput-new card-body card-padding" data-provides="fileinput">
                <span class="btn btn-default btn-file m-r-5">
                    <span class="fileinput-new"><img src="<?php echo base_url ('dist/images/icons/addButton.png');?>" width="50%" alt="">
                    </span>
                    <span class="fileinput-exists">Change</span>
                    <input type="file" name="upload_file">
                </span>
                <span class="fileinput-filename">
                </span>
                <a href="#" class="close fileinput-exists" data-dismiss="fileinput">&times;</a>

                <div class="card-body card-padding">
                    <form class="form-horizontal">
                        <div class="form-group">
                            <label class="col-sm-3 col-xs-4 control-label">ชื่อกลุ่ม:</label>
                            <div class="col-sm-9 col-xs-8">
                                <input class="form-control" id="focusedInput" type="text" placeholder="ชื่อกลุ่มของคน/อุปกรณ์" name="eq_name">
                            </div>
                            <label class="col-sm-3 col-xs-4 control-label">ราคา/ชั่วโมง:</label>
                            <div class="col-sm-9 col-xs-8">
                                <input class="form-control" id="focusedInput" type="text" placeholder="ราคาคน/อุปกรณ์คิดเป็นชั่วโมง" name="eq_cost">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <button type="save" class="btn btn-success">บันทึก</button>
                        </div>
                        <div class="col-sm-4">
                            <button class="btn btn-danger">ยกเลิก</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php echo form_close();?>
