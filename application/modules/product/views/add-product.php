
  <div class="block-header clearfix">
  <h2 class="pull-left">เพิ่ม ผลิตภัณฑ์เบทาโกร</h2>
  <ul class="breadcrumb pull-right">
    <li><a href="index.html">หน้าหลัก</a></li>
    <li><a href="<?php echo site_url ('product/product_page');?>">ผลิตภัณฑ์เบทาโกร</a></li>
    <li><a href="#">เพิ่ม ผลิตภัณฑ์เบทาโกร</a></li>
  </ul>
</div>
 <?php 
          $attr = array('class' => 'form-horizontal');
          echo form_open_multipart('product/add_product',$attr);
  ?>
<div class="row">
  <div class="col-sm-2"></div>
    <div class="col-sm-8">
      <div class="card" align="center">
        <div class="fileinput fileinput-new card-body card-padding" data-provides="fileinput">
          <span class="btn btn-default btn-file m-r-5">
            <span class="fileinput-new"><img src="<?php echo base_url ('dist/images/icons/addButton.png');?>" width="50%" alt="">
            </span>
            <span class="fileinput-exists">Change
            </span>
              <input type="file" name="upload_file">
          </span>
          <span class="fileinput-filename">
          </span>
            <a href="#" class="close fileinput-exists" data-dismiss="fileinput">&times;</a>
            <h4>เพิ่ม รูปผลิตภัณฑ์เบทาโกร</h4>
            <div class="card-body card-padding">
              <form class="form-horizontal">
                <div class="form-group">
                  <label class="col-sm-2 col-xs-2 control-label">ชื่อ :</label>
                  <div class="col-sm-10 col-xs-10">
                    <input class="form-control" id="focusedInput" type="text" placeholder="ชื่อผลิตภัณฑ์" name="mat_name">
                  </div>
                  <label class="col-sm-2 col-xs-2 control-label">จำนวน :</label>
                  <div class="col-sm-10 col-xs-10">
                    <input class="form-control" id="focusedInput" type="text" placeholder="จำนวนของผลิตภัณฑ์" name="mat_quantity">
                  </div>
                  <label class="col-sm-2 col-xs-2 control-label">หน่วย :</label>
                  <div class="col-sm-10 col-xs-10">
                    <input class="form-control" id="focusedInput" type="text" placeholder="หน่วยของผลิตภัณฑ์" name="mat_unit" >
                  </div>
                  <label class="col-sm-2 col-xs-2 control-label">ราคา :</label>
                  <div class="col-sm-10 col-xs-10">
                    <input class="form-control" id="focusedInput" type="text" placeholder="ราคาของผลิตภัณฑ์" name="mat_cost">
                  </div>
                </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <button type="save" class="btn btn-success">บันทึก</button>
                    </div>
                    <div class="col-sm-4">
                      <a href="<?php echo site_url ('product/product_page');?>" type="cancel" class="btn btn-danger">ยกเลิก</a>
                    </div>
                  </div>
              </form>
            </div>
          <?php echo form_close();?>