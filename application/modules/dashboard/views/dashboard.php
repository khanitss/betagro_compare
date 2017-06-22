<!-- Sum menu -->
<?php
$sumStandard = 0;
$sumBetagor = 0;
foreach ($food_list as $key => $value){
    if($value['food_type'] == '0' and $value['food_status'] == '1')
    {
        $sumStandard++;
    }
    elseif($value['food_type'] == '1' and $value['food_status'] == '1')
    {
        $sumBetagor++;
    }

}
?>

<?php
$sum1 = 0;
$sum2 = 0;
$sum3 = 0;
$sum4 = 0;
$sum5 = 0;
$sum6 = 0;
$sum7 = 0;
$sum8 = 0;
$sum9 = 0;
$sum10 = 0;

foreach ($material_list as $key => $value){
    if($value['cat_id'] == '1')
    {
        $sum1++;
    }
    elseif($value['cat_id'] == '2')
    {
        $sum2++;
    }
    elseif($value['cat_id'] == '3')
    {
        $sum3++;
    }
    elseif($value['cat_id'] == '4')
    {
        $sum4++;
    }
    elseif($value['cat_id'] == '5')
    {
        $sum5++;
    }
    elseif($value['cat_id'] == '6')
    {
        $sum6++;
    }
    elseif($value['cat_id'] == '7')
    {
        $sum7++;
    }
    elseif($value['cat_id'] == '8')
    {
        $sum8++;
    }
    elseif($value['cat_id'] == '9')
    {
        $sum9++;
    }
    elseif($value['cat_id'] == '10')
    {
        $sum10++;
    }
}
?>

<!-- PieChart -->
<script>
var sumStandard = '<?=$sumStandard;?>';
var sumBetagor = '<?=$sumBetagor;?>';
function createChart() {
    $("#chart").kendoChart({
        seriesDefaults: {
            labels: {
                visible: true,
                background: "transparent",
                template: "#= category #"
            }
        },
        series: [{
            type: "pie",
            startAngle: 150,
            data: [{
                category: "รายการอาหารเบทาโกร",
                value: sumBetagor,
                color: "#9de219"
            },{
                category: "รายการอาหารทั่วไป",
                value: sumStandard,
                color: "#006666"
            }]
        }],
        tooltip: {
            visible: true,
            format: "{0} เมนู"
        }
    });
}

$(document).ready(createChart);
$(document).bind("kendo:skinChange", createChart);
</script>

<script>
var sum1 = '<?=$sum1;?>';
var sum2 = '<?=$sum2;?>';
var sum3 = '<?=$sum3;?>';
var sum4 = '<?=$sum4;?>';
var sum5 = '<?=$sum5;?>';
var sum6 = '<?=$sum6;?>';
var sum7 = '<?=$sum7;?>';
var sum8 = '<?=$sum8;?>';
var sum9 = '<?=$sum9;?>';
var sum10 = '<?=$sum10;?>';
function createChart2() {
    $("#chart2").kendoChart({
        seriesDefaults: {
            labels: {
                visible: true,
                background: "transparent",
                template: "#= category #"
            }
        },
        series: [{
            type: "pie",
            startAngle: 70,
            data: [{
                category: "หมู",
                value: sum1,
                color: "#FFFF66"
            },{
                category: "วัว",
                value: sum2,
                color: "#FFCC66"
            },{
                category: "ไก่",
                value: sum3,
                color: "#FF9966"
            },{
                category: "อาหารทะเล",
                value: sum4,
                color: "#FF6666"
            },{
                category: "ผัก",
                value: sum5,
                color: "#FF3366"
            },{
                category: "น้ำมันประกอบอาหาร",
                value: sum6,
                color: "#6699CC"
            },{
                category: "เครื่องเทศ",
                value: sum7,
                color: "#66FFCC"
            },{
                category: "ผลิตภัณฑ์เบทาโกร",
                value: sum8,
                color: "#FF6666"
            },{
                category: "หมูเบทาโกร",
                value: sum9,
                color: "#FFFF66"
            },{
                category: "ไก่เบทาโกร",
                value: sum10,
                color: "#6699CC"
            }]
        }],
        tooltip: {
            visible: true,
            format: "{0} รายการ"
        }
    });
}

$(document).ready(createChart2);
$(document).bind("kendo:skinChange", createChart2);
</script>

<!-- Content Section START -->
<div class="block-header clearfix">
    <h2 class="pull-left">หน้าหลัก</h2>
    <ul class="breadcrumb pull-right">
        <li><a href="<?php echo site_url('dashboard/home');?>">หน้าหลัก</a></li>
    </ul>
</div>

<div class="col-sm-8">
    <div class="row">
        <div class="card">
            <div class="card-header">
                <h2>รายการอาหารทั้งหมด</h2>
            </div>
            <div class="card-body">
                <div id="chart"></div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="card">
            <div class="card-header">
                <h2>รายการวัตถุดิบทั้งหมด</h2>
            </div>
            <div class="card-body">
                <div id="chart2"></div>
            </div>
        </div>
    </div>
</div>

<div class="col-sm-4">
    <!-- contacts -->
    <div class="card card-contact-list" style="min-height: 512px">
        <div class="card-header">
            <h2>เปรียบเทียบรายการอาหาร</h2>
        </div>
        <div class="card-body p-b-20">
            <div class="list-group">
                <?php
                $i = 1;
                foreach ($food_list as $key => $value)
                {
                    if($value['food_type'] == '0' and $value['food_status'] == '1' and $i <= 10)
                    {
                        ?>
                        <a class="list-group-item media" href="<?php echo site_url('compare/choose_menu2_page/'.$value['food_id']);?>">
                            <div class="pull-left">
                                <img  src="<?php echo base_url('images_compare/'.$value['food_pic']);?>" class="img-thumbnail" width="120px" height="90px">
                            </div>
                            <div class="pull-left">
                                <h4 class="lg-item-heading"><center><?php echo $value['food_name'];?></center></h4>
                            </div>
                        </a>
                        <?php
                        $i++;
                    }
                }
                ?>
            </div>
        </div>
    </div>
</div>
