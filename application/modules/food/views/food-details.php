<!-- Calculate -->
<?php
$food_time = 0;
foreach ($food_details as $key => $value)
{
    $food_time += $value['food_time'];
}
$sum = 0;
foreach ($mat_details as $key => $value)
{
    $sum += $value['mat_cost'];
}
foreach ($eq_details as $key => $value)
{
    $sum += $value['eq_cost']*($food_time/60);
}
?>

<!-- Content Section START -->
<div class="block-header clearfix">
    <h2 class="pull-left">รายละเอียด</h2>
    <ul class="breadcrumb pull-right">
        <li><a href="<?php echo site_url('dashboard/home');?>">หน้าหลัก</a></li>
        <li><a href="<?php echo site_url('food/food_page');?>">รายการอาหาร</a></li>
        <li><a href="<?php echo site_url('food/food_details/'.$this->uri->segment(3));?>">รายละเอียด</a></li>
    </ul>
</div>

<!-- col standard-->
<div class="row">
    <div class="col-sm-5">
        <div class="card ">

            <?php foreach ($food_details as $key => $value)
            {
                ?>

                <div class="card-header">
                    <h2><?php echo $value['food_name'];?></h2>
                </div>
                <div class="card-body card-padding">
                    <img class="center-block" src="<?php echo base_url('images_compare/'.$value['food_pic']);?>" class="img-thumbnail" style="width:75%">
                    <p></p>
                    <form class="form-horizontal">
                        <div class="form-group">
                            <label class="col-sm-4 col-xs-3 text-right control-label">จำนวน :</label>
                            <div class="col-sm-8 col-xs-9">
                                <p class="form-control-static"><?php echo $value['food_for'];?></p>
                            </div>
                            <label class="col-sm-4 col-xs-3 text-right control-label">หน่วย :</label>
                            <div class="col-sm-8 col-xs-9">
                                <p class="form-control-static"><?php echo $value['food_unit'];?></p>
                            </div>
                            <label class="col-sm-4 col-xs-3 text-right control-label">เวลา :</label>
                            <div class="col-sm-8 col-xs-9">
                                <p class="form-control-static"><?php echo $value['food_time'];?> นาที</p>
                                <br/>
                            </div>
                            <div class="col-sm-4 col-xs-4"></div>
                            <div class="col-sm-2 col-xs-2 text-center" >
                                <img src=<?php echo base_url('dist/images/icons/Dollar-Sign-icon.png'); ?> alt="Cinque Terre" width="40px" height="40px">
                            </div>
                            <div class="col-sm-6 col-xs-6">

                                <p class="form-control-static"><strong><?php echo $sum; ?>&nbsp;&nbsp;&nbsp;&nbsp;บาท</strong></p>
                            </div>
                        </div>
                    </form>
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
        <div class="col-sm-2 col-xs-2"></div>
        <div class="col-sm-4 col-xs-4">
            <a href="<?php echo site_url('food/edit_food/'.$value['food_id']);?>" type="button" class="btn btn-success btn-lg btn-block">แก้ไข</a>
        </div>
        <div class="col-sm-4 col-xs-4">
            <a href="<?php echo site_url('food/food_page');?>" type="button" class="btn btn-danger btn-lg btn-block">กลับ</a>
        </div>
        <div class="col-sm-2 col-xs-2"></div>
    </div>
</div>

</div>
