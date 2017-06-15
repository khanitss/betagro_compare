<!-- Content Section START -->
<div class="block-header clearfix">
    <h2 class="pull-left">Edit Details</h2>
    <ul class="breadcrumb pull-right">
        <li><a href="<?php echo site_url('dashboard/home');?>">Home</a></li>
        <li><a href="<?php echo site_url('food/food_page');?>">Food Menu</a></li>
        <li><a href="<?php echo site_url('food/food_details/'.$this->uri->segment(3));?>">Food Details</a></li>
        <li><a href="<?php echo site_url('food/edit_food/'.$this->uri->segment(3));?>">Edit Details</a></li>
    </ul>
</div>

<!-- col standard-->
<div class="row">
    <div class="col-sm-10 col-xs-8"></div>
    <div class="col-sm-2 col-xs-4 text-center">
        <a href="<?php echo site_url('food/food_details/'.$this->uri->segment(3));?>">
            <button class="btn btn-danger">Back</button>
        </a>

    </div>
</div>

<div class="row">
</br>
<div class="col-sm-4">
    <div class="card ">

        <?php foreach ($food_details as $key => $value)
        {
            ?>

            <div class="card-header">
                <h2><?php echo $value['food_name'];?></h2>
            </div>
            <div class="card-body card-padding">
                <img class="center-block" src="<?php echo base_url('dist/images/menu/s_ขาหมู.jpg');?>" class="img-thumbnail" style="width:75%">
            </br>

            <?php $attr = array('class' => 'form-horizontal');
            echo form_open('food/update_food_details/'.$this->uri->segment(3), $attr);?>

            <form class="form-horizontal">
                <div class="form-group">
                    <label class="col-sm-3 col-xs-3 text-right control-label">For :</label>
                    <div class="col-sm-8 col-xs-8">
                        <input class="form-control" id="focusedInput" type="text" name="food_for" placeholder="<?php echo $value['food_for'];?>">
                    </div>
                    <div class="col-sm-1 col-xs-1"></div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 col-xs-3 text-right control-label">Unit :</label>
                    <div class="col-sm-8 col-xs-9">
                        <input class="form-control" id="focusedInput" type="text" name="food_unit" placeholder="<?php echo $value['food_unit'];?>">
                    </div>
                    <div class="col-sm-1 col-xs-1"></div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 col-xs-3 text-right control-label">Time :</label>
                    <div class="col-sm-8 col-xs-9">
                        <input class="form-control" id="focusedInput" type="text" name="food_time" placeholder="<?php echo $value['food_time'];?> Minutes">
                    </div>
                    <div class="col-sm-1 col-xs-1"></div>
                </div>
                <div class="form-group">
                    <div class="col-sm-8 col-xs-8"></div>
                    <a class="col-sm-4 col-xs-4 text-center" href="<?php echo site_url('food/update_food_details');?>">
                        <button class="btn btn-success btn-block">Save</button>
                    </a>
                </div>
            </form>

            <?php echo form_close();?>

        </div>

        <?php
    }
    ?>

