<div class="block-header clearfix">
    <h2 class="pull-left">แก้ไขคน/อุปกรณ์</h2>
    <ul class="breadcrumb pull-right">
        <li><a href="<?php echo site_url ('dashboard/home');?>">หน้าหลัก</a></li>
        <li><a href="<?php echo site_url ('man/man_page');?>">คน/อุปกรณ์</a></li>
        <li><a href="<?php echo site_url ('man/edit_man/'.$this->uri->segment(3));?>">แก้ไขคน/อุปกรณ์</a></li>
    </ul>
</div>

<?php
$attr = array('class' => 'form-horizontal');
echo form_open_multipart('man/update_man_details/'.$this->uri->segment(3),$attr);
?>
<?php foreach ($man_details as $key => $value)
{
    ?>
    <div class="container">
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
                <div class="card ">
                    <div class="card-body card-padding">
                        <h2><?php echo $value['eq_name'];?></h2>

                        <div class="card-body card-padding text-center">
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
                                <form class="form-horizontal">
                                    <div class="form-group">
                                        <label class="col-sm-2 col-xs-4 control-label">ชื่อกลุ่ม:</label>
                                        <div class="col-sm-10 col-xs-8">
                                            <input class="form-control" id="focusedInput" type="text" name="eq_name" placeholder="<?php echo $value['eq_name'];?>">
                                        </div>
                                        <label class="col-sm-2 col-xs-4 control-label">ราคา/ชั่วโมง:</label>
                                        <div class="col-sm-10 col-xs-8">
                                            <input class="form-control" id="focusedInput" type="text" name="eq_cost" placeholder="<?php echo $value['eq_cost'];?>">
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="row">
                                <div class="col-sm-2"></div>
                                <div class="col-sm-4">
                                    <button class="btn btn-success btn-block">บันทึก</button>
                                </div>
                                <div class="col-sm-4">
                                    <a href="<?php echo site_url ('man/man_page');?>" type="back" class="btn btn-danger btn-block">กลับ</a>
                                </div>
                                <div class="col-sm-2"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2"></div>
                </div>
            </div>
            <?php
        }
        ?>
        <?php echo form_close();?>
