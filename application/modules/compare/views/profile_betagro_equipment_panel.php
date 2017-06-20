<!-- Calculate -->
<?php
$food_time = 0;
$sum = 0;
foreach ($betagro as $key => $value)
{
    $food_time += $value['food_time'];
}
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
                    <th class="text-center"><strong>คน/อุปกรณ์</strong></th>
                    <th class="text-center"><strong>จำนวน</strong></th>
                    <th/>
                    <th class="text-center"><strong>ราคา (บาท)</strong></th>
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
                            <td class="text-center"><?php echo number_format($value['eq_cost']*($food_time/60),2);?></td>
                        </tr>
                        <?php
                    }
                    ?>
                </tr>
                <tr>
                    <td colspan="3" class="text-center"><strong>รวมค่า คน/อุปกรณ์</strong></td>
                    <td class="text-center"><strong><?php echo number_format($sum,2);?> บาท</strong></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
