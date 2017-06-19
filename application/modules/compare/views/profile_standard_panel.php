<!-- Calculate -->
<?php
$food_time = 0;
foreach ($standard as $key => $value)
{
    $food_time += $value['food_time'];
}
$sum = 0;
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
                    <h2><?php echo $value['food_name'];?></h2>
                </div>

                <div class="col-sm-2 col-xs-2">
                    <h2>
                        <img class="center-block" src="<?php echo base_url('dist/images/icons/Dollar-Sign-icon.png');?>" width="40px" height="40px">
                    </h2>
                </div>

                <div class="col-sm-3 col-xs-3">
                    <div >
                        <h2><?php echo $sum;?> บาท</h2>
                    </div>
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
        $this->load->view('compare/profile_standard_equipment_panel');
        ?>
    </div>

    <?php
}
?>
