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
          <tr>
            <td class="text-center"><?php echo $value['mat_name'];?></td>
            <td class="text-center"><?php echo $value['mat_quantity'];?></td>
            <td class="text-center"><?php echo $value['mat_unit'];?></td>
            <td class="text-center"><?php echo $value['mat_cost'];?></td>
            <!-- $mat_equipment_cost=$mat_eqiupment_cost+<?php echo $value['mat_cost'];?>; -->
          </tr>
          <?php }?>
        </tbody>
      </table>
  </div>
</div>
