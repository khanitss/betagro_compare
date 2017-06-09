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
        <h2>Chart1</h2>
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
        <h2>Chart2</h2>
      </div>
      <div class="card-body card-padding">
      chart
        <!-- <div class="chart">
          <canvas id="pieChart"></canvas>
        </div> -->
      </div>
      <!-- <div id="doc-line-chart" style="width:50%;height:300px" class="flot-chart-line"></div> -->
    </div>    <!-- div class="card" -->
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