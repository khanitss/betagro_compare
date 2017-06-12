
      <div class="block-header clearfix">
              <h2 class="pull-left">Add Raw Material Group</h2>
              <ul class="breadcrumb pull-right">
                <li><a href="../../index.html">Home</a></li>
                <li><a href="">Setting</a></li>
                <li><a href="">Add Raw Material Group</a></li>
              </ul>
      </div>
          </br>
          </br>
      
      <div class="row">
        
        <div class="col-sm-3">
          <div class="thumbnail img-check">
            <label class=" btn btn-light">
                <label for="cb3"><a href="add-raw-material-page.html"><img src="https://pbs.twimg.com/profile_images/486478679283752960/WMhOYwAs.jpeg" alt="Nature" style="width:50%;height: 50%"></a>
                 </label> 
            </lable>    
                <div class="caption">
                    <p>น้องหมู</p>
                </div>
          </div>
        </div>

        <div class="col-sm-3">
          <div class="thumbnail img-check">
            <label class=" btn btn-light">
                <label for="cb3"><a href=""><img src="http://ca.lnwfile.com/_/ca/_raw/vh/tp/ak.jpg" alt="Nature" style="width:50%;height: 50%"></a> 
                </label>
            </lable>
                <div class="caption">
                    <p>น้องวัว</p>
                </div>
          </div>
        </div>
        
        <div class="col-sm-3">
          <div class="card">
            <div class="card-header">
              <h2>Add Raw Material Group</h2>
            </div>
            <div align="center">
              <button data-target="#myAddRawModal">
                <img src="<?php echo base_url ('dist/images/icons/addButton.png');?>" width="50%" data-toggle="modal" alt="addRaw" style="width:30%">
              </button>
            </div>
          </div>
        </div> 

            <!-- Modal -->
        <div id="myAddRawModal" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Add Raw Material Group</h4>
                  </div>
                

                  <!-- add image-->
                <div class="fileinput fileinput-new card-body card-padding" data-provides="fileinput">
                    <span class="btn btn-default btn-file m-r-10">
                      <span class="fileinput-new"><img src="dist/images/icons/addButton.png" width="30%" alt=""></span>
                      <span class="fileinput-exists">Change</span>
                      <input type="file" name="...">
                    </span>
                    <span class="fileinput-filename"></span>
                      <a href="" class="close fileinput-exists" data-dismiss="fileinput">&times;</a>
                      <center><h4>Add Picture</h4></center>\
                </div>
                  
                  <!-- add name-->
                      <div class="col-sm-6"> </div>
                      <div class="card-body card-padding">
                        <form class="form-horizontal">
                          <div class="form-group">
                            <label class="col-sm-3 col-xs-3 control-label">Group Name :</label>
                            <div class="col-sm-9 col-xs-9">
                              <input class="form-control" id="focusedInput" type="text" placeholder="Group Name">
                            </div>
                          </div>
                        </form>
                      </div>

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
        
      <div class="col-sm-2"></div>
    </div>
  </section>
  <!-- Content Section END -->
</section>

