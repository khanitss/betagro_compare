<!-- Calculate -->
<?php
$sum = 0;
foreach ($mat_standard as $key => $value)
{
    $sum += $value['mat_cost'];
}
?>
<!-- Calculate -->

<div class="row">
    <div class="col-md-12">
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
                <tr>
                    <?php foreach($mat_standard as $key => $value)
                    {
                        ?>
                        <tr>
                            <td class="text-center"><?php echo $value['mat_name'];?></td>
                            <td class="text-center"><?php echo $value['mat_quantity'];?></td>
                            <td class="text-center"><?php echo $value['mat_unit'];?></td>
                            <td class="text-center"><?php echo $int = (int)($value['mat_cost']*1);?> บาท</td>
                        </tr>
                        <?php
                    }
                    ?>
                </tr>
                <tr>
                    <td colspan="3" class="text-center"><strong>รวมค่า วัตถุดิบ</strong></td>
                    <td class="text-center"><strong><?php echo $int = (int)$sum;?> บาท</strong></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
