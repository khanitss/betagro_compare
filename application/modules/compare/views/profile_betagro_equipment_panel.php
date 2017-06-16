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
            <tr>
              <?php foreach($eq_betagro as $key => $value){?>
              <td class="text-center"><?php echo $value['eq_name']; ?></td>
              <td class="text-center">1</td>
              <td class="text-center"></td>
              <td class="text-center"><?php echo $value['eq_cost']; ?></td>
              <?php }?>
            </tr>
            <tr>
              <td colspan="3"class="text-center">รวมค่า คน/อุปกรณ์ </td>
              <td class="text-center">$$$ บาท</td>
            </tr>
        </tbody>
      </table>
  </div>
</div>

</div>
</div>
