    <div class="block-header clearfix">
      <h2 class="pull-left">Product Detail</h2>
        <ul class="breadcrumb pull-right">
            <li><a href="index.html">Home</a></li>
            <li><a href="<?php echo site_url ('product/product_page');?>">Product</a></li>          
            <li><a href="#">Edit Product</a></li>
        </ul>
    </div>
    <div class="col-sm-6">
        <div class="card ">
            <div class="card-body card-padding"> 
                <h2>ปีกไก่บน</h2>
                <img class="center-block" src="http://www.th.all.biz/img/th/catalog/13699.jpeg" class="img-thumbnail" alt="Cinque Terre" style="width:45%" >
                    <div class="card-body card-padding">
                        <form class="form-horizontal">
                            <div class="form-group">
                                <label class="col-sm-2 col-xs-2 control-label">Name :</label>
                                <div class="col-sm-10 col-xs-10">
                                    <input class="form-control" id="focusedInput" type="text" placeholder="Product Name">
                                </div>
                                <label class="col-sm-2 col-xs-2 control-label">Quanlity :</label>
                                <div class="col-sm-10 col-xs-10">
                                    <input class="form-control" id="focusedInput" type="text" placeholder="Quanlity">
                                </div>
                                <label class="col-sm-2 col-xs-2 control-label">Unit :</label>
                                <div class="col-sm-10 col-xs-10">
                                    <input class="form-control" id="focusedInput" type="text" placeholder="Unit">
                                </div>
                                <label class="col-sm-2 col-xs-2 control-label">Cost :</label>
                                <div class="col-sm-10 col-xs-10">
                                    <input class="form-control" id="focusedInput" type="text" placeholder="Bath"></div></div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-2"></div>
                                    <div class="col-sm-3"></div>
                                    <a href="<?php echo site_url ('product/product_page');?>" type="save" class="btn btn-success ">SAVE
                                    </a>
                                    <div class="col-sm-4"></div>
                                    <div class="col-sm-3"></div>
                                    <a href="<?php echo site_url ('product/product_page');?>" type="save" class="btn btn-danger">BACK
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
            </div>
        </div>