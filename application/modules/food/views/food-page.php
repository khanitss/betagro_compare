<style>
.nav-tabs {
    border-bottom: 2px solid #009688;
}

.nav-tabs>li>a {
    color: #009688;
    font-size: 16px;
    border: 1px solid transparent;
    border-radius: 2px 2px 0 0;
}

.nav-tabs>li>a:hover {
    border-color: #00e6cf #00e6cf #00e6cf;
}

.nav-tabs>li.active>a, .nav-tabs>li.active>a:hover, .nav-tabs>li.active>a:focus {
    font-size: 16px;
    color: #ffffff;
    background-color: #009688;
    border: 2px solid #009688;
    border-bottom-color: transparent;
    cursor: default;
}
</style>

<!-- Content Section START -->
<div class="block-header clearfix">
    <h2 class="pull-left">เมนูอาหาร</h2>
    <ul class="breadcrumb pull-right">
        <li><a href="<?php echo site_url('dashboard/home');?>">หน้าหลัก</a></li>
        <li><a href="">รายการอาหาร</a></li>
    </ul>
</div>

<!-- col standard-->
<?php 
    $attr = array('class' => 'form-horizontal', 'autocomplete'=>'off');
    echo form_open('food/food_page', $attr);
?>
<div class="form-group">
    <div class="col-sm-8 col-xs-4">
        <input type="text" name="txt_search_name" value="<?php echo $txt_search_name;?>" class="form-control" placeholder="ค้นหา..." style="background-color: #fff; padding-left: 7px;">
    </div>
    
    <div class="col-sm-2 col-xs-2">
        <button type="submit" class="btn btn-info btn-block">ค้นหา</button>
    </div>

    <div class="col-sm-2 col-xs-6 text-center">
        <a href="<?php echo site_url('food/add_food');?>" class="btn btn-success btn-block">เพิ่มเมนู</a>
    </div>
</div>
<?php echo form_close();?>

<ul class="nav nav-tabs" id="tabContent">
    <li class="active"><a href="#standard" data-toggle="tab">เมนูทั่วไป</a></li>
    <li><a href="#betagro" data-toggle="tab">เมนูเบทาโกร</a></li>
</ul>

<div class="tab-content">
    <div class="tab-pane active" id="standard">
        <?php foreach ($standard_recipe as $key => $value) {?>
            <div class="col-sm-3">
                <div class="thumbnail">
                    <a href="<?php echo site_url('food/food_details/'.$value['food_id']); ?>" class="text-center">
                        <img src="<?php echo base_url('images_compare/'.$value['food_pic']); ?>" class="img-thumbnail" style="margin-top: 10px; width: auto; height: 180px;"/>
                        <h5 class="caption" style="margin-top: 5px;">
                            <?php echo $value['food_name']; ?><br/><?php echo $value['food_for']; ?> <?php echo $value['food_unit']; ?>
                        </h5>
                    </a>
                </div>
            </div>
        <?php }?>
    </div>

    <div class="tab-pane" id="betagro">
        <?php foreach ($betagro_recipe as $key => $value) { ?>
            <div class="col-sm-3">
                <div class="thumbnail">
                    <a href="<?php echo site_url('food/food_details/'.$value['food_id']); ?>" class="text-center">
                        <img src="<?php echo base_url('images_compare/'.$value['food_pic']); ?>" class="img-thumbnail" style="margin-top: 10px; width: auto; height: 180px;"/>
                        <h5 class="caption" style="margin-top: 5px;">
                            <?php echo $value['food_name']; ?><br/><?php echo $value['food_for']; ?> <?php echo $value['food_unit'];?>
                        </h5>
                    </a>
                </div>
            </div>
        <?php }?>
    </div>
</div>
