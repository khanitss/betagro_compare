<!-- Content Section START -->
<div class="block-header clearfix">
    <h2 class="pull-left">Food Detail</h2>
    <ul class="breadcrumb pull-right">
        <li><a href="<?php echo site_url('dashboard/home');?>">Home</a></li>
        <li><a href="<?php echo site_url('food/food_page');?>">Food Menu</a></li>
        <li><a href="<?php echo site_url('food/food_details');?>">Food Details</a></li>
        <li><a href="<?php echo site_url('food/edit_food');?>">Edit Details</a></li>
    </ul>
</div>

<!-- col standard-->
<div class="row">
    <div class="col-sm-6">
        <div class="card ">
            <div class="card-header">
                <h2>ขาหมูน้ำแดง</h2>
            </div>
            <div class="card-body card-padding">
                <img class="center-block" src="<?php echo base_url('dist/images/menu/s_ขาหมู.jpg');?>" class="img-thumbnail" style="width:75%">
            </br>
            <form class="form-horizontal">
                <div class="form-group">
                    <label class="col-sm-3 col-xs-3 text-right control-label">For :</label>
                    <div class="col-sm-9 col-xs-9">
                        <input class="form-control" id="focusedInput" type="text" placeholder="1">
                    </div>
                    <label class="col-sm-3 col-xs-3 text-right control-label">Unit :</label>
                    <div class="col-sm-9 col-xs-9">
                        <input class="form-control" id="focusedInput" type="text" placeholder="Dish">
                    </div>
                    <label class="col-sm-3 col-xs-3 text-right control-label">Time :</label>
                    <div class="col-sm-9 col-xs-9">
                        <input class="form-control" id="focusedInput" type="text" placeholder="30 Minutes">
                    </div>
                    <label class="col-sm-3 col-xs-3 text-right control-label">Total :</label>
                    <div class="col-sm-9 col-xs-9">
                        <input class="form-control" id="focusedInput" type="text" placeholder="300 Baht">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="col-sm-6">
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
                                <button class="btn btn-success btn-block">Add</button>
                            </a>
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
                                <button class="btn btn-danger btn-block">delete</button>
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
                                <button class="btn btn-danger btn-block">delete</button>
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
                                <button class="btn btn-danger btn-block">delete</button>
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
                                <button class="btn btn-danger btn-block">delete</button>
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
                                <button class="btn btn-danger btn-block">delete</button>
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
                                <button class="btn btn-danger btn-block">delete</button>
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
                        <th>Man/Equipment</th>
                        <th>Quantity</th>
                        <th>Unit</th>
                        <th>Cost</th>
                        <th>
                            <a href="#">
                                <button class="btn btn-success btn-block">Add</button>
                            </a>
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
                                <button class="btn btn-danger btn-block">delete</button>
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
                                <button class="btn btn-danger btn-block">delete</button>
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

<div>
    <div class="row">
        <div class="col-sm-7 col-xs-1"></div>
        <div class="col-sm-2 col-xs-5">
            <a href="" type="button" class="btn btn-success btn-lg btn-block">Save</a>
        </div>
        <div class="col-sm-2 col-xs-5">
            <a href="<?php echo site_url('food/food_details');?>" type="button" class="btn btn-danger btn-lg btn-block">BACK</a>
        </div>
        <div class="col-sm-1 col-xs-1"></div>
    </div>
</div>
