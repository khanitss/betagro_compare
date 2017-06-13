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

<div class="row">
    <div class="col-sm-10 col-xs-8"></div>
    <div class="col-sm-2 col-xs-4 text-center">
        <a href="<?php echo site_url('food/add_food');?>">
            <button class="btn btn-success">Add Menu</button>
        </a>
    </div>
</div>

<div class="row">
    <form method="get">
        <div class="form-group">
            <?php
            foreach ($food_list as $key => $value) {
                ?>
                <div class="col-md-3">
                    <div class="thumbnail img-check">
                        <a href="<?php echo site_url('food/food_details');?>" class="text-center">
                            <img src="<?php echo base_url('dist/images/menu/s_ขาหมู.jpg');?>" alt="light" style="width:90%" class="img-thumbnail">
                            <input id="item1" value="val1" class="hidden" autocomplete="off">
                            <div class="caption">
                                <p><?php echo $value['food_name']; ?></p>
                            </div>
                        </a>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </form>
</div>
