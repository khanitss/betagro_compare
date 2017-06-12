        <div class="block-header clearfix">
            <h2 class="pull-left">Edit Material</h2>
            <ul class="breadcrumb pull-right">
                <li><a href="index.html">Home</a></li>
                <li><a href="">Setting</a></li>
                <li><a href="<?php echo site_url ('material/material_page');?>"> Raw Material Group</a></li>
                <li><a href="<?php echo site_url ('material/material_d_page');?>"> Raw Material</a></li>
                <li><a href="#">Edit Material</a></li>
            </ul>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-6">
                    <div class="card ">
                        <div class="card-body card-padding "> 
                            <img class="center-block" src="<?php echo base_url('dist/images/material/sunnok.jpg');?>" class="img-thumbnail" alt="Cinque Terre" style="width:45%" >
                            <div class="card-body card-padding">
                                <form class="form-horizontal">
                                    <div class="form-group">
                                        <label class="col-sm-4 col-xs-4 control-label">Material Name:</label>
                                        <div class="col-sm-8 col-xs-8">
                                            <input class="form-control" id="focusedInput" type="text" placeholder="Material Name">
                                        </div>
                                        <label class="col-sm-4 col-xs-4 control-label">Quantity:</label>
                                        <div class="col-sm-8 col-xs-8">
                                            <input class="form-control" id="focusedInput" type="text" placeholder="Quantity">
                                        </div>
                                        <label class="col-sm-4 col-xs-4 control-label">Unit:</label>
                                        <div class="col-sm-8 col-xs-8">
                                            <input class="form-control" id="focusedInput" type="text" placeholder="Unit">
                                        </div>
                                        <label class="col-sm-4 col-xs-4 control-label">Cost:</label>
                                        <div class="col-sm-8 col-xs-8">
                                            <input class="form-control" id="focusedInput" type="text" placeholder="Baht">
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="row">
                                <div class="col-sm-2">
                                </div>
                                <div class="col-sm-3">
                                </div>
                                <a href="<?php echo site_url ('material/material_d_page');?>" type="save" class="btn btn-success ">SAVE</a>
                                <div class="col-sm-4">
                                </div>
                                <div class="col-sm-3"></div>
                                <a href="<?php echo site_url ('material/material_d_page');?>" type="save" class="btn btn-danger">BACK</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3"></div>
                </div>
            </div>
        