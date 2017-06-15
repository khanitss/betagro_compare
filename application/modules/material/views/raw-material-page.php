
          <div class="block-header clearfix">
            <h2 class="pull-left">Raw Material </h2>
            <ul class="breadcrumb pull-right">
              <li><a href="<?php echo site_url ('dashboard/home');?>">Home</a></li>
              <li><a href="">Setting</a></li>
              <li><a href="<?php echo site_url('material/material_page');?>">Raw Material Group</a></li>
              <li><a href="<?php echo site_url('material/material_d_page');?>">Raw Material </a></li>
            </ul>
          </div>
          

          <div class="row">
            <div class="col-sm-10 col-xs-8"></div>
            <div class="col-sm-2 col-xs-4 text-center">

            <a href = "<?php echo site_url('material/raw_page');?>" class= "btn btn-success">Add Raw Material</a>
       
            </div>
          </div>
          </br>
          </br>
      <div class="row">
        <?php
          foreach ($raw_material_list as $key => $value) {
        ?>
        <div class="col-sm-3">
          <div class="thumbnail img-check">
                <a href="<?php echo site_url('material/edit_page/'.$value['mat_id']);?>" class="text-center">
                    <input id="item1" value="val1" class="hidden" autocomplete="off" name="mat_name" >
                    <img src="<?php echo base_url('dist/images/material/sunnok.jpg');?>" alt="light" style="width:96%" class="img-thumbnail">
                    <div class="caption">
                        <p>
                            <?php echo $value['mat_name'];?> <?php echo $value['mat_quantity'];?> <?php echo $value['mat_unit'];?> <?php echo $value['mat_cost'];?>  Baht
                        </p>

                    </div>
                </a>
            </div>
        </div>
        <?php 
            }
          ?> 
        </div>   
        </div>
      </div>