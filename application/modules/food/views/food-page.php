<!-- Content Section START -->
<?php
if ($alert == '1') {
    ?>
    <div class="alert alert-success">
        <strong>Save Data Success!</strong>
        <button type="button" class="close" data-dismiss="alert">&times;</button>
    </div>
    <?php
}?>

<div class="block-header clearfix">
    <h2 class="pull-left">Menu</h2>
    <ul class="breadcrumb pull-right">
        <li><a href="<?php echo site_url('dashboard/home');?>">Home</a></li>
        <li><a href="">Food Menu</a></li>
    </ul>
</div>

<!-- col standard-->
<div class="row">
    <div class="col-sm-10 col-xs-8"></div>
    <div class="col-sm-2 col-xs-4 text-center">
        <a href="<?php echo site_url('food/add_food');?>">
            <button class="btn btn-success btn-block">Add Menu</button>
        </a>
    </div>
</div>

<div class="row">
    <div class="block-header">
        <h4>Standard Menu</h4>
    </div>
    <div class="form-group">
        <?php
        foreach ($food_list as $key => $value) {
            ?>
            <?php if($value['food_type'] == '0')
            {
                ?>
                <div class="col-md-3">
                    <div class="thumbnail">
                        <a href="<?php echo site_url('food/food_details/'.$value['food_id']);?>" class="text-center">
                            <img src="<?php echo base_url('images_compare/'.$value['food_pic']);?>" class="img-thumbnail">
                            <input id="item1" value="val1" class="hidden" autocomplete="off">
                            <p class="caption"><?php echo $value['food_name'];?> <?php echo $value['food_for'];?> <?php echo $value['food_unit'];?></p>
                        </a>
                    </div>
                </div>
                <?php
            }
        }
        ?>
    </div>
</div>

<div class="row">
    <div class="block-header">
        <h4>Betagro Menu</h4>
    </div>
    <div class="form-group">
        <?php
        foreach ($food_list as $key => $value) {
            ?>
            <?php if ($value['food_type'] == '1')
            {
                ?>
                <div class="col-md-3">
                    <div class="thumbnail">
                        <a href="<?php echo site_url('food/food_details/'.$value['food_id']);?>" class="text-center">
                            <img src="<?php echo base_url('images_compare/'.$value['food_pic']);?>" class="img-thumbnail">
                            <input id="item1" value="val1" class="hidden" autocomplete="off">
                            <p class="caption"><?php echo $value['food_name'];?> <?php echo $value['food_for'];?> <?php echo $value['food_unit'];?></p>
                        </a>
                    </div>
                </div>
                <?php
            }
        }
        ?>
    </div>
</div>