</div>
</div>
<div class="col-sm-8">
    <div class="card">
        <div class="card-body card-padding">
            <table class="table">
                <thead>
                    <tr>
                        <th>Raw Material</th>
                        <th>Quantity</th>
                        <th>Unit</th>
                        <th>Cost</th>
                        <th>
                            <a href="#">
                                <img class="center-block" src="<?php echo base_url('dist/images/icons/addButton.png');?>" data-toggle="modal" data-target="#myAddRawModal" alt="addRaw" style="max-width:25px">
                            </a>
                            <!-- Modal -->
                            <div id="myAddRawModal" class="modal fade" role="dialog">
                                <div class="modal-dialog">

                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Add Raw Material</h4>
                                        </div>
                                        <div class="modal-body">
                                            <div class="col-md-4 text-center">
                                                <a href="#">
                                                    <img src="<?php echo base_url('dist/images/material/sunnok.jpg');?>" alt="light" style="max-height:100px" class="img-thumbnail">
                                                </a>
                                                <input id="item1" value="val1" class="hidden" autocomplete="off">
                                                <div class="caption">
                                                    <p>สันนอก</p>
                                                </div>
                                            </div>
                                            <div class="col-md-4 text-center">
                                                <a href="#">
                                                    <img src="<?php echo base_url('dist/images/material/sunnai.jpg');?>" alt="light" style="max-height:100px" class="img-thumbnail">
                                                </a>
                                                <input id="item2" value="val1" class="hidden" autocomplete="off">
                                                <div class="caption">
                                                    <p>สันใน</p>
                                                </div>
                                            </div>
                                            <div class="col-md-4 text-center">
                                                <a href="#">
                                                    <img src="<?php echo base_url('dist/images/material/porkmin.jpg');?>" alt="light" style="max-height:100px" class="img-thumbnail">
                                                </a>
                                                <input id="item3" value="val1" class="hidden" autocomplete="off">
                                                <div class="caption">
                                                    <p>หมูบด</p>
                                                </div>
                                            </div>
                                            <div class="col-md-4 text-center">
                                                <a href="#">
                                                    <img src="<?php echo base_url('dist/images/material/khapig.png');?>" alt="light" style="max-height:100px" class="img-thumbnail">
                                                </a>
                                                <input id="item4" value="val1" class="hidden" autocomplete="off">
                                                <div class="caption">
                                                    <p>ขาหมู</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>ขาหมู</td>
                        <td>1</td>
                        <td>ขา</td>
                        <td>300</td>
                        <td>
                            <a href="#">
                                <img class="center-block" src="<?php echo base_url('dist/images/icons/delButton.png');?>" style="max-width:25px">
                            </a>
                        </td>

                    </tr>
                    <tr>
                        <td>คะน้า</td>
                        <td>0.5</td>
                        <td>กก.</td>
                        <td>10</td>
                        <td>
                            <a href="#">
                                <img class="center-block" src="<?php echo base_url('dist/images/icons/delButton.png');?>" style="max-width:25px">
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>ลูกกระวาน</td>
                        <td>1</td>
                        <td>กรัม</td>
                        <td>1.5</td>
                        <td>
                            <a href="#">
                                <img class="center-block" src="<?php echo base_url('dist/images/icons/delButton.png');?>" style="max-width:25px">
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>ไข่</td>
                        <td>1</td>
                        <td>ฟอง</td>
                        <td>4</td>
                        <td>
                            <a href="#">
                                <img class="center-block" src="<?php echo base_url('dist/images/icons/delButton.png');?>" style="max-width:25px">
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>อบเชย</td>
                        <td>2.5</td>
                        <td>กรัม</td>
                        <td>2.5</td>
                        <td>
                            <a href="#">
                                <img class="center-block" src="<?php echo base_url('dist/images/icons/delButton.png');?>" style="max-width:25px">
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>โปั๊ยกั๊ก</td>
                        <td>2.5</td>
                        <td>กรัม</td>
                        <td>2.5</td>
                        <td>
                            <a href="#">
                                <img class="center-block" src="<?php echo base_url('dist/images/icons/delButton.png');?>" style="max-width:25px">
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="card-body card-padding">
            <table class="table">
                <thead>
                    <tr>
                        <th>Man / Equipment</th>
                        <th>Quantity</th>
                        <th>Unit</th>
                        <th>Cost</th>
                        <th>
                            <a href="#">
                                <img class="center-block" src="<?php echo base_url('dist/images/icons/addButton.png');?>" data-toggle="modal" data-target="#myAddEquipModal" alt="addEquip" style="max-width:25px">
                            </a>
                            <!-- Modal -->
                            <div id="myAddEquipModal" class="modal fade" role="dialog">
                                <div class="modal-dialog">

                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Add Raw Material</h4>
                                        </div>
                                        <div class="modal-body">
                                            <div class="col-md-4 text-center">
                                                <a href="#">
                                                    <img src="<?php echo base_url('dist/images/menu/12041301524825.jpg');?>" alt="light" style="max-height:100px" class="img-thumbnail">
                                                </a>
                                                <input id="item1" value="val1" class="hidden" autocomplete="off">
                                                <div class="caption">
                                                    <p>Helper : 250 / hour</p>
                                                </div>
                                            </div>
                                            <div class="col-md-4 text-center">
                                                <a href="#">
                                                    <img src="<?php echo base_url('dist/images/menu/images.jpg');?>" alt="light" style="max-height:100px" class="img-thumbnail">
                                                </a>
                                                <input id="item2" value="val1" class="hidden" autocomplete="off">
                                                <div class="caption">
                                                    <p>Cheff : 300 / hour</p>
                                                </div>
                                            </div>
                                            <div class="col-md-4 text-center">
                                                <a href="#">
                                                    <img src="<?php echo base_url('dist/images/menu/930660_91485537.jpg');?>" alt="light" style="max-height:100px" class="img-thumbnail">
                                                </a>
                                                <input id="item3" value="val1" class="hidden" autocomplete="off">
                                                <div class="caption">
                                                    <p>Cheff : 250 / hour</p>
                                                </div>
                                            </div>
                                            <div class="col-md-4 text-center">
                                                <a href="#">
                                                    <img src="<?php echo base_url('dist/images/menu/gas-refill.jpg');?>" alt="light" style="max-height:100px" class="img-thumbnail">
                                                </a>
                                                <input id="item4" value="val1" class="hidden" autocomplete="off">
                                                <div class="caption">
                                                    <p>Gas : 60 / hour</p>
                                                </div>
                                            </div>
                                            <div class="col-md-4 text-center">
                                                <a href="#">
                                                    <img src="<?php echo base_url('dist/images/menu/worldgas-15-kg.jpg');?>" alt="light" style="max-height:100px" class="img-thumbnail">
                                                </a>
                                                <input id="item5" value="val1" class="hidden" autocomplete="off">
                                                <div class="caption">
                                                    <p>Gas : 35 / hour</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Chef</td>
                        <td>1</td>
                        <td>คน</td>
                        <td>200</td>
                        <td>
                            <a href="#">
                                <img class="center-block" src="<?php echo base_url('dist/images/icons/delButton.png');?>" style="max-width:25px">
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>Gas</td>
                        <td>1</td>
                        <td>Hour</td>
                        <td>400</td>
                        <td>
                            <a href="#">
                                <img class="center-block" src="<?php echo base_url('dist/images/icons/delButton.png');?>" style="max-width:25px">
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>

</div>
