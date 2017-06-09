<div class="block-header clearfix">
  <h2 class="pull-left">Dashboard</h2>
  <ul class="breadcrumb pull-right">
    <li><a href="<?php echo site_url('dashboard');?>">Home</a></li>
    <li>Dashboard</li>
    <!-- <li><a href="">Dashboard</a></li> -->
  </ul>
</div>

<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <a href="<?php echo site_url ('food/food_page');?>"><h2>Menu</h2></a>
      </div>
      <div class="card-body card-padding">

        <!-- <div class="chart">
          <canvas id="lineChart" height="250"></canvas>
        </div> -->
      </div>
      <!-- <div id="doc-line-chart" style="width:50%;height:300px" class="flot-chart-line"></div> -->
    </div>    <!-- div class="card" -->

    <div class="card">
      <div class="card-header">
        <a href="<?php echo site_url ('material/material_page');?>"><h2>Material</h2></a>
      </div>
      <div class="card-body card-padding">
        <!-- <div class="chart">
          <canvas id="pieChart"></canvas>
        </div> -->
      </div>
      <!-- <div id="doc-line-chart" style="width:50%;height:300px" class="flot-chart-line"></div> -->
    </div>    <!-- div class="card" -->
  </div>
    <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <a href="<?php echo site_url ('man/man_page');?>"><h2>Man/Equipment</h2></a>
      </div>
      <div class="card-body card-padding">
        <!-- <div class="chart">
          <canvas id="lineChart" height="250"></canvas>
        </div> -->
      </div>
      <!-- <div id="doc-line-chart" style="width:50%;height:300px" class="flot-chart-line"></div> -->
    </div>    <!-- div class="card" -->

    <div class="card">
      <div class="card-header">
        <a href="<?php echo site_url ('product/product_page');?>"><h2>Product</h2></a>
      </div>
      <div class="card-body card-padding">
        <!-- <div class="chart">
          <canvas id="pieChart"></canvas>
        </div> -->
      </div>
      <!-- <div id="doc-line-chart" style="width:50%;height:300px" class="flot-chart-line"></div> -->
    </div>    <!-- div class="card" -->
  </div>
