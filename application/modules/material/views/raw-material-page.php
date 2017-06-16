
          <div class="block-header clearfix">
            <h2 class="pull-left">วัตถุดิบ</h2>
            <ul class="breadcrumb pull-right">
              <li><a href="<?php echo site_url ('dashboard/home');?>">หน้าหลัก</a></li>
              <li><a href="">ตั้งค่า</a></li>
              <li><a href="<?php echo site_url('material/material_page');?>">กลุ่มของวัตถุดิบ</a></li>
              <li><a href="<?php echo site_url('material/material_d_page');?>">วัตถุดิบ</a></li>
            </ul>
          </div>
          

          <div class="row">
            <div class="col-sm-10 col-xs-8"></div>
            <div class="col-sm-2 col-xs-4 text-center">

            <a href = "<?php echo site_url('material/raw_page');?>" class= "btn btn-success">เพิ่มวัตถุดิบ</a>
       
            </div>
          </div>
          </br>
          </br>
         <?php
          foreach ($material_detail as $key => $value) {
            // if ($value['cat_id']) {
              
            //   # code...
            // }

              if ($value['mat_type']==0){
                        ?>

      <div class="row">
        <div class="col-sm-3">
            <div class="thumbnail img-check">
                <a href="<?php echo site_url('material/edit_page/'.$value['mat_id']);?>" class="text-center">
                    <input id="item1" value="val1" class="hidden" autocomplete="off" name="mat_name" >
                    <img src="<?php echo base_url('images_compare/'.$value['mat_pic']);?>" alt="light" width="120" height="120" class="img-thumbnail">
                    <div class="caption">
                        <p>
                            <?php echo $value['mat_name'];?> <?php echo $value['mat_quantity'];?> <?php echo $value['mat_unit'];?> <?php echo $value['mat_cost'];?>  บาท
                        </p>
                         <a href="<?php echo site_url('material/delete_material/'.$value['mat_id']);?>" type="delete" class="btn btn-danger">ลบ</a>
                    </div>
                </a>
            </div>
        </div>
        <?php 
            }
          }
          ?> 
        </div>   
        </div>
      </div>
