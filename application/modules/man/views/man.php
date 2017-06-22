<div class="block-header clearfix">
    <h2 class="pull-left">คน/อุปกรณ์</h2>
    <ul class="breadcrumb pull-right">
        <li><a href="index.html">หน้าหลัก</a></li>
        <li><a href="#">คน/อุปกรณ์</a></li>
    </ul>
</div>

<div class="form-group">
    <div class="col-sm-10 col-xs-6"></div>
    <div class="col-sm-2 col-xs-6 text-center">
        <a href="<?php echo site_url('man/man_add');?>">
            <button class="btn btn-success btn-block">เพิ่มคน/อุปกรณ์</button>
        </a>
    </div>
    <br/>
</div>
<br/>

<div class="row">
    <?php
    foreach ($man_list as $key => $value)
    {
        ?>
        <div class="col-sm-3">
            <div class="thumbnail">
                <center>
                    <a href= "<?php echo site_url ('man/man_edit/'.$value['eq_id']);?>">
                        <img src="<?php echo base_url('images_compare/'.$value['eq_pic']);?>" style="width: auto; height: 180px; margin-top: 10px;">
                    </a>
                </center>
                <div class="caption">
                    <center><p><?php echo $value['eq_name'];?> : <?php echo $value['eq_cost'];?> บาท</p></center>
                    <a class="btn btn-danger" data-toggle="modal" data-target="#deleteModal">ลบ</a>
                </div>
            </div>
        </div>
        <!-- Modal-->
        <div id="deleteModal" class="modal fade" role="dialog">
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
                            <a href="<?php echo site_url('man/delete_man/'.$value['eq_id']);?>" class="btn btn-success btn-lg btn-block">ยืนยัน</a>
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
</div>
