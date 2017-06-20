<!-- Calculate -->
<?php
$food_time = 0;
$sum = 0;
foreach ($standard as $key => $value)
{
    $food_time += $value['food_time'];
}
foreach ($mat_standard as $key => $value)
{
    $sum += $value['mat_cost'];
}
foreach ($eq_standard as $key => $value)
{
    $sum += $value['eq_cost']*($food_time/60);
}
?>
<!-- Calculate -->

<?php foreach($standard as $key => $value)
{
    ?>
    <div class="card">
        <div class="card-body card-padding">

            <div class="row">
                <div class="col-sm-7 col-xs-7">
                    <h3><?php echo $value['food_name'];?></h3>
                </div>

                <div class="col-sm-1 col-xs-1">
                    <h3>
                        <img class="center-block" src="<?php echo base_url('dist/images/icons/Dollar-Sign-icon.png');?>" width="30px" height="30px">
                    </h3>
                </div>

                <div class="col-sm-4 col-xs-4 text-center">
                    <h3><?php echo number_format($sum);?> บาท</h3>
                </div>
            </div>

            <br/>

            <div class="form-group">
                <img class="center-block" src="<?php echo base_url('images_compare/'.$value['food_pic']);?>" width="100%">
            </div>

            <br/>

            <div class="row">
                <div class="col-sm-3 col-xs-3"></div>
                <div class="col-sm-2 col-xs-2">
                    <img class="center-block" src="<?php echo base_url('dist/images/icons/checkin.png');?>" width="40px" height="40px">
                </div>
                <div class="col-sm-3 col-xs-3 d-inline-flex p-2"><pre><?php echo $value['food_for'];?> <?php echo $value['food_unit'];?></pre></div>
            </div>

            <br/>

            <div class="row">
                <div class="col-sm-3 col-xs-3"></div>
                <div class="col-sm-2 col-xs-2">
                    <img class="center-block" src="<?php echo base_url('dist/images/icons/time.png');?>" width="40px" height="40px">
                </div>
                <div class="col-sm-3 col-xs-3 d-inline-flex p-2"><pre><?php echo $value['food_time'];?> นาที</pre></div>
            </div>

        </div>

        <hr/>

        <?php
        $this->load->view('compare/profile_standard_raw_material_panel');
        ?>
        <hr/>
        <?php
        $this->load->view('compare/profile_standard_equipment_panel');
        ?>
    </div>

    <?php
}
?>
