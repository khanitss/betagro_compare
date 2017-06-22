<div id="myAddEquipModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content text-center">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">เพิ่มคน / อุปกรณ์</h4>
            </div>
            <div class="modal-body">
                <?php
                foreach ($man_list as $key => $value) {
                    ?>

                    <div class="col-md-3 col-xs-6">
                        <a href="<?php echo site_url('food/set_eq_detail2/'.$this->uri->segment(3).'/'.$value['eq_id']);?>">
                            <img src="<?php echo base_url('images_compare/'.$value['eq_pic']);?>" style="width: auto; height: 100px;" class="img-thumbnail">
                        </a>
                        <div class="caption">
                            <p><?php echo $value['eq_name'];?></p>
                        </div>
                    </div>

                    <?php
                }
                ?>
            </div>
            <div class="modal-footer"></div>
        </div>
    </div>
</div>
