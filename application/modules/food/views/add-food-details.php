<!-- Content Section START -->
<?php
if ($alert == '1') {
    ?>
    <div class="alert alert-success">
        <strong>บันทึกข้อมูลสำเร็จ</strong>
        <button type="button" class="close" data-dismiss="alert">&times;</button>
    </div>
    <?php
}?>

<div class="block-header clearfix">
    <h2 class="pull-left">เพิ่มรายการอาหาร</h2>
    <ul class="breadcrumb pull-right">
        <li><a href="<?php echo site_url('dashboard/home');?>">หน้าหลัก</a></li>
        <li><a href="<?php echo site_url('food/food_page');?>">รายการอาหาร</a></li>
        <li><a href="<?php echo site_url('food/add_food');?>">เพิ่มรายการอาหาร</a></li>
    </ul>
</div>
<br/>

<div class="row">
    <div class="col-sm-10 col-xs-10"></div>
    <div class="col-sm-2 col-xs-2">
        <a type="button" href="<?php echo site_url('food/food_page');?>" class="btn btn-success btn-block">เสร็จสิ้น</a>
    </div>
</div>
<br/>

<div class="row">
    <div class="card col-sm-12">

        <?php foreach ($food_details as $key => $value)
        {
            ?>
            <div class="col-sm-7">
                <div class="row">
                    <div class="card-body card-padding col-sm-6">
                        <img class="text-center" src="<?php echo base_url('images_compare/'.$value['food_pic']);?>" class="img-thumbnail" style="width:100%">
                    </div>
                    <div class="card-body card-padding col-sm-6">
                        <div class="form-group card-body card-padding">
                            <p>ชื่อ : <?php echo $value['food_name'];?></p>
                            <p>จำนวน : <?php echo $value['food_for'];?></p>
                            <p>หน่วย : <?php echo $value['food_unit'];?></p>
                            <p>เวลา : <?php echo $value['food_time'];?> นาที</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-header">
                                <h2>วัตถุดิบ</h2>
                            </div>
                            <div class="card-body card-padding text-center">
                                <a href="#">
                                    <img src="<?php echo base_url('dist/images/icons/addButton.png');?>" data-toggle="modal" data-target="#myAddRawModal" alt="addRaw" style="width:50%">
                                </a>
                            </div>
                            <br/>

                            <!-- Modal -->
                            <div id="myAddRawModal" class="modal fade" role="dialog">
                                <div class="modal-dialog">

                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">เพิ่มวัตถุดิบ</h4>
                                        </div>

                                        <div class="modal-body">
                                            <div class="form_group">
                                                <?php
                                                foreach ($mat_list as $key => $value) {
                                                    ?>
                                                    <div class="col-md-4 text-center">
                                                        <a href="<?php echo site_url('food/set_mat_detail2/'.$this->uri->segment(3).'/'.$value['mat_id']);?>">
                                                            <img src="<?php echo base_url('dist/images/material/sunnok.jpg');?>" alt="light" style="max-height:100px" class="img-thumbnail">
                                                        </a>
                                                        <input id="item1" value="val1" class="hidden" autocomplete="off">
                                                        <div class="caption">
                                                            <p><?php echo $value['mat_name'];?> <?php echo $value['mat_quantity'];?> <?php echo $value['mat_unit'];?></p>
                                                        </div>
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
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-header">
                                <h2>คน / อุปกรณ์</h2>
                            </div>
                            <div class="card-body card-padding text-center">
                                <a href="#">
                                    <img src="<?php echo base_url('dist/images/icons/addButton.png');?>" data-toggle="modal" data-target="#myAddEquipModal" alt="addEquip" style="width:50%">
                                </a>
                            </div>
                            <br/>

                            <!-- Modal -->
                            <div id="myAddEquipModal" class="modal fade" role="dialog">
                                <div class="modal-dialog">

                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">เพิ่มคน / อุปกรณ์</h4>
                                        </div>
                                        <div class="modal-body">
                                            <?php
                                            foreach ($man_list as $key => $value) {
                                                ?>

                                                <div class="col-md-4 text-center">
                                                    <a href="<?php echo site_url('food/set_eq_detail2/'.$this->uri->segment(3).'/'.$value['eq_id']);?>">
                                                        <img src="<?php echo base_url('dist/images/menu/12041301524825.jpg');?>" alt="light" style="max-height:100px" class="img-thumbnail">
                                                    </a>
                                                    <input id="item1" value="val1" class="hidden" autocomplete="off">
                                                    <div class="caption">
                                                        <p><?php echo $value['eq_name'];?> : <?php echo $value['eq_cost'];?> บาท</p>
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
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body card-padding col-sm-5">
                <div class="card">
                    <div class="card-body card-padding">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="text-center">วัตถุดิบ</th>
                                    <th class="text-center">จำนวน</th>
                                    <th class="text-center">หน่วย</th>
                                    <th class="text-center">ราคา</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($mat_details as $key => $value)
                                {
                                    ?>
                                    <tr>
                                        <td class="text-center"><?php echo $value['mat_name'];?></td>
                                        <td class="text-center"><?php echo $value['mat_quantity'];?></td>
                                        <td class="text-center"><?php echo $value['mat_unit'];?></td>
                                        <td class="text-center"><?php echo $value['mat_cost'];?>&nbsp; บาท</td>
                                    </tr>
                                    <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>

                    <div class="card-body card-padding">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="text-center">คน / อุปกรณ์</th>
                                    <th class="text-center">จำนวน</th>
                                    <th class="text-center">ราคา/ชม.</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($eq_details as $key => $value)
                                {
                                    ?>
                                    <tr>
                                        <td class="text-center"><?php echo $value['eq_name'];?></td>
                                        <td class="text-center">1</td>
                                        <td class="text-center"><?php echo $value['eq_cost'];?>&nbsp; บาท</td>
                                    </tr>
                                    <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>


                </div>
            </div>
            <?php
        }
        ?>
    </div>
</div>
