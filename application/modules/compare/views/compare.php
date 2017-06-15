<div class="block-header clearfix">
  <h2 class="pull-left">Compere : standard menu & betegro menu</h2>

  <ul class="breadcrumb pull-right">
    <li><a href="<?php echo site_url('dashboard/home');?>">Home</a></li>
    <li><a href="<?php echo site_url('compare/choose_menu1_page');?>">Choose Menu Standard</a></li>
    <li><a href="<?php echo site_url('compare/choose_menu2_page');?>">Choose Betagro Menu</a></li>
    <li><a href="<?php echo site_url('compare/compare_page');?>">Compare</a></li>
  </ul>
</div>

<div class="row">
  <div class="col-sm-10 col-xs-8"></div>
  <div class="col-sm-2 col-xs-4 text-right">
    <a href="<?php echo site_url('compare/choose_menu1_page');?>">
      <button class="btn btn-success">Back</button>
    </a>
  </div>
</div>

</br>

<div class="row">
    <div class="col-cm-6">

    </div>

    <div class="col-cm-6">

    </div>

</div>

<div class="col-sm-6">

            </div>

            <!-- col betagro-->
            <div class="col-sm-6">
              <?php foreach($betagro as $key => $value){?>
                <div class="card ">
                  <div class="card-body card-padding">
                    <div class="row" >
                      <div class="col-sm-2">
                        <h2><img class="center-block" src="<?php echo base_url('dist/images/icons/Dollar-Sign-icon.png'); ?>"
                          class="img-thumbnail" width="40px" height="40px"></h2>
                        </div>
                        <div class=" col-sm-3 d-inline-flex p-2"><h1>442</h1></div>
                        <div class=" col-sm-7 text-right"><h2><?php echo $value['food_name']; ?></h2></div>
                      </div></br>

                      <div><img class="center-block" src="<?php echo base_url('images_compare/'.$value['food_pic']);?>"
                        class="img-thumbnail img-responsive"   ></div></br>


                        <div class="row" >
                          <div class="col-sm-3">
                            <img class="center-block" src="<?php echo base_url('dist/images/icons/checkin.png');?>"
                            class="img-thumbnail"  width="50px" height="50px"></div>
                            <div class="col-sm-3 d-inline-flex p-2"><pre><?php echo $value['food_for'];?></pre></div>
                          </div></br>

                          <div class="row" >
                            <div class="col-sm-3"></div>
                            <div class=" col-sm-3 d-inline-flex p-2"><pre><?php echo $value['food_unit']; ?></pre></div>
                          </div></br>

                          <div class="row" >
                            <div class="col-sm-3">
                              <img class="center-block" src="<?php echo base_url('dist/images/icons/time.png');?>"
                              class="img-thumbnail"  width="50px" height="50"></div>
                              <div class="col-sm-3 d-inline-flex p-2"><pre><?php echo $value['food_time']; ?></pre></div>
                            </div></br>

                            <!-- //raw material-->
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
                                <?php foreach($betagro as $key => $value){?>
                                  <tr align="center">
                                    <td><?php echo $value['mat_name']; ?></td>
                                    <td><?php echo $value['mat_quantity']; ?></td>
                                    <td><?php echo $value['mat_unit']; ?></td>
                                    <td><?php echo $value['mat_cost']; ?></td>
                                    <?php } ?>
                                  </tr>
                                </tbody>
                              </table>
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
                                    <tr align="center">
                                      <td><?php echo $value['eq_name']; ?></td>
                                      <td><?php echo $value['eq_quantity']; ?></td>
                                      <td><?php echo $value['eq_unit']; ?></td>
                                      <td><?php echo $value['eq_cost']; ?></td>
                                      <?php }?>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                            </div>
                            <?php }?>
                          </div>
