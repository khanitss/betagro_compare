<div class="block-header clearfix">
    <h2 class="pull-left">คน/อุปกรณ์</h2>
    <ul class="breadcrumb pull-right">
        <li><a href="index.html">หน้าหลัก</a></li>
        <li><a href="#">คน/อุปกรณ์</a></li>
    </ul>
</div>

<div class="row">
    <div class="col-sm-10 col-xs-8"></div>
    <div class="col-sm-2 col-xs-4 text-center">
        <a href="<?php echo site_url('man/man_add');?>">
            <button class="btn btn-success btn-block">เพิ่มคน/อุปกรณ์</button>
        </a>
    </div>
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
                        <img src="<?php echo base_url('images_compare/'.$value['eq_pic']);?>" style="width: auto; height: 180px;">
                    </a>
                </center>
                <div class="caption">
                    <center><p><?php echo $value['eq_name'];?> : <?php echo $value['eq_cost'];?> บาท</p></center>
                    <a href="<?php echo site_url('man/delete_man/'.$value['eq_id']);?>" type="delete" class="btn btn-danger">ลบ</a>
                </div>
            </div>
        </div>
        <?php
    }
    ?>
</div>
