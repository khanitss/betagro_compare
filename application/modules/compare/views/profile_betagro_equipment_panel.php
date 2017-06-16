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
        <?php foreach($betagro as $key => $value){?>
          <?php
          //$this->load->view('compare/cal_betagro_equip_cost');
          ?>
          <tr>
            <td class="text-center"><?php echo $value['eq_name']; ?></td>
            <td class="text-center"><?php echo $value['eq_quantity']; ?></td>
            <td class="text-center"><?php echo $value['eq_unit']; ?></td>
            <td class="text-center"><?php echo $value['eq_cost']; ?></td>
          </tr>
        <?php }?>
        </tbody>
      </table>
  </div>
</div>

</div>
</div>
