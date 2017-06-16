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
            <tr>
          <?php foreach($mat_betagro as $key => $value){?>
            <td class="text-center"><?php echo $value['mat_name'];?></td>
            <td class="text-center"><?php echo $value['mat_quantity'];?></td>
            <td class="text-center"><?php echo $value['mat_unit'];?></td>
            <td class="text-center"><?php echo $value['mat_cost'];?></td>
          <?php }?>
        </tr>
        <tr>
            <td colspan="3"class="text-center">รวมค่า วัตถุดิบ </td>
            <td class="text-center">$$$ บาท</td>
          </tr>
      </tbody>
      </table>
  </div>
</div>
