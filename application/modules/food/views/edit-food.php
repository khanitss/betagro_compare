<!-- Content Section START -->
<?php
$food_time = 0;
foreach ($food_details as $key => $value)
{
    $food_time += $value['food_time'];
}?>

<?php $attr = array('class' => 'form-horizontal');
echo form_open_multipart('food/update_food_details/'.$this->uri->segment(3), $attr);?>

<div class="block-header clearfix">
    <h2 class="pull-left">แก้ไขรายละเอียด</h2>
    <ul class="breadcrumb pull-right">
        <li><a href="<?php echo site_url('dashboard/home');?>">หน้าหลัก</a></li>
        <li><a href="<?php echo site_url('food/food_page');?>">รายการอาหาร</a></li>
        <li><a href="<?php echo site_url('food/food_details/'.$this->uri->segment(3));?>">รายละเอียด</a></li>
        <li><a href="<?php echo site_url('food/edit_food/'.$this->uri->segment(3));?>">แก้ไขรายละเอียด</a></li>
    </ul>
</div>

<!-- col standard-->
<div class="row">
    <div class="col-sm-10 col-xs-8"></div>
    <div class="col-sm-2 col-xs-4 text-center">
        <a href="<?php echo site_url('food/food_details/'.$this->uri->segment(3));?>">
            <button class="btn btn-warning btn-block">กลับ</button>
        </a>
    </div>
</div>

<div class="row">
    <br/>
    <div class="col-sm-5">
        <div class="card ">

            <?php foreach ($food_details as $key => $value)
            {
                ?>

                <div class="card-header">
                    <h2><?php echo $value['food_name'];?></h2>
                </div>

                <div class="card-body card-padding text-center">
                    <div class="fileinput fileinput-new card-body card-padding" data-provides="fileinput" align="center">
                        <span class="btn btn-default btn-file m-r-10">
                            <span class="fileinput-new"><img src="<?php echo base_url('images_compare/'.$value['food_pic']);?>" width="75%"></span>
                            <span class="fileinput-exists">Change</span>
                            <input type="file" name="upload_file">
                        </span>
                        <span class="fileinput-filename"></span>
                        <a href="#" class="close fileinput-exists" data-dismiss="fileinput">&times;</a>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 col-xs-3 text-right control-label">ชื่อ :</label>
                        <div class="col-sm-8 col-xs-8">
                            <input class="form-control" id="focusedInput" type="text" name="food_name" placeholder="<?php echo $value['food_name'];?>">
                        </div>
                        <div class="col-sm-1 col-xs-1"></div>

                        <label class="col-sm-3 col-xs-3 text-right control-label">จำนวน :</label>
                        <div class="col-sm-8 col-xs-8">
                            <input class="form-control" id="focusedInput" type="text" name="food_for" placeholder="<?php echo $value['food_for'];?>">
                        </div>
                        <div class="col-sm-1 col-xs-1"></div>

                        <label class="col-sm-3 col-xs-3 text-right control-label">หน่วย :</label>
                        <div class="col-sm-8 col-xs-8">
                            <input class="form-control" id="focusedInput" type="text" name="food_unit" placeholder="<?php echo $value['food_unit'];?>">
                        </div>
                        <div class="col-sm-1 col-xs-1"></div>

                        <label class="col-sm-3 col-xs-3 text-right control-label">เวลา :</label>
                        <div class="col-sm-8 col-xs-8">
                            <input class="form-control" id="focusedInput" type="text" name="food_time" placeholder="<?php echo $value['food_time'];?> นาที">
                        </div>
                        <div class="col-sm-1 col-xs-1"></div>

                        <div class="col-sm-4 col-xs-4"></div>

                        <div class="col-sm-4 col-xs-4">
                            <br/>
                            <a class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#saveModal">บันทึก</a>
                        </div>
                        <div class="col-sm-4 col-xs-4"></div>

                    </div>


                </div>

                <?php
            }
            ?>

        </div>

    </div>
    <div class="col-sm-7">
        <div class="card">
            <div class="card-body card-padding">
                <table class="table">
                    <thead>
                        <tr>
                            <th class="text-center">วัตถุดิบ</th>
                            <th class="text-center">จำนวน</th>
                            <th class="text-center">หน่วย</th>
                            <th class="text-center">ราคา (บาท)</th>
                            <th class="text-center">
                                <a href="#">
                                    <img class="center-block" src="<?php echo base_url('dist/images/icons/addButton.png');?>" data-toggle="modal" data-target="#myAddRawModal" alt="addRaw" style="max-width:25px">
                                </a>
                            </th>
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
                                <td class="text-center"><?php echo $value['mat_cost'];?></td>
                                <td class="text-center">
                                    <a href="<?php echo site_url('food/delete_mat_detail/'.$this->uri->segment(3).'/'.$value['mat_id']);?>">
                                        <img class="center-block" src="<?php echo base_url('dist/images/icons/delButton.png');?>" style="max-width:25px">
                                    </a>
                                </td>
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
                            <th class="text-center">ราคา (บาท)</th>
                            <th class="text-center">
                                <a href="#">
                                    <img class="center-block" src="<?php echo base_url('dist/images/icons/addButton.png');?>" data-toggle="modal" data-target="#myAddEquipModal" alt="addEquip" style="max-width:25px">
                                </a>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($eq_details as $key => $value)
                        {
                            ?>
                            <tr>
                                <td class="text-center"><?php echo $value['eq_name'];?></td>
                                <td class="text-center">1</td>
                                <td class="text-center"><?php echo number_format($value['eq_cost']*($food_time/60),2);?></td>
                                <td class="text-center">
                                    <a href="<?php echo site_url('food/delete_eq_detail/'.$this->uri->segment(3).'/'.$value['eq_id']);?>">
                                        <img class="center-block" src="<?php echo base_url('dist/images/icons/delButton.png');?>" style="max-width:25px">
                                    </a>
                                </td>
                            </tr>
                            <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div id="saveModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">ยืนยันการลบข้อมูล?</h4>
            </div>

            <div class="modal-body">
                <div class="col-sm-4"></div>
                <div class="col-sm-4">
                    <button type="submit" class="btn btn-success btn-lg btn-block">ยืนยัน</button>
                </div>
                <div class="col-sm-4">
                    <a type="button" data-dismiss="modal" class="btn btn-danger btn-lg btn-block">ยกเลิก</a>
                </div>
            </div>

            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>
<div id="myAddRawModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">เพิ่มวัตถุดิบ</h4>
            </div>

            <div class="modal-body">
                <div class="form-gruop">
                    <?php
                    foreach ($mat_list as $key => $value) {
                        ?>
                        <div class="col-md-3 col-xs-6">
                            <a href="<?php echo site_url('food/set_mat_detail/'.$this->uri->segment(3).'/'.$value['mat_id']);?>">
                                <img src="<?php echo base_url('images_compare/'.$value['mat_pic']);?>" style="width: auto; height: 100px;" class="img-thumbnail">
                            </a>
                            <p class="caption"><?php echo $value['mat_name'];?> <?php echo $value['mat_quantity'];?> <?php echo $value['mat_unit'];?></p>
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

                    <div class="col-md-3 col-xs-6">
                        <a href="<?php echo site_url('food/set_eq_detail/'.$this->uri->segment(3).'/'.$value['eq_id']);?>">
                            <img src="<?php echo base_url('images_compare/'.$value['eq_pic']);?>" style="max-height:100px" class="img-thumbnail">
                        </a>
                        <p class="caption"><?php echo $value['eq_name'];?></p>
                    </div>

                    <?php
                }
                ?>
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>

<?php echo form_close();?>
