<!-- Calculate -->
<?php
$food_time = 0;
foreach ($standard as $key => $value)
{
    $food_time += $value['food_time'];
}
$sum = 0;
foreach ($eq_betagro as $key => $value)
{
    $sum += $value['eq_cost']*($food_time/60);
}
?>
<!-- Calculate -->

<div class="row">
    <div class="col-md-12">
        <table class="table">
            <thead>
                <tr>
                    <th class="text-center">คน/อุปกรณ์</th>
                    <th class="text-center">จำนวน</th>
                    <th/>
                    <th class="text-center">ราคา</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <?php foreach($eq_betagro as $key => $value)
                    {
                        ?>
                        <tr>
                            <td class="text-center"><?php echo $value['eq_name'];?></td>
                            <td class="text-center">1</td>
                            <td/>
                            <td class="text-center"><?php echo $int = (int)($value['eq_cost']*($food_time/60));?> บาท</td>
                        </tr>
                        <?php
                    }
                    ?>
                </tr>
                <tr>
                    <td colspan="3" class="text-center"><strong>รวมค่า คน/อุปกรณ์</strong></td>
                    <td colspan="1" class="text-center"><strong><?php echo $int = (int)$sum;?> บาท</strong></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
