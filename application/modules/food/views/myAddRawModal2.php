<style>
.nav-tabs {
    border-bottom: 2px solid #009688;
}

.nav-tabs>li>a {
    color: #009688;
    font-size: 12px;
    border: 1px solid transparent;
}

.nav-tabs>li>a:hover {
    border-color: #00e6cf #00e6cf #00e6cf;
}

.nav-tabs>li.active>a, .nav-tabs>li.active>a:hover, .nav-tabs>li.active>a:focus {
    font-size: 12px;
    color: #ffffff;
    background-color: #009688;
    border: 1px solid #009688;
    border-bottom-color: transparent;
    cursor: default;
}
</style>

<?php $i = 1; ?>
<div id="myAddRawModal2" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content text-center">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">เพิ่มวัตถุดิบ</h4>
            </div>

            <div class="modal-body">
                <ul class="nav nav-tabs" id="tabContent">
                    <?php foreach ($material_list as $key => $value) {
    ?>
                        <li><a href="#<?php echo $value['cat_name']; ?>" data-toggle="tab"><?php echo $value['cat_name']; ?></a></li>
                        <?php

}
                    ?>
                </ul>

                <div class="tab-content">
                    <?php foreach ($material_list as $key => $value) {
                        ?>
                        <div class="tab-pane active" id="<?php echo $value['cat_name']; ?>">
                            <?php
                            foreach ($mat_list as $key => $value) {
                                if ($value['cat_id'] == $i) {
                                    ?>

                                    <div class="col-md-3 col-xs-6">
                                        <a href="<?php echo site_url('food/set_mat_detail2/'.$this->uri->segment(3).'/'.$value['mat_id']); ?>">
                                            <img src="<?php echo base_url('images_compare/'.$value['mat_pic']); ?>" style="height:100px" class="img-thumbnail">
                                        </a>
                                        <h6><?php echo $value['mat_name']; ?>
                                            <br/>
                                            <?php echo $value['mat_quantity']?> <?php echo $value['mat_unit']?>
                                        </h6>
                                    </div>

                                    <?php

                                }
                            }
                        $i++; ?>
                        </div>
                        <?php

                    }
                    ?>
                </div>
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>
