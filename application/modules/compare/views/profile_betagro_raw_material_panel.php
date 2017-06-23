<!-- Calculate -->
<?php
$sum = 0;
foreach ($mat_betagro as $key => $value)
{
    $sum += $value['mat_cost']*$value['mat_calculate'];
}
?>
<!-- Calculate -->

<div class="row">
    <div class="col-md-12">
        <table class="table">
            <thead>
                <tr>
                    <th class="text-center"><strong>วัตถุดิบ</strong></th>
                    <th class="text-center"><strong>จำนวน</strong></th>
                    <th class="text-center"><strong>หน่วย</strong></th>
                    <th class="text-center"><strong>ราคา (บาท)</strong></th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <?php foreach($mat_betagro as $key => $value)
                    {
                        ?>
                        <tr>
                            <td class="text-center"><?php echo $value['mat_name'];?></td>
                            <td class="text-center"><?php echo $value['mat_quantity'];?></td>
                            <td class="text-center"><?php echo $value['mat_unit'];?></td>
                            <td class="text-center"><?php echo number_format($value['mat_cost']*$value['mat_calculate'],2);?></td>
                        </tr>
                        <?php
                    }
                    ?>
                </tr>
                <tr>
                    <td colspan="3" class="text-center"><strong>รวมค่า วัตถุดิบ</strong></td>
                    <td class="text-center"><strong><?php echo number_format($sum,2);?> บาท</strong></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
