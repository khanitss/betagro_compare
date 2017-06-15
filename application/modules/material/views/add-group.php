

 <div class="block-header clearfix">
  <h2 class="pull-left">Add Raw Material</h2>
  <ul class="breadcrumb pull-right">
    <li><a href="index.html">Home</a></li>
    <li><a href="index.html">Setting</a></li>
    <li><a href="<?php echo site_url ('material/material_page');?>">Material Group</a></li>
    <li><a href="<?php echo site_url ('material/material_group_page');?>">Add Raw Material Group</a></li>
  </ul>
</div>
<div class="row">

  <?php $attr = array('class' => 'form-horizontal');
  echo form_open_multipart('material/add_mate_group', $attr);?>

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
      </div>
      <h4>Add Raw Material</h4>

      <div class="card-body card-padding">
          <div class="form-group">
            <label class="col-sm-2 col-xs-2 control-label">Name :</label>
            <div class="col-sm-10 col-xs-10">
              <input class="form-control" id="focusedInput" type="text" placeholder="Material Group Name" name="cat_name">
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6">
              <button type="save" class="btn btn-success">Save</button>
            </div>
            <div class="col-sm-6">
              <a href="<?php echo site_url ('material/material_page');?>" type="cancel" class="btn btn-danger">Cancel</a>
            </div>
          </div>
      </div>

    </div>
  </div>
  <?php echo form_close();?>
</div>