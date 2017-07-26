<div class="block-header clearfix">
    <h2 class="pull-left">คน/อุปกรณ์</h2>
    <ul class="breadcrumb pull-right">
        <li><a href="index.html">หน้าหลัก</a></li>
        <li><a href="#">คน/อุปกรณ์</a></li>
    </ul>
</div>

<?php 
    $attr = array('class' => 'form-horizontal', 'autocomplete'=>'off');
    echo form_open('man/man_page', $attr);
?>
<div class="form-group">
    <div class="col-sm-8 col-xs-4">
        <input type="text" name="txt_search_name" value="<?php echo $txt_search_name;?>" class="form-control" placeholder="ค้นหา..." style="background-color: #fff; padding-left: 7px;">
    </div>
    
    <div class="col-sm-2 col-xs-2">
        <button type="submit" class="btn btn-info btn-block">ค้นหา</button>
    </div>

    <div class="col-sm-2 col-xs-6 text-center">
        <a href="<?php echo site_url('man/man_add');?>" class="btn btn-success btn-block">เพิ่มคน/อุปกรณ์</a>
    </div>
</div>
<?php echo form_close();?>

<div class="row">
    <?php foreach ($man_list as $key => $value) {?>
    <div class="col-sm-3">
        <div class="thumbnail text-center">
            <a href= "<?php echo site_url ('man/man_edit/'.$value['eq_id']);?>">
                <img src="<?php echo base_url('images_compare/'.$value['eq_pic']);?>" style="width: auto; height: 180px; margin-top: 10px;">
                <p class="caption"><?php echo $value['eq_name'];?> <br/> <?php echo number_format($value['eq_cost'],2);?> บาท</p>
            </a>
        </div>
    </div>
    <?php }?>
</div>
