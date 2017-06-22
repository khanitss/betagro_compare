
<div class="block-header clearfix">

    <h2 class="pull-left">แก้ไขวัตถุดิบ</h2>
    <ul class="breadcrumb pull-right">
        <li><a href="<?php echo site_url('dashboard/home');?>">หน้าหลัก</a></li>
        <li><a href="<?php echo site_url ('material/material_page');?>">กลุ่มของวัตถุดิบ</a></li>
        <li><a href="<?php echo site_url ('material/material_d_page/'.$this->uri->segment(3));?>">วัตถุดิบ</a></li>
        <li><a href="<?php echo site_url ('material/edit_page');?>">แก้ไขวัตถุดิบ</a></li>
    </ul>

</div>

<?php
$attr = array('class' => 'form-horizontal');
echo form_open_multipart('material/update_material/'.$this->uri->segment(4),$attr);
?>
<?php
foreach ($material_detail as $key => $value){
    ?>
    <div class="col-sm-10"></div>
<div class="col-sm-2">
    <a href="<?php echo site_url ('Material/Material_d_page/'.$this->uri->segment(3));?>"  type="cancel" class="btn btn-warning btn-block">กลับ</a>
</div>
<br/>
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            <div class="card ">
                <div class="card-body card-padding">
                    <h2><?php echo $value['mat_name'];?></h2>
                    <div class="card-body card-padding text-center">
                        <div class="fileinput fileinput-new card-body card-padding" data-provides="fileinput" align="center">
                            <span class="btn btn-default btn-file m-r-10">
                                <span class="fileinput-new"><img src="<?php echo base_url('images_compare/'.$value['mat_pic']);?>" style="width: auto; height: 300px; margin-top: 10px;"></span>
                                <span class="fileinput-exists">Change</span>
                                <input type="file" name="upload_file">
                            </span>
                            <span class="fileinput-filename"></span>
                            <a href="#" class="close fileinput-exists" data-dismiss="fileinput">&times;</a>
                        </div>
                        <div class="card-body card-padding">
                            <form class="form-horizontal">
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
                                        <input class="form-control" id="focusedInput" type="text" name="mat_cost" placeholder="<?php echo $value['mat_cost'];?>"></div></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4"></div>
                                        <div class="col-sm-4">
                                            <a class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#myAddRawModal">บันทึก</a>
                                        </div>
                                        <div class="col-sm-4"></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8"></div>
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
        <?php
    }
    ?>
    <?php echo form_close();?>
