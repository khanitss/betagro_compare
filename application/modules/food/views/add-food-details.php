<!-- Content Section START -->
<div class="block-header clearfix">
    <h2 class="pull-left">เพิ่มรายการอาหาร</h2>
    <ul class="breadcrumb pull-right">
        <li><a href="<?php echo site_url('dashboard/home');?>">หน้าหลัก</a></li>
        <li><a href="<?php echo site_url('food/food_page');?>">รายการอาหาร</a></li>
        <li><a href="<?php echo site_url('food/add_food');?>">เพิ่มรายการอาหาร</a></li>
    </ul>
</div>

<div class="form-group">
    <div class="col-sm-10 col-xs-6"></div>
    <div class="col-sm-2 col-xs-6 text-center">
        <a type="button" href="<?php echo site_url('food/food_page');?>" class="btn btn-success btn-block">เสร็จสิ้น</a>
    </div>
    <br/>
</div>

<div class="row">
    <div class="card col-sm-12">

        <?php foreach ($food_details as $key => $value)
        {
            ?>
            <div class="col-sm-6">
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
                                    <img src="<?php echo base_url('dist/images/icons/addButton.png');?>" data-toggle="modal" data-target="#myAddRawModal2" alt="addRaw" style="width:50%">
                                </a>
                            </div>
                            <br/>
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
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body card-padding col-sm-6">
                <div class="card">
                    <div class="card-body card-padding">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="text-center"><strong>วัตถุดิบ</strong></th>
                                    <th class="text-center"><strong>จำนวน</strong></th>
                                    <th class="text-center"><strong>หน่วย</strong></th>
                                    <th class="text-center"><strong>ราคา(บาท)</strong></th>
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
                                    <th class="text-center"><strong>คน / อุปกรณ์</strong></th>
                                    <th class="text-center"><strong>จำนวน</strong></th>
                                    <th class="text-center"><strong>ราคา/ชม.(บาท)</strong></th>
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
<!-- Modal -->
<?php $this->load->view('food/myAddRawModal2');?>
<?php $this->load->view('food/myAddEquipModal2');?>
