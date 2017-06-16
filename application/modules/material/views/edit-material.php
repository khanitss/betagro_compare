

<div class="block-header clearfix">
  <h2 class="pull-left">แก้ไขวัตถุดิบ</h2>
  <ul class="breadcrumb pull-right">
    <li><a href="index.html">หน้าหลัก</a></li>
    <li><a href="index.html">Setting</a></li>
    <li><a href="<?php echo site_url ('material/material_page');?>">กลุ่มของวัตถุดิบ</a></li>
    <li><a href="<?php echo site_url ('material/material_d_page');?>">วัตถุดิบ</a></li>
    <li><a href="<?php echo site_url ('material/edit_page');?>">แก้ไขวัตถุดิบ</a></li>
</ul>
</div>
    
<?php 
$attr = array('class' => 'form-horizontal');
echo form_open_multipart('material/update_material/'.$this->uri->segment(3),$attr);
?>
<?php
foreach ($material_detail as $key => $value){
    ?>
    <div class="row">
    <div class="col-sm-6">
        <div class="card ">
            <div class="card-body card-padding"> 
            <h2><?php echo $value['mat_name'];?></h2>
                <img class="center-block" src="<?php echo base_url('images_compare/'.$value['mat_pic']);?>" class="img-thumbnail" alt="Cinque Terre" style="width:45%" >
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
                                <div class="col-sm-2"></div>
                                <div class="col-sm-3"></div>
                                <button type="save" class="btn btn-success ">บันทึก
                                </button>
                                <div class="col-sm-4"></div>
                                <div class="col-sm-3"></div>
                                <a href="<?php echo site_url ('Material/Material_d_page');?>" type="back" class="btn btn-danger">กลับ
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    <?php
}
?>
<?php echo form_close();?>
