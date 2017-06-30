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
                <a href= "<?php echo site_url ('man/man_edit/'.$value['eq_id']);?>">
                    <center>
                        <img src="<?php echo base_url('images_compare/'.$value['eq_pic']);?>" style="width: auto; height: 180px; margin-top: 10px;">
                    </center>
                    <center>
                        <p class="caption"><?php echo $value['eq_name'];?> <br/> <?php echo number_format($value['eq_cost'],2);?> บาท</p>
                    </center>
                </a>
            </div>
        </div>
        <?php
    }
    ?>
</div>
