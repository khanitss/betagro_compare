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
                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarousel" data-slide-to="1"></li>
                                <li data-target="#myCarousel" data-slide-to="2"></li>
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" align="center">
                                <div class="item active">
                                    <img src="dist/images/contacts/1.jpg" width="50%" alt="1">
                                </div>

                                <div class="item">
                                    <img src="dist/images/contacts/2.jpg" width="50%" alt="2">
                                </div>

                                <div class="item">
                                    <img src="dist/images/contacts/3.jpg" width="50%" alt="3">
                                </div>
                            </div>

                            <!-- Left and right controls -->
                            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="row">
                            <div class="col-sm-2 col-xs-2"></div>
                            <div class="col-sm-4 col-xs-4">
                                <a type="button" class="btn btn-success btn-block " data-dismiss="modal">Add</a>
                            </div>
                            <div class="col-sm-4 col-xs-4">
                                <a type="button" class="btn btn-danger btn-block " data-dismiss="modal">Close</a>
                            </div>
                            <div class="col-sm-2 col-xs-2"></div>
                        </div>
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
                    <h4 class="modal-title">Add Man/Equipment</h4>
                </div>
                <div class="modal-body">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" align="center">
                            <div class="item active">
                                <img src="dist/images/contacts/1.jpg" width="50%" alt="1">
                            </div>

                            <div class="item">
                                <img src="dist/images/contacts/2.jpg" width="50%" alt="2">
                            </div>

                            <div class="item">
                                <img src="dist/images/contacts/3.jpg" width="50%" alt="3">
                            </div>
                        </div>

                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="row">
                        <div class="col-sm-2 col-xs-2"></div>
                        <div class="col-sm-4 col-xs-4">
                            <a type="button" class="btn btn-success btn-block" data-dismiss="modal">Add</a>
                        </div>
                        <div class="col-sm-4 col-xs-4">
                            <a type="button" class="btn btn-danger btn-block" data-dismiss="modal">Close</a>
                        </div>
                        <div class="col-sm-2 col-xs-2"></div>
                    </div>
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
