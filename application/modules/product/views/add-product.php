 <?php
          $attr = array('class' => 'form-horizontal');
          echo form_open('product/add_product',$attr);
  ?>
  <div class="block-header clearfix">
  <h2 class="pull-left">Add Betagro Product</h2>
  <ul class="breadcrumb pull-right">
    <li><a href="index.html">Home</a></li>
    <li><a href="<?php echo site_url ('product/product_page');?>">Betagro Product</a></li>
    <li><a href="#">Add Betagro Product</a></li>
  </ul>
</div>

<div class="row">

        <?php
        $attr = array('class' => 'form-horizontal');
        echo form_open_multipart('product/add_product',$attr);
        ?>
  <div class="col-sm-2"></div>
    <div class="col-sm-8">
      <div class="card" align="center">
        <div class="fileinput fileinput-new card-body card-padding" data-provides="fileinput">
          <span class="btn btn-default btn-file m-r-5">
            <span class="fileinput-new"><img src="<?php echo base_url ('dist/images/icons/addButton.png');?>" width="50%" alt="">
            </span>
            <span class="fileinput-exists">Change
            </span>
              <input type="file" name="...">
          </span>
          <span class="fileinput-filename">
          </span>
            <a href="#" class="close fileinput-exists" data-dismiss="fileinput">&times;</a>
            <h4>Add Betagro Product</h4>
            <div class="card-body card-padding">
              <form class="form-horizontal">
                <div class="form-group">
                  <label class="col-sm-2 col-xs-2 control-label">Name :</label>
                  <div class="col-sm-10 col-xs-10">
                    <input class="form-control" id="focusedInput" type="text" placeholder="Product Name" name="mat_name">
                  </div>
                  <label class="col-sm-2 col-xs-2 control-label">Quanlity :</label>
                  <div class="col-sm-10 col-xs-10">
                    <input class="form-control" id="focusedInput" type="text" placeholder="Quanlity" name="mat_quantity">
                  </div>
                  <label class="col-sm-2 col-xs-2 control-label">Unit :</label>
                  <div class="col-sm-10 col-xs-10">
                    <input class="form-control" id="focusedInput" type="text" placeholder="Unit" name="mat_unit" >
                  </div>
                  <label class="col-sm-2 col-xs-2 control-label">Cost :</label>
                  <div class="col-sm-10 col-xs-10">
                    <input class="form-control" id="focusedInput" type="text" placeholder="Bath" name="mat_cost">
                  </div>
                </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <button type="save" class="btn btn-success">SAVE</button>
                    </div>
                    <div class="col-sm-4">
                      <a href="<?php echo site_url ('product/product_page');?>" type="cancel" class="btn btn-danger">CANCEL</a>
                    </div>
                  </div>
              </form>
            </div>
          <?php echo form_close();?>
