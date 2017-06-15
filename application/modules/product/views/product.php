    <div class="block-header clearfix">
        <h2 class="pull-left">ผลิตภัณฑ์เบทาโกร</h2>
        <ul class="breadcrumb pull-right">
            <li><a href="index.html">หน้าหลัก</a></li>
            <li><a href="#">ผลิตภัณฑ์เบทาโกร</a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-sm-10 col-xs-8"></div>
        <div class="col-sm-2 col-xs-4 text-center">
            <a href="<?php echo site_url('product/product_add');?>">
                <button class="btn btn-success">เพิ่ม ผลิตภัณฑ์เบทาโกร</button>
            </a>
        </div>
    </div>
    <div class="row">
        <form method="get">
            <div class="form-group">
            <?php
            foreach ($product_list as $key => $value){
            ?>
                <div class="col-md-3">
                    <div class="thumbnail img-check">
                        <center><a href= "<?php echo site_url ('product/product_edit/'.$value['mat_id']);?>"><label for="cb1"><img src="<?php echo base_url('images_compare/'.$value['mat_pic']);?>" alt="light" width="120" height="120"></label></a></center>
                        <div class="caption">
                            <center><p><?php echo $value['mat_name'];?> : <?php echo $value['mat_quantity'];?> <?php echo $value['mat_unit'];?> <?php echo $value['mat_cost'];?> บาท </p></center>
                            <div class="col-sm-9">
                                </div>
                                <a href="<?php echo site_url('product/delete_product/'.$value['mat_id']);?>" type="delete" class="btn btn-danger">ลบ</a>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
            </div>
        </form>
    </div>