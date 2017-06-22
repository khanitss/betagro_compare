<div class="block-header clearfix">
    <h2 class="pull-left">วัตถุดิบ</h2>
    <ul class="breadcrumb pull-right">
        <li><a href="<?php echo site_url ('dashboard/home');?>">หน้าหลัก</a></li>
        <li><a href="<?php echo site_url('material/material_page');?>">กลุ่มของวัตถุดิบ</a></li>
        <li><a href="<?php echo site_url('material/material_d_page/'.$this->uri->segment(3));?>">วัตถุดิบ</a></li>
    </ul>
</div>

<div class="form-group">
    <div class="col-sm-10 col-xs-6"></div>
    <div class="col-sm-2 col-xs-6 text-center">
        <a href="<?php echo site_url('material/raw_page/'.$this->uri->segment(3));?>">
            <button class="btn btn-success btn-block">เพิ่มวัตถุดิบ</button>
        </a>
    </div>
    <br/>
</div>

<div class="row">
    <?php foreach ($material_detail as $key => $value) {
        if ($value['mat_type']==0)
        {
            ?>
            <div class="col-sm-3">
                <div class="thumbnail img-check">
                    <center>
                        <a href="<?php echo site_url('material/edit_page/'.$this->uri->segment(3).'/'.$value['mat_id']);?>" class="text-center">
                            <img src="<?php echo base_url('images_compare/'.$value['mat_pic']);?>" style="width: auto; height: 180px; margin-top : 10px;">
                        </a>
                    </center>
                    <div class="caption">
                        <center>
                            <p><?php echo $value['mat_name'];?> <?php echo $value['mat_quantity'];?> <?php echo $value['mat_unit'];?> <?php echo $value['mat_cost'];?>  บาท</p>
                        </center>
                        <a class="btn btn-danger " data-toggle="modal" data-target="#myAddRawModal">ลบ</a>
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
                            <h4 class="modal-title">ยืนยันการลบข้อมูล?</h4>
                        </div>

                        <div class="modal-body">
                            <div class="col-sm-4 col-xs-4"></div>
                            <div class="col-sm-4 col-xs-4">
                                <a href="<?php echo site_url('material/delete_material/'.$value['mat_id']);?>" type="delete" class="btn btn-success btn-lg btn-block">ยืนยัน</a>
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
    }
    ?>
</div>
