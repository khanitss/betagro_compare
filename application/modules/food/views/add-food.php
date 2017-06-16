<!-- Content Section START -->
<div class="block-header clearfix">
    <h2 class="pull-left">Add Food</h2>
    <ul class="breadcrumb pull-right">
        <li><a href="<?php echo site_url('dashboard/home');?>">Home</a></li>
        <li><a href="<?php echo site_url('food/food_page');?>">Food Menu</a></li>
        <li><a href="<?php echo site_url('food/add_food');?>">Add Food</a></li>
    </ul>
</div>
</br>

<div class="row">

    <?php $attr = array('class' => 'form-horizontal');
    echo form_open_multipart('food/set_food_menu', $attr);?>

    <div class="col-sm-1"></div>

    <div class="card col-sm-10">

        <div class="card-body">
            <div class="row">

                <div class="col-sm-5">
                    <div class="fileinput fileinput-new card-body card-padding" data-provides="fileinput" align="center">
                        <span class="btn btn-default btn-file m-r-10">
                            <span class="fileinput-new"><img src="<?php echo base_url('dist/images/icons/addButton.png');?>" class="img-responsive" alt="addPic"></span>
                            <span class="fileinput-exists">Change</span>
                            <input type="file" name="upload_file">
                        </span>
                        <span class="fileinput-filename"></span>
                        <a href="#" class="close fileinput-exists" data-dismiss="fileinput">&times;</a>
                    </div>
                </div>

                <div class="col-sm-7 card-body card-padding">
                    <div class="form-group">
                        <label class="radio-inline"><input type="radio" name="food_type" checked="checked" value="0">Standard Recipe</label>
                        <label class="radio-inline"><input type="radio" name="food_type" value="1">Betagro Recipe</label>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 col-xs-3 control-label">Name :</label>
                        <div class="col-sm-9 col-xs-9">
                            <input class="form-control" id="focusedInput" type="text" placeholder="Food Name" name="food_name">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 col-xs-3 control-label">For :</label>
                        <div class="col-sm-9 col-xs-9">
                            <input class="form-control" id="focusedInput" type="text" placeholder="Number" name="food_for">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 col-xs-3 control-label">Unit :</label>
                        <div class="col-sm-9 col-xs-9">
                            <input class="form-control" id="focusedInput" type="text" placeholder="Unit" name="food_unit">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 col-xs-3 control-label">Time :</label>
                        <div class="col-sm-8 col-xs-6">
                            <input class="form-control" id="focusedInput" type="text" placeholder="Number" name="food_time">
                        </div>
                        <label class="col-sm-1 col-xs-2 control-label">Minutes</label>
                        <div class="col-sm-1"></div>
                    </div>

                    <div class="col-sm-8 col-xs-8"></div>
                    <div class="card-body card-padding col-sm-4 col-xs-4">
                        <button type="submit" class="btn btn-success btn-block">submit</button>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <div class="col-sm-1"></div>
</div>
<?php echo form_close();?>
</div>
<div class="row">
    <div class="col-sm-1"></div>
    <div class="col-sm-5">
        <div class="card">
            <div class="card-header">
                <h2>Raw Material</h2>
            </div>
            <div class="card-body card-padding text-center">
                <a href="#">
                    <img src="<?php echo base_url('dist/images/icons/addButton.png');?>" data-toggle="modal" data-target="#myAddRawModal" alt="addRaw" style="width:50%">
                </a>
            </div>
        </br>

        <!-- Modal -->
        <div id="myAddRawModal" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Add Raw Material</h4>
                    </div>
                    <div class="modal-body">
                        <?php
                        foreach ($mat_list as $key => $value) {
                            ?>
                            <div class="col-md-4 text-center">
                                <a href="#">
                                    <img src="<?php echo base_url('dist/images/material/sunnok.jpg');?>" alt="light" style="max-height:100px" class="img-thumbnail">
                                </a>
                                <input id="item1" value="val1" class="hidden" autocomplete="off">
                                <div class="caption">
                                    <p><?php echo $value['mat_name'];?> <?php echo $value['mat_quantity'];?> <?php echo $value['mat_unit'];?></p>
                                </div>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                    <div class="modal-footer">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-sm-5">
    <div class="card">
        <div class="card-header">
            <h2>Man / Equipment</h2>
        </div>
        <div class="card-body card-padding text-center">
            <a href="#">
                <img src="<?php echo base_url('dist/images/icons/addButton.png');?>" data-toggle="modal" data-target="#myAddEquipModal" alt="addEquip" style="width:50%">
            </a>
        </div>
    </br>

    <!-- Modal -->
    <div id="myAddEquipModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Add Man/Equipment</h4>
                </div>
                <div class="modal-body">
                    <?php
                    foreach ($man_list as $key => $value) {
                        ?>

                        <div class="col-md-4 text-center">
                            <a href="#">
                                <img src="<?php echo base_url('dist/images/menu/12041301524825.jpg');?>" alt="light" style="max-height:100px" class="img-thumbnail">
                            </a>
                            <input id="item1" value="val1" class="hidden" autocomplete="off">
                            <div class="caption">
                                <p><?php echo $value['eq_name'];?> : <?php echo $value['eq_cost'];?> บาท</p>
                            </div>
                        </div>

                        <?php
                    }
                    ?>
                </div>
                <div class="modal-footer"></div>
            </div>
        </div>
    </div>
</div>
</div>
<div class="col-sm-1"></div>
</div>

</div>

<div>
    <div class="row">
        <div class="col-sm-7 col-xs-1"></div>
        <div class="col-sm-2 col-xs-5">
            <a type="button" href="#" class="btn btn-success btn-lg btn-block">submit</a>
        </div>
        <div class="col-sm-2 col-xs-5">
            <a type="button" href="<?php echo site_url('food/food_page');?>" class="btn btn-danger btn-lg btn-block">back</a>
        </div>
        <div class="col-sm-1 col-xs-1"></div>
    </div>
</div>
