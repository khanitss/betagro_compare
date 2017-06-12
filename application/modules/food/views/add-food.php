<!-- Content Section START -->
<div class="block-header clearfix">
    <h2 class="pull-left">Add Food</h2>
    <ul class="breadcrumb pull-right">
        <li><a href="<?php echo site_url('dashboard/home');?>">Home</a></li>
        <li><a href="<?php echo site_url('food/food_page');?>">Food Menu</a></li>
        <li><a href="<?php echo site_url('food/add_food');?>">Add Food</a></li>
    </ul>
</div>

<form>
    <label class="radio-inline"><input type="radio" name="optradio" value="">Standard Recipe</label>
    <label class="radio-inline"><input type="radio" name="optradio" value="">Betagro Recipe</label>
</form>
</br>
<div class="row">
    <div class="col-sm-4">
        <div class="card">
            <div class="card-header">
                <h2>Add Food</h2>
            </div>

            <div class="fileinput fileinput-new card-body card-padding" data-provides="fileinput" align="center">
                <span class="btn btn-default btn-file m-r-10">
                    <span class="fileinput-new"><img src="<?php echo base_url('dist/images/icons/addButton.png');?>" width="75%" alt=""></span>
                    <span class="fileinput-exists">Change</span>
                    <input type="file" name="...">
                </span>
                <span class="fileinput-filename"></span>
                <a href="#" class="close fileinput-exists" data-dismiss="fileinput">&times;</a>
                <h4></h4>
            </div>
        </div>
    </div>

    <div class="col-sm-8">
        <div class="card">
            <div class="card-body card-padding">
                <form class="form-horizontal">
                    <div class="form-group">
                        <label class="col-sm-2 col-xs-3 control-label">Name :</label>
                        <div class="col-sm-9 col-xs-9">
                            <input class="form-control" id="focusedInput" type="text" placeholder="Food Name">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 col-xs-3 control-label">For :</label>
                        <div class="col-sm-9 col-xs-9">
                            <input class="form-control" id="focusedInput" type="text" placeholder="Number">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 col-xs-3 control-label">Unit :</label>
                        <div class="col-sm-9 col-xs-9">
                            <input class="form-control" id="focusedInput" type="text" placeholder="Unit">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 col-xs-3 control-label">Time :</label>
                        <div class="col-sm-8 col-xs-6">
                            <input class="form-control" id="focusedInput" type="text" placeholder="Number">
                        </div>
                        <label class="col-sm-1 col-xs-2 control-label">Minutes</label>
                        <div class="col-sm-1"></div>
                    </div>
                </form>
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
        <div id="myAddRawModal" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Add Raw Material</h4>
                    </div>
                    <div class="modal-body">
                        <div class="col-md-4 text-center">
                            <a href="#">
                                <img src="<?php echo base_url('dist/images/material/sunnok.jpg');?>" alt="light" style="max-height:100px" class="img-thumbnail">
                            </a>
                            <input id="item1" value="val1" class="hidden" autocomplete="off">
                            <div class="caption">
                                <p>สันนอก</p>
                            </div>
                        </div>
                        <div class="col-md-4 text-center">
                            <a href="#">
                                <img src="<?php echo base_url('dist/images/material/sunnai.jpg');?>" alt="light" style="max-height:100px" class="img-thumbnail">
                            </a>
                            <input id="item2" value="val1" class="hidden" autocomplete="off">
                            <div class="caption">
                                <p>สันใน</p>
                            </div>
                        </div>
                        <div class="col-md-4 text-center">
                            <a href="#">
                                <img src="<?php echo base_url('dist/images/material/porkmin.jpg');?>" alt="light" style="max-height:100px" class="img-thumbnail">
                            </a>
                            <input id="item3" value="val1" class="hidden" autocomplete="off">
                            <div class="caption">
                                <p>หมูบด</p>
                            </div>
                        </div>
                        <div class="col-md-4 text-center">
                            <a href="#">
                                <img src="<?php echo base_url('dist/images/material/khapig.png');?>" alt="light" style="max-height:100px" class="img-thumbnail">
                            </a>
                            <input id="item4" value="val1" class="hidden" autocomplete="off">
                            <div class="caption">
                                <p>ขาหมู</p>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                    </div>
                </div>
            </div>
        </div>
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
                    <h4 class="modal-title">Add Raw Material</h4>
                </div>
                <div class="modal-body">
                    <div class="col-md-4 text-center">
                        <a href="#">
                            <img src="<?php echo base_url('dist/images/menu/12041301524825.jpg');?>" alt="light" style="max-height:100px" class="img-thumbnail">
                        </a>
                        <input id="item1" value="val1" class="hidden" autocomplete="off">
                        <div class="caption">
                            <p>Helper : 250 / hour</p>
                        </div>
                    </div>
                    <div class="col-md-4 text-center">
                        <a href="#">
                            <img src="<?php echo base_url('dist/images/menu/images.jpg');?>" alt="light" style="max-height:100px" class="img-thumbnail">
                        </a>
                        <input id="item2" value="val1" class="hidden" autocomplete="off">
                        <div class="caption">
                            <p>Cheff : 300 / hour</p>
                        </div>
                    </div>
                    <div class="col-md-4 text-center">
                        <a href="#">
                            <img src="<?php echo base_url('dist/images/menu/930660_91485537.jpg');?>" alt="light" style="max-height:100px" class="img-thumbnail">
                        </a>
                        <input id="item3" value="val1" class="hidden" autocomplete="off">
                        <div class="caption">
                            <p>Cheff : 250 / hour</p>
                        </div>
                    </div>
                    <div class="col-md-4 text-center">
                        <a href="#">
                            <img src="<?php echo base_url('dist/images/menu/gas-refill.jpg');?>" alt="light" style="max-height:100px" class="img-thumbnail">
                        </a>
                        <input id="item4" value="val1" class="hidden" autocomplete="off">
                        <div class="caption">
                            <p>Gas : 60 / hour</p>
                        </div>
                    </div>
                    <div class="col-md-4 text-center">
                        <a href="#">
                            <img src="<?php echo base_url('dist/images/menu/worldgas-15-kg.jpg');?>" alt="light" style="max-height:100px" class="img-thumbnail">
                        </a>
                        <input id="item5" value="val1" class="hidden" autocomplete="off">
                        <div class="caption">
                            <p>Gas : 35 / hour</p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                </div>
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
