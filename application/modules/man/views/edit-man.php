        <div class="block-header clearfix">
            <h2 class="pull-left">Edit Man/Equipment</h2>
            <ul class="breadcrumb pull-right">
                <li><a href="index.html">Home</a></li>
                <li><a href="<?php echo site_url ('man/man_page');?>">Man/Equipment</a></li>
                <li><a href="#">Edit Man/Equipment</a></li>
            </ul>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="card ">
                        <div class="card-body card-padding"> 
                            <h2>Edit Man/Equipment</h2></br>
                            <img class="center-block" src="http://elanyeri.com/images/AdverImages/27/12041301524825.jpg" class="img-thumbnail" alt="Cinque Terre" style="width:45%" >
                            <div class="card-body card-padding">
                                <form class="form-horizontal">
                                    <div class="form-group">
                                        <label class="col-sm-4 col-xs-4 control-label">Group Name:</label>
                                        <div class="col-sm-8 col-xs-8">
                                            <input class="form-control" id="focusedInput" type="text" placeholder="Group Name">
                                        </div>
                                        <label class="col-sm-4 col-xs-4 control-label">Cost/Hour:</label>
                                        <div class="col-sm-8 col-xs-8">
                                            <input class="form-control" id="focusedInput" type="text" placeholder="Bath">
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="row">
                                <div class="col-sm-2">
                                </div>
                                <div class="col-sm-3">
                                </div>
                                <a href="<?php echo site_url ('man/man_page');?>" type="save" class="btn btn-success ">SAVE</a>
                                <div class="col-sm-4">
                                </div>
                                <div class="col-sm-3"></div>
                                <a href="<?php echo site_url ('man/man_page');?>" type="save" class="btn btn-danger">BACK</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        