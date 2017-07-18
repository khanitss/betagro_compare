<!-- Content Section START -->
<div class="block-header clearfix">
    <h2 class="pull-left">เพิ่มรายการอาหาร</h2>
    <ul class="breadcrumb pull-right">
        <li><a href="<?php echo site_url('dashboard/home');?>">หน้าหลัก</a></li>
        <li><a href="<?php echo site_url('food/food_page');?>">รายการอาหาร</a></li>
        <li><a href="<?php echo site_url('food/add_food');?>">เพิ่มรายการอาหาร</a></li>
    </ul>
</div>

<div class="form-group">
    <div class="col-sm-10 col-xs-6"></div>
    <div class="col-sm-2 col-xs-6 text-center">
        <a type="button" href="<?php echo site_url('food/food_page');?>" type="cancel" class="btn btn-warning btn-block">กลับ</a>
    </div>
    <br/>
</div>

<div class="row">
    <?php $attr = array('class' => 'form-horizontal');
    echo form_open_multipart('food/set_food_menu', $attr);?>

    <div class="col-sm-2"></div>
    <div class="card col-sm-8">

        <div class="card-body">
            <div class="row">
                <div class="col-sm-5">
                    <div class="fileinput fileinput-new card-body card-padding" data-provides="fileinput" align="center">
                        <span class="btn btn-default btn-file m-r-10">
                            <span class="fileinput-new"><img src="<?php echo base_url('dist/images/icons/addButton.png');?>" class="img-responsive" alt="addPic"></span>
                            <span class="fileinput-exists">Change</span>
                            <input type="file" name="upload_file">
                        </span>
                        <span class="fileinput-filename"></span>
                        <a href="#" class="close fileinput-exists" data-dismiss="fileinput">&times;</a>
                    </div>
                </div>

                <div class="col-sm-7 card-body card-padding">
                    <div class="form-group">
                        <label class="radio-inline"><input type="radio" name="food_type" checked="checked" value="0">เมนูทั่วไป</label>
                        <label class="radio-inline"><input type="radio" name="food_type" value="1">เมนูเบทาโกร</label>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 col-xs-3 control-label">ชื่อ :</label>
                        <div class="col-sm-10 col-xs-9">
                            <input class="form-control" id="focusedInput" type="text" name="food_name">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 col-xs-3 control-label">จำนวน :</label>
                        <div class="col-sm-10 col-xs-9">
                            <input class="form-control" id="focusedInput" type="text" name="food_for">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 col-xs-3 control-label">หน่วย :</label>
                        <div class="col-sm-10 col-xs-9">
                            <input class="form-control" id="focusedInput" type="text" name="food_unit">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 col-xs-3 control-label">เวลา :</label>
                        <div class="col-sm-9 col-xs-7">
                            <input class="form-control" id="focusedInput" type="text" name="food_time">
                        </div>
                        <label class="col-sm-1 col-xs-2 control-label">นาที</label>
                    </div>

                </div>
                <div class="form-group">
                    <div class="col-sm-4 col-xs-4"></div>
                    <div class="col-sm-4 col-xs-4">
                        <a class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#saveModal">เพิ่ม</a>
                    </div>
                    <div class="col-sm-4 col-xs-4"></div>
                </div>
                
                <!-- Modal -->
                <div id="saveModal" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">ยืนยันข้อมูล?</h4>
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
            </div>
        </div>
    </div>
    <div class="col-sm-2"></div>
    <?php echo form_close();?>
</div>
