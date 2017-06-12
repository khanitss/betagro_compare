
          <div class="block-header clearfix">
            <h2 class="pull-left">Add Raw Material </h2>
            <ul class="breadcrumb pull-right">
              <li><a href="<?php echo site_url ('dashboard/home');?>">Home</a></li>
              <li><a href="<?php echo site_url('material/material_page');?>">Add Raw Material Group</a></li>
              <li><a href="<?php echo site_url('material/material_d_page');?>">Add Raw Material </a></li>
            </ul>
          </div>
          
          <div class="row">
            <div class="col-sm-10 col-xs-8"></div>
            <div class="col-sm-2 col-xs-4 text-center">
            <button class="btn btn-success" data-toggle="modal" data-target="#myAddRawModal" alt="addRaw">Add Raw Material</button>
       
            </div>
          </div>

      <div class="row">

        <div class="col-sm-4">
          <div class="thumbnail img-check">
            <label class=" btn btn-light">
              <label for="cb3"><a href="<?php echo site_url ('material/edit_page');?>"><img src="http://my.haijai.com/article/food/20140919_health-food_1.jpg" alt="Nature" style="width:90%"></a>
                <div class="caption">
                  <h3>เนื้อหมู</h3>
                </div></label>
              </li>
            </lable>
          </div>
        </div>
        
            <!-- Modal -->
            <div id="myAddRawModal" class="modal fade" role="dialog">
              <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Add Raw Material </h4>
                  </div>

                  <!-- add image-->
                  
                  <div class="fileinput fileinput-new card-body card-padding text-center"  data-provides="fileinput">
                    <span class="btn btn-default btn-file m-r-10 text-center">
                      <span class="fileinput-new text-center"><img src="<?php echo base_url ('dist/images/icons/addButton.png');?> " width="30%" alt=""></span >
                      <span class="fileinput-exists">Change</span>
                      <input type="file" name="...">
                    </span>
                    <span class="fileinput-filename"></span>
                    <a href="#" class="close fileinput-exists" data-dismiss="fileinput">&times;</a>
                    <center><h4>Add Picture</h4></center>

                      <!-- add name-->
                      <div class="card-body card-padding">
                        <form class="form-horizontal">
                          <div class="row">

                            <div class="form-group">
                              <div class="row">
                              <label class="col-sm-3 col-xs-3 control-label">Material Name :</label>
                                <div class="col-sm-9 col-xs-9">
                                  <input class="form-control" id="focusedInput" type="text" placeholder="Material Name">
                                </div>
                              </div>
                            </div>

                            <div class="form-group">
                              <div class="row">
                                <label class="col-sm-3 col-xs-3 control-label">Quanlity :</label>
                                <div class="col-sm-9 col-xs-9">
                                  <input class="form-control" id="focusedInput" type="text" placeholder="Quanlity">
                                </div>
                              </div>
                            </div>

                            <div class="form-group">
                              <div class="row">
                                <label class="col-sm-3 col-xs-3 control-label">Unit :</label>
                                <div class="col-sm-9 col-xs-9">
                                  <input class="form-control" id="focusedInput" type="text" placeholder="Unit">
                                </div>
                              </div>
                            </div>

                            <div class="form-group">
                              <div class="row">
                                <label class="col-sm-3 col-xs-3 control-label">Cost :</label>
                                <div class="col-sm-9 col-xs-9">
                                  <input class="form-control" id="focusedInput" type="text" placeholder="Bath">
                                </div>
                              </div>
                            </div>

                          </div>
                        </form>
                      
                      <div class="row">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-3">
                          <button type="button" class="btn btn-success btn-block" data-dismiss="modal">Add</button>
                        </div>
                        <div class="col-sm-2"></div>
                        <div class="col-sm-3">
                          <button type="button" class="btn btn-danger btn-block" data-dismiss="modal">Close</button>
                        </div>
                        <div class="col-sm-2"></div>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
            </div>
         
        </div>
      </div>
