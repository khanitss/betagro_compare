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
          <tr>
            <td class="text-center"><?php echo $value['eq_name']; ?></td>
            <td class="text-center"><?php echo $value['eq_quantity']; ?></td>
            <td class="text-center"><?php echo $value['eq_unit']; ?></td>
            <td class="text-center"><?php echo $value['eq_cost']; ?></td>
            <!-- $eq_standard_cost=$eq_standard_cost+<?php echo $value['mat_cost'];?>; -->
          </tr>
        <?php }?>
      </tbody>
    </table>
  </div>
</div>
