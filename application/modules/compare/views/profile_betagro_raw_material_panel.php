<div class="row">
  <div class="col-md-12">
    <table class="table">
      <thead>
        <tr>
          <th>Raw Material</th>
          <th>Quantity</th>
          <th>Unit</th>
          <th>Cost</th>
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
          </tr>
          <?php }?>
        </tbody>
      </table>
  </div>
</div>