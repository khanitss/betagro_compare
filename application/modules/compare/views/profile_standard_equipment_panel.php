<div class="row">
  <div class="col-md-12">
    <table class="table">
      <thead>
        <tr>
          <th>คน/อุปกรณ์</th>
          <th>จำนวน</th>
          <th>หน่วย</th>
          <th>ราคา</th>
        </tr>
      </thead>

      <tbody>
        <?php foreach($standard as $key => $value){?>
          <div >
            <?php
            $food_time = 0;
            foreach ($standard as $key => $value)
            {
              $food_time += $value['food_time'];
            }
            foreach ($eq_standard as $key => $value)
            {
              $sum += $value['eq_cost']*($food_time/60);
            }
            ?>
            <tr>
              <td class="text-center"><?php echo $value['eq_name']; ?></td>
              <td class="text-center"><?php echo $value['eq_quantity']; ?></td>
              <td class="text-center"><?php echo $value['eq_unit']; ?></td>
              <td class="text-center"><?php echo $value['eq_cost']; ?></td>
              <?php }?>
              <td colspan="3"class="text-center">รวมค่า คน/อุปกรณ์ <?php echo $value['eq_cost']; ?></td>
              <td class="text-center"><?php echo $sum; ?>บาท</td>
            </tr>
          </div>
      </tbody>
    </table>
  </div>
</div>