</div>
<div class="row">
          <div class="col-sm-8">
            <div class="row">
              <div class="col-sm-6">
                <!-- Todo -->
                <div id="todo1" class="card card-todo-list" style="min-height: 256px">
                  <div class="card-header ch-alt">
                    <h2>Todo Lists <small>Manage your Todo Lists</small></h2>
                  </div>
                  <div class="card-body card-padding">
                    <div class="todo-add"> <i class="ta-btn zmdi zmdi-plus c-black" data-dp-action="todo-form-open"></i>
                      <div class="ta-block">
                        <textarea placeholder="What you want to do..."></textarea>
                        <div class="tab-actions"> <a data-dp-action="todo-form-close" href="" class="c-red"><i class="zmdi zmdi-close"></i></a> <a data-dp-action="todo-form-close" href="" class="c-green"><i class="zmdi zmdi-check"></i></a> </div>
                      </div>
                    </div>
                    <div class="list-group">
                      <div class="list-group-item media">
                        <div class="pull-right">
                          <ul class="actions">
                            <li class="dropdown"> <a href="#" data-toggle="dropdown"> <i class="zmdi zmdi-more-vert"></i> </a>
                              <ul class="dropdown-menu dropdown-menu-right">
                                <li><a href="">Delete</a></li>
                                <li><a href="">Archive</a></li>
                              </ul>
                            </li>
                          </ul>
                        </div>
                        <div class="media-body">
                          <div class="checkbox">
                            <label>
                                      <input type="checkbox">
                                      <i class="input-helper"></i> <span>
                                      <div class="lgi-heading">Get video on company culture. Get reviewed by Tim</div>
                                      <small class="lgi-text">assigned to Jenny</small> </span>
                                      </label>
                          </div>
                        </div>
                      </div>
                      <div class="list-group-item media">
                        <div class="pull-right">
                          <ul class="actions">
                            <li class="dropdown"> <a href="#" data-toggle="dropdown"> <i class="zmdi zmdi-more-vert"></i> </a>
                              <ul class="dropdown-menu dropdown-menu-right">
                                <li><a href="">Delete</a></li>
                                <li><a href="">Archive</a></li>
                              </ul>
                            </li>
                          </ul>
                        </div>
                        <div class="media-body">
                          <div class="checkbox">
                            <label>
                                      <input type="checkbox">
                                      <i class="input-helper"></i> <span>
                                      <div class="lgi-heading">Create training material and upload on Intranet. Circulate email with link</div>
                                      <small class="lgi-text">assigned to Allen</small> </span>
                                      </label>
                          </div>
                        </div>
                      </div>
                      <div class="list-group-item media">
                        <div class="pull-right">
                          <ul class="actions">
                            <li class="dropdown"> <a href="#" data-toggle="dropdown"> <i class="zmdi zmdi-more-vert"></i> </a>
                              <ul class="dropdown-menu dropdown-menu-right">
                                <li><a href="">Delete</a></li>
                                <li><a href="">Archive</a></li>
                              </ul>
                            </li>
                          </ul>
                        </div>
                        <div class="media-body">
                          <div class="checkbox">
                            <label>
                                      <input type="checkbox">
                                      <i class="input-helper"></i> <span>
                                      <div class="lgi-heading">Get video on company culture. Get reviewed by Tim</div>
                                      <small class="lgi-text">assigned to Jenny</small> </span>
                                      </label>
                          </div>
                        </div>
                      </div>
                      <div class="list-group-item media">
                        <div class="pull-right">
                          <ul class="actions">
                            <li class="dropdown"> <a href="#" data-toggle="dropdown"> <i class="zmdi zmdi-more-vert"></i> </a>
                              <ul class="dropdown-menu dropdown-menu-right">
                                <li><a href="">Delete</a></li>
                                <li><a href="">Archive</a></li>
                              </ul>
                            </li>
                          </ul>
                        </div>
                        <div class="media-body">
                          <div class="checkbox">
                            <label>
                                      <input type="checkbox">
                                      <i class="input-helper"></i> <span>
                                      <div class="lgi-heading">Create training material and upload on Intranet. Circulate email with link</div>
                                      <small class="lgi-text">assigned to Allen</small> </span>
                                      </label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-sm-6">
                <!-- activities -->
                <div class="card" style="min-height: 500px">
                  <div class="card-body card-padding">
                    <div class="widget">
                      <header class="widget-header">
                        <h4 class="widget-title">Activities</h4>
                      </header>
                      <hr class="widget-separator">
                      <div class="widget-body">
                        <div class="streamline">
                          <div class="sl-item sl-primary">
                            <div class="sl-content">
                              <small class="text-muted">5 mins ago</small>
                              <p>Williams has just joined Project X</p>
                            </div>
                          </div>
                          <div class="sl-item sl-danger">
                            <div class="sl-content">
                              <small class="text-muted">25 mins ago</small>
                              <p>Jane has sent a request for access to the project folder</p>
                            </div>
                          </div>
                          <div class="sl-item sl-success">
                            <div class="sl-content">
                              <small class="text-muted">40 mins ago</small>
                              <p>Kate added you to her team</p>
                            </div>
                          </div>
                          <div class="sl-item">
                            <div class="sl-content">
                              <small class="text-muted">45 minutes ago</small>
                              <p>John has finished his task</p>
                            </div>
                          </div>
                          <div class="sl-item sl-warning">
                            <div class="sl-content">
                              <small class="text-muted">55 mins ago</small>
                              <p>Jim shared a folder with you</p>
                            </div>
                          </div>
                          <div class="sl-item">
                            <div class="sl-content">
                              <small class="text-muted">60 minutes ago</small>
                              <p>John has finished his task</p>
                            </div>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">

              <div class="col-sm-12">
                <!-- contacts -->
                <div class="card card-contact-list" style="min-height: 256px">
                  <div class="card-header">
                    <h2>Contacts</h2>
                  </div>
                  <div class="card-body p-b-20">
                    <div class="list-group">
                      <a class="list-group-item media" href="">
                        <div class="pull-left">
                          <img class="lg-item-img" src="dist/images/profile-pics/1.jpg" alt="">
                        </div>
                        <div class="media-body">
                          <div class="pull-left">
                            <div class="lg-item-heading">David Belle</div>
                            <small class="lg-item-text">david@gmail.com</small>
                          </div>
                          <div class="pull-right">
                            <div class="lg-item-heading">PR Manager</div>
                          </div>
                        </div>
                      </a>
                      <a class="list-group-item media" href="">
                        <div class="pull-left">
                          <img class="lg-item-img" src="dist/images/profile-pics/2.jpg" alt="">
                        </div>
                        <div class="media-body">
                          <div class="pull-left">
                            <div class="lg-item-heading">Chris Morris</div>
                            <small class="lg-item-text">chris@hotmail.com</small>
                          </div>
                          <div class="pull-right">
                            <div class="lg-item-heading">Director at Bingo</div>
                          </div>
                        </div>
                      </a>
                      <a class="list-group-item media" href="">
                        <div class="pull-left">
                          <img class="lg-item-img" src="dist/images/profile-pics/3.jpg" alt="">
                        </div>
                        <div class="media-body">
                          <div class="pull-left">
                            <div class="lg-item-heading">Fredric Mitchell Jr.</div>
                            <small class="lg-item-text">fredric@gmail.com</small>
                          </div>
                          <div class="pull-right">
                            <div class="lg-item-heading">PR Manager</div>
                          </div>
                        </div>
                      </a>
                      <a class="list-group-item media" href="">
                        <div class="pull-left">
                          <img class="lg-item-img" src="dist/images/profile-pics/4.jpg" alt="">
                        </div>
                        <div class="media-body">
                          <div class="pull-left">
                            <div class="lg-item-heading">Glenn Jecobs</div>
                            <small class="lg-item-text">glenn@hotmail.com</small>
                          </div>
                          <div class="pull-right">
                            <div class="lg-item-heading">Assistan</div>
                          </div>
                        </div>
                      </a>
                      <a class="list-group-item media" href="">
                        <div class="pull-left">
                          <img class="lg-item-img" src="dist/images/profile-pics/4.jpg" alt="">
                        </div>
                        <div class="media-body">
                          <div class="pull-left">
                            <div class="lg-item-heading">Bill Phillips</div>
                            <small class="lg-item-text">billphillips@yahoo.com</small>
                          </div>
                          <div class="pull-right">
                            <div class="lg-item-heading">PR Manager</div>
                          </div>
                        </div>
                      </a>
                      <a class="list-group-item media" href="">
                        <div class="pull-left">
                          <img class="lg-item-img" src="dist/images/profile-pics/2.jpg" alt="">
                        </div>
                        <div class="media-body">
                          <div class="pull-left">
                            <div class="lg-item-heading">Chris Morris</div>
                            <small class="lg-item-text">chris@hotmail.com</small>
                          </div>
                          <div class="pull-right">
                            <div class="lg-item-heading">Director at Bingo</div>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
              </div>

            </div>

          </div>

          <div class="col-sm-4">
            <!-- calendar -->
            <div class="card" id="calendar-widget" style="min-height: 256px">
              <div class="card-header ch-alt md-bg-purple-500">
                <div class="cwh-year"></div>
                <div class="cwh-day"></div>
              </div>
              <div class="card-body card-padding-sm">
                <div id="cw-body"></div>
              </div>
            </div>
          </div>

        </div>

<!--  
<script type="text/javascript">
        var barChartCanvas = $("#docMyChart").get(0).getContext("2d");
        var barChart = new Chart(barChartCanvas);
        var barChartData = {
          labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
          datasets: [{
            label: '# of Votes',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
              'rgba(255, 99, 132, 0.2)',
              'rgba(54, 162, 235, 0.2)',
              'rgba(255, 206, 86, 0.2)',
              'rgba(75, 192, 192, 0.2)',
              'rgba(153, 102, 255, 0.2)',
              'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
              'rgba(255,99,132,1)',
              'rgba(54, 162, 235, 1)',
              'rgba(255, 206, 86, 1)',
              'rgba(75, 192, 192, 1)',
              'rgba(153, 102, 255, 1)',
              'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
          }]
        };
        var barChartOptions = {
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero:true
              }
            }]
          }
        };
 
        barChart.Bar(barChartData, barChartOptions);
</script>
-->