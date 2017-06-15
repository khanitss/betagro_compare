<?php foreach($betagro as $key => $value){?>
<div class="card ">
  <div class="card-body card-padding">

    <div class="row" >
      <div class=" col-sm-7"><h2><?php echo $value['food_name'];?></h2></div>
        <div class="col-sm-3 text-right">
          <h2>
            <img class="center-block" src="<?php echo base_url('dist/images/icons/Dollar-Sign-icon.png'); ?>" class="img-thumbnail"  width="40px" height="40px">
          </h2>
        </div>

        <div class=" col-sm-2 d-inline-flex p-2"><h1>511</h1></div>
      </div>

      </br>

      <div class="row">
        <div class="col-md-12">
          <img class="center-block" src="<?php echo base_url('images_compare/'.$value['food_pic']);?>" class="img-thumbnail img-responsive" >
        </div>
      </div>

      </br>

      <div class="row">
        <div class="col-sm-3">
          <img class="center-block" src="<?php echo base_url('dist/images/icons/checkin.png');?>" class="img-thumbnail img-responsive"  width="50px" height="50px">
        </div>

        <div class="col-sm-3 d-inline-flex p-2"><pre><?php echo $value['food_for'];?></pre></div>
      </div>

      </br>

      <div class="row">
        <div class="col-sm-3"></div>
        <div class=" col-sm-3 d-inline-flex p-2"><pre><?php echo $value['food_unit'];?></pre></div>
      </div>

      </br>

      <div class="row">
        <div class="col-sm-3">
          <img class="center-block" src="<?php echo base_url('dist/images/icons/time.png');?>" class="img-thumbnail" alt="Cinque Terre" width="50px" height="50">
        </div>
        <div class="col-sm-3 d-inline-flex p-2"><pre><?php echo $value['food_time'];?></pre></div>
      </div>
<?php }?>

<hr>

<?php
// $this->load->view('compare/profile_betagro_raw_material_panel');
// $this->load->view('compare/profile_betagro_equipment_panel');
?>
</hr>
