<div class="block-header clearfix">
    <h2 class="pull-left">แก้ไขคน/อุปกรณ์</h2>
    <ul class="breadcrumb pull-right">
        <li><a href="<?php echo site_url ('dashboard/home');?>">หน้าหลัก</a></li>
        <li><a href="<?php echo site_url ('man/man_page');?>">คน/อุปกรณ์</a></li>
        <li><a href="<?php echo site_url ('man/edit_man/'.$this->uri->segment(3));?>">แก้ไขคน/อุปกรณ์</a></li>
    </ul>
</div>
<div class="form-group">
    <div class="col-sm-10 col-xs-6"></div>
    <div class="col-sm-2 col-xs-6 text-center">
        <a href="<?php echo site_url ('man/man_page');?>" type="cancel" class="btn btn-warning btn-block">กลับ</a>
    </div>
    <br/>
</div>

<?php
$attr = array('class' => 'form-horizontal');
echo form_open_multipart('man/update_man_details/'.$this->uri->segment(3),$attr);
?>
<?php foreach ($man_details as $key => $value)
{
    ?>

    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            <div class="card">
                <div class="card-body card-padding text-center">
                    <h2 class="text-left"><?php echo $value['eq_name'];?></h2>
                    <div class="fileinput fileinput-new card-body card-padding" data-provides="fileinput" align="center">
                        <span class="btn btn-default btn-file m-r-10">
                            <span class="fileinput-new"><img src="<?php echo base_url('images_compare/'.$value['eq_pic']);?>" style="width: auto; height: 300px; margin-top: 10px;"></span>
                            <span class="fileinput-exists">Change</span>
                            <input type="file" name="upload_file">
                        </span>
                        <span class="fileinput-filename"></span>
                        <a href="#" class="close fileinput-exists" data-dismiss="fileinput">&times;</a>
                    </div>
                    <div class="card-body card-padding">
                        <div class="form-group">
                            <label class="col-sm-2 col-xs-3 control-label">ชื่อกลุ่ม:</label>
                            <div class="col-sm-10 col-xs-9">
                                <input class="form-control" id="focusedInput" type="text" name="eq_name" placeholder="<?php echo $value['eq_name'];?>">
                            </div>
                            <label class="col-sm-2 col-xs-3 control-label">ราคา/ชั่วโมง:</label>
                            <div class="col-sm-10 col-xs-9">
                                <input class="form-control" id="focusedInput" type="text" name="eq_cost" placeholder="<?php echo $value['eq_cost'];?> บาท">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4 col-xs-4"></div>
                            <div class="col-sm-4 col-xs-4">
                                <a class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#saveModal">บันทึก</a>
                            </div>
                            <div class="col-sm-4 col-xs-4"></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2"></div>
            </div>
        </div>
    </div>
    <!-- Modal-->
    <div id="saveModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">ยืนยันการบันทึกข้อมูล?</h4>
                </div>

                <div class="modal-body">
                    <div class="col-sm-4 col-xs-4"></div>
                    <div class="col-sm-4 col-xs-4">
                        <button type="submit" class="btn btn-success btn-lg btn-block">ยืนยัน</button>
                    </div>
                    <div class="col-sm-4 col-xs-4">
                        <a type="button" data-dismiss="modal" class="btn btn-danger btn-lg btn-block">ยกเลิก</a>
                    </div>
                </div>

                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>
    <?php
}
?>
<?php echo form_close();?>
