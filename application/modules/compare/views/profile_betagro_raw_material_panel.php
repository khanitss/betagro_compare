<div class="row">
  <div class="col-md-12">
    <table class="table">
      <thead>
        <tr>
          <th>วัตถุดิบ</th>
          <th>จำนวน</th>
          <th>หน่วย</th>
          <th>ราคา</th>
        </tr>
      </thead>

      <tbody>
        <?php
        foreach($betagro as $key => $value){?>
          <div >
            <?php

            $sum = 0;
            foreach ($mat_betagro as $key => $value)
            {
              $sum += $value['mat_cost'];
            }
            ?>
            <tr>
            <td class="text-center"><?php echo $value['mat_name'];?></td>
            <td class="text-center"><?php echo $value['mat_quantity'];?></td>
            <td class="text-center"><?php echo $value['mat_unit'];?></td>
            <td class="text-center"><?php echo $value['mat_cost'];?></td>
            <?php }?>
            <td colspan="3"class="text-center">รวมค่า วัตถุดิบ <?php echo $value['eq_cost']; ?></td>
            <td class="text-center"><?php echo $sum; ?>บาท</td>
          </tr>
        </div>
      </tbody>
      </table>
  </div>
</div>
