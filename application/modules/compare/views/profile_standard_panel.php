<?php foreach($standard as $key => $value){?>
<div class="card ">
  <div class="card-body card-padding">

    <div class="row" >
      <div class=" col-sm-7"><h2><?php echo $value['food_name']; ?></h2></div>
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

      </br>

      <div class="row">
        <div class="col-md-12">
          <table class="table">
            <thead>
              <tr>
                <th>Raw Material</th>
                <th>Quantity</th>
                <th>Unit</th>
                <th>Cost</th>
              </tr>
            </thead>

            <tbody>
              <?php foreach($standard as $key => $value){?>
                <tr>
                  <td class="text-center"><?php echo $value['mat_name'];?></td>
                  <td class="text-center"><?php echo $value['mat_quantity'];?></td>
                  <td class="text-center"><?php echo $value['mat_unit'];?></td>
                  <td class="text-center"><?php echo $value['mat_cost'];?></td>
                </tr>
                <?php }?>
              </tbody>
            </table>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          loop Man eqiupment
          <table class="table">
            <thead>
              <tr>
                <th>Man/Equipment</th>
                <th>Quantity</th>
                <th>Unit</th>
                <th>Cost</th>
              </tr>
            </thead>

            <tbody>
              <?php foreach($standard as $key => $value){?>
                <tr>
                  <td class="text-center"><?php echo $value['eq_name']; ?></td>
                  <td class="text-center"><?php echo $value['eq_quantity']; ?></td>
                  <td class="text-center"><?php echo $value['eq_unit']; ?></td>
                  <td class="text-center"><?php echo $value['eq_cost']; ?></td>
                </tr>
              <?php }?>
              </tbody>
            </table>
        </div>
      </div>

    </div>
</div>
<?php }?>
