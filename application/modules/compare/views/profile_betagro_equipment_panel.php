<div class="row">
  <div class="col-md-12">
    loop Man eqiupment
    <table class="table">
      <thead>
        <tr>
          <th>Man/Equipment</th>
          <th>Quantity</th>
          <th>Unit</th>
          <th>Cost</th>
        </tr>
      </thead>

      <tbody>
        <?php foreach($betagro as $key => $value){?>
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
