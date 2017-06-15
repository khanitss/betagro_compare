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
    <div class="col-sm-4">
        <div class="card">
            <div class="card-header">
                <h2>Add Food</h2>
            </div>

            <?php $attr = array('class' => 'form-horizontal');
            echo form_open_multipart('food/set_food_menu', $attr);?>

            <div class="fileinput fileinput-new card-body card-padding" data-provides="fileinput" align="center">
                <span class="btn btn-default btn-file m-r-10">
                    <span class="fileinput-new"><img src="<?php echo base_url('dist/images/icons/addButton.png');?>" width="75%" alt=""></span>
                    <span class="fileinput-exists">Change</span>
                    <input type="file" name="upload_file">
                </span>
                <span class="fileinput-filename"></span>
                <a href="#" class="close fileinput-exists" data-dismiss="fileinput">&times;</a>
            </div>

        </div>
    </div>

    <div class="col-sm-8">
        <div class="card">
            <div class="card-body card-padding">

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

                <div class="form-group">
                    <div class="col-sm-10"></div>
                    <div class="col-sm-2">
                        <button type="submit" class="btn btn-success btn-lg">submit</button>
                    </div>
                </div>

                <?php echo form_close();?>

            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-2"></div>
    <div class="col-sm-4">
        <div class="card">
            <div class="card-header">
                <h2>Raw Material</h2>
            </div>
            <div align="center">
                <a href="#">
                    <img src="<?php echo base_url('dist/images/icons/addButton.png');?>" data-toggle="modal" data-target="#myAddRawModal" alt="addRaw" style="width:50%">
                </a>
            </div>
        </br>

        <!-- Modal -->
        
        </div>
    </div>

    <div class="col-sm-4">
        <div class="card">
            <div class="card-header">
                <h2>Man / Equipment</h2>
            </div>
            <div align="center">
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
                                    <p><?php echo $value['eq_name'];?> : <?php echo $value['eq_cost'];?> Baht</p>
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
<div class="col-sm-2"></div>
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
