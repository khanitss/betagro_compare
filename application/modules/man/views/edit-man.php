<div class="block-header clearfix">
            <h2 class="pull-left">แก้ไข คน/อุปกรณ์</h2>
            <ul class="breadcrumb pull-right">
                <li><a href="<?php echo site_url ('dashboard/home');?>">หน้าหลัก</a></li>
                <li><a href="<?php echo site_url ('man/man_page');?>">คน/อุปกรณ์</a></li>
                <li><a href="<?php echo site_url ('man/edit_man/'.$this->uri->segment(3));?>">แก้ไข คน/อุปกรณ์</a></li>
            </ul>
        </div>
        <?php 
$attr = array('class' => 'form-horizontal');
echo form_open_multipart('man/update_man_details/'.$this->uri->segment(3),$attr);
?>
<?php
foreach ($man_details as $key => $value){
    ?>
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="card ">
                        <div class="card-body card-padding"> 
                            <h2><?php echo $value['eq_name'];?></h2>
                            <img class="center-block" src="<?php echo base_url('images_compare/'.$value['eq_pic']);?>" class="img-thumbnail" alt="Cinque Terre" style="width:45%" >
                <center><span class="fileinput-exists">Change
                <input type="file" name="upload_file"></span></center>
                            <div class="card-body card-padding">
                                <form class="form-horizontal">
                                    <div class="form-group">
                                        <label class="col-sm-4 col-xs-4 control-label">ชื่อกลุ่ม:</label>
                                        <div class="col-sm-8 col-xs-8">
                                            <input class="form-control" id="focusedInput" type="text" name="eq_name" placeholder="<?php echo $value['eq_name'];?>">
                                        </div>
                                        <label class="col-sm-4 col-xs-4 control-label">ราคา/ชั่วโมง:</label>
                                        <div class="col-sm-8 col-xs-8">
                                            <input class="form-control" id="focusedInput" type="text" name="eq_cost" placeholder="<?php echo $value['eq_cost'];?>">
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="row">
                                <div class="col-sm-2">
                                </div>
                                <div class="col-sm-3">
                                </div>
                                <button class="btn btn-success">บันทึก</button>
                                <div class="col-sm-4">
                                </div>
                                <div class="col-sm-3"></div>
                                <a href="<?php echo site_url ('man/man_page');?>" type="back" class="btn btn-danger">กลับ</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
               <?php
}
?>
<?php echo form_close();?>