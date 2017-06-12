<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie9"><![endif]-->

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Betagro</title>

  <!-- Vendor CSS -->
  <link href="vendors/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet">
  <link href="vendors/animate.css/animate.min.css" rel="stylesheet">
  <link href="vendors/sweetalert/dist/sweetalert.css" rel="stylesheet">
  <link href="vendors/material-design-iconic-font/dist/css/material-design-iconic-font.min.css" rel="stylesheet">
  <link href="vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css" rel="stylesheet">
  <link href="vendors/map/jvectormap/jquery-jvectormap-2.0.3.css" rel="stylesheet">
  <link href="vendors/flag-icons/css/flag-icon.min.css" rel="stylesheet">

  <!-- Dashplus CSS -->
  <link href="dist/css/dashplus_1.min.css" rel="stylesheet">
  <link href="dist/css/dashplus_2.min.css" rel="stylesheet">

</head>

<body class="layout-fixed-left-menu left-sidebar-toggled show-welcome-message">
  <header id="header" class="clearfix" data-dp-theme="bluegrey">
    <ul class="main-header">
      <li class="dp-trigger" data-dp-action="left-sidebar-toggle" data-dp-target="#sidebar-left">
        <a href=""><i class="menu-icon zmdi zmdi-arrow-left"></i></a>
      </li>
      <li class="header-logo hidden-xs">
        <a href="index.html">Betargo</a>
      </li>

      <li class="pull-right">
        <ul class="header-menu">
          <li class="dropdown menu-notifications">
            <a data-toggle="dropdown" href="">
              <i class="menu-icon zmdi zmdi-notifications"></i>
              <i class="menu-counts">10</i>
            </a>
            <div class="dropdown-menu dropdown-menu-lg pull-right">
              <div class="list-group menu-notification">
                <div class="list-group-header">Notification</div>
                <div class="list-group-body">
                  <a class="list-group-item media" href="">
                    <div class="pull-left">
                      <img class="lg-item-img" src="dist/images/profile-pics/1.jpg" alt="">
                    </div>
                    <div class="media-body">
                      <div class="lg-item-heading">Thomas Douglas</div>
                      <small class="lg-item-text">Cum sociis natoque penatibus et magnis dis parturient montes</small>
                    </div>
                  </a>
                  <a class="list-group-item media" href="">
                    <div class="pull-left">
                      <img class="lg-item-img" src="dist/images/profile-pics/2.jpg" alt="">
                    </div>
                    <div class="media-body">
                      <div class="lg-item-heading">David Edmonds</div>
                      <small class="lg-item-text">Nunc quis diam diamurabitur at dolor elementum, dictum turpis vel</small>
                    </div>
                  </a>
                  <a class="list-group-item media" href="">
                    <div class="pull-left">
                      <img class="lg-item-img" src="dist/images/profile-pics/3.jpg" alt="">
                    </div>
                    <div class="media-body">
                      <div class="lg-item-heading">Robert Taylor</div>
                      <small class="lg-item-text">Phasellus a ante et est ornare accumsan at vel magnauis blandit turpis at augue ultricies</small>
                    </div>
                  </a>
                </div>
                <a class="view-more" href="">View More</a>
              </div>
            </div>
          </li>

          <li class="dropdown menu-tasks hidden-xs">
            <a data-toggle="dropdown" href="">
              <i class="menu-icon zmdi zmdi-assignment"></i>
              <i class="menu-counts">9</i>
            </a>
            <div class="dropdown-menu pull-right dropdown-menu-lg">
              <div class="list-group">
                <div class="list-group-header">Tasks</div>
                <div class="list-group-body">
                  <div class="list-group-item">
                    <div>
                      <div class="lg-item-heading m-b-5 pull-left">New</div>
                      <div class="lg-item-heading m-b-5 pull-right">1%</div>
                      <div style="clear:both;"></div>
                    </div>

                    <div class="progress">
                      <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                        <span class="sr-only">75%</span>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item">
                    <div>
                      <div class="lg-item-heading m-b-5 pull-left">Overdue</div>
                      <div class="lg-item-heading m-b-5 pull-right">18/150</div>
                      <div style="clear:both;"></div>
                    </div>

                    <div class="progress">
                      <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="18" aria-valuemin="0" aria-valuemax="100" style="width: 18%">
                        <span class="sr-only">18%</span>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item">
                    <div>
                      <div class="lg-item-heading m-b-5 pull-left">In Progress</div>
                      <div class="lg-item-heading m-b-5 pull-right">25/150</div>
                      <div style="clear:both;"></div>
                    </div>

                    <div class="progress">
                      <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%">
                        <span class="sr-only">25%</span>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item">
                    <div>
                      <div class="lg-item-heading m-b-5 pull-left">Completed</div>
                      <div class="lg-item-heading m-b-5 pull-right">112/150</div>
                      <div style="clear:both;"></div>
                    </div>

                    <div class="progress">
                      <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%">
                        <span class="sr-only">75%</span>
                      </div>
                    </div>
                  </div>
                  <a class="view-more" href="">View More</a>
                </div>
              </div>
            </div>
          </li>

          <li class="dropdown">
            <a data-toggle="dropdown" href=""><i class="menu-icon zmdi zmdi-apps"></i></a>

            <div class="dropdown-menu pull-right" style="min-width: 400px;">
              <div class="dropdown-grid">
                <ul>
                  <li><a href=""><i class="zmdi zmdi-email c-lime-600"></i></a> <span>Mailbox</span></</li>
                  <li><a href=""><i class="zmdi zmdi-account c-grey-600"></i></a> <span>My Account</span></li>
                  <li><a href=""><i class="zmdi zmdi-google-drive c-cyan-600"></i></a> <span>My Drive</span></li>
                  <li><a href=""><i class="zmdi zmdi-money c-red-600"></i></a> <span>Rewards</span></li>
                  <li><a href=""><i class="zmdi zmdi-help c-blue-600"></i></a> <span>Help</span></li>
                  <li><a href=""><i class="zmdi zmdi-thumb-up c-teal-600"></i></a> <span>Feedback</span></l>
                    <li><a href=""><i class="zmdi zmdi-accounts c-grey-700"></i></a> <span>Contacts</span></li>
                    <li><a href=""><i class="zmdi zmdi-file-text c-blue-800"></i></a> <span>Docs</span></li>
                    <li><a href=""><i class="zmdi zmdi-calendar-note c-pink-600"></i></a> <span>Calendar</span></li>
                  </ul>
                </div>
              </div>
            </li>

            <li class="dropdown">
              <a data-toggle="dropdown" href=""><i class="menu-icon zmdi zmdi-more-vert"></i></a>

              <ul class="dropdown-menu dm-icon pull-right">
                <li>
                  <a href=""><i class="zmdi zmdi-account"></i> My Profile</a>
                </li>
                <li>
                  <a href=""><i class="zmdi zmdi-favorite"></i> Favorites</a>
                </li>
                <li>
                  <a href=""><i class="zmdi zmdi-settings"></i> Other Settings</a>
                </li>
                <li>
                  <a href=""><i class="zmdi zmdi-square-right"></i> Logout</a>
                </li>
              </ul>
            </li>
            <li class="dp-trigger" data-dp-action="sidebar-open" data-dp-target="#sidebar-right">
              <a href=""><i class="menu-icon zmdi zmdi-settings"></i></a>
            </li>
          </ul>
        </li>
      </ul>
    </header>

    <!-- Right Side Bar -->
    <aside id="sidebar-right" class="sidebar">
      <div class="lg-body mcs-overflow">
        <ul class="tab-nav m-t-10 p-l-15 p-r-15" role="tablist">
          <li class="active">
            <a href="#control-tab-settings" aria-controls="control-tab-settings" role="tab" data-toggle="tab"><i class="him-icon zmdi zmdi-settings"></i></a>
          </li>
          <li><a href="#control-tab-contacts" aria-controls="control-tab-contacts" role="tab" data-toggle="tab"><i class="him-icon zmdi zmdi-accounts"></i></a></li>
          <li class="close-btn">
            <a href="" data-dp-action="sidebar-close" data-dp-target="#sidebar-right">
              <i class="zmdi zmdi-close"></i>
            </a>
          </li>
        </ul>

        <div class="tab-content">
          <div role="tabpanel" class="tab-pane active p-l-25 p-r-25 p-b-25 p-t-10" id="control-tab-settings">
            <ul class="skin-colors">
              <li class="skin-switch hidden-xs">
                <span class="dp-skin md-bg-light-blue" data-dp-action="change-skin" data-dp-skin="lightblue"></span>
                <span class="dp-skin md-bg-blue-grey" data-dp-action="change-skin" data-dp-skin="bluegrey"></span>
                <span class="dp-skin md-bg-cyan" data-dp-action="change-skin" data-dp-skin="cyan"></span>
                <span class="dp-skin md-bg-teal" data-dp-action="change-skin" data-dp-skin="teal"></span>
                <span class="dp-skin md-bg-orange" data-dp-action="change-skin" data-dp-skin="orange"></span>
                <span class="dp-skin md-bg-brown" data-dp-action="change-skin" data-dp-skin="brown"></span>
                <span class="dp-skin md-bg-green" data-dp-action="change-skin" data-dp-skin="green"></span>
                <span class="dp-skin md-bg-purple" data-dp-action="change-skin" data-dp-skin="purple"></span>
                <span class="dp-skin md-bg-pink" data-dp-action="change-skin" data-dp-skin="pink"></span>
                <span class="dp-skin md-bg-blue" data-dp-action="change-skin" data-dp-skin="blue"></span>
              </li>
            </ul>

            <div class="select m-t-25">
              <select class="form-control">
                <option>Select an Option</option>
                <option>Option 1</option>
                <option>Option 2</option>
                <option>Option 3</option>
                <option>Option 4</option>
                <option>Option 5</option>
              </select>
            </div>
            <div class="select">
              <select class="form-control">
                <option>Select an Option</option>
                <option>Option 1</option>
                <option>Option 2</option>
                <option>Option 3</option>
                <option>Option 4</option>
                <option>Option 5</option>
              </select>
            </div>

            <div class="toggle-switch toggle-switch-demo m-b-15 m-t-25" data-ts-color="pink">
              <input id="ts1" type="checkbox" hidden="hidden">
              <label for="ts1" class="ts-helper"></label>
              <label for="ts1" class="ts-label m-l-10">Toggle Settings One</label>
            </div>
            <div class="toggle-switch toggle-switch-demo m-b-15" data-ts-color="purple">
              <input id="ts2" type="checkbox" hidden="hidden">
              <label for="ts2" class="ts-helper"></label>
              <label for="ts2" class="ts-label m-l-10">Toggle Settings Two</label>
            </div>

            <div class="checkbox m-b-15 m-t-25"><label><input type="checkbox" value=""><i class="input-helper"></i>Settings option 1</label></div>
            <div class="checkbox m-b-15"><label><input type="checkbox" value=""><i class="input-helper"></i>Settings option 2</label></div>

            <label class="radio radio-inline m-r-20 m-t-25"><input type="radio" name="inlineRadioOptions" value="option1"><i class="input-helper"></i>1</label>
            <label class="radio radio-inline m-r-20 m-t-25"><input type="radio" name="inlineRadioOptions" value="option2"><i class="input-helper"></i>2</label>
            <label class="radio radio-inline m-r-20 m-t-25"><input type="radio" name="inlineRadioOptions" value="option3"><i class="input-helper"></i>3</label>
          </div>

          <div role="tabpanel" class="tab-pane" id="control-tab-contacts">
            <div class="list-group">
              <a class="list-group-item media" href="">
                <div class="pull-left p-relative">
                  <img class="lg-item-img" src="dist/images/profile-pics/2.jpg" alt="">
                  <i class="chat-status-busy"></i>
                </div>
                <div class="media-body">
                  <div class="lg-item-heading">Thomas Douglas</div>
                  <small class="lg-item-text">Available</small>
                </div>
              </a>

              <a class="list-group-item media" href="">
                <div class="pull-left">
                  <img class="lg-item-img" src="dist/images/profile-pics/1.jpg" alt="">
                </div>
                <div class="media-body">
                  <div class="lg-item-heading">David Edmonds</div>
                  <small class="lg-item-text">Last seen 12 hours ago</small>
                </div>
              </a>

              <a class="list-group-item media" href="">
                <div class="pull-left p-relative">
                  <img class="lg-item-img" src="dist/images/profile-pics/3.jpg" alt="">
                  <i class="chat-status-online"></i>
                </div>
                <div class="media-body">
                  <div class="lg-item-heading">Robert Taylor</div>
                  <small class="lg-item-text">Availble</small>
                </div>
              </a>

              <a class="list-group-item media" href="">
                <div class="pull-left p-relative">
                  <img class="lg-item-img" src="dist/images/profile-pics/4.jpg" alt="">
                  <i class="chat-status-online"></i>
                </div>
                <div class="media-body">
                  <div class="lg-item-heading">John Smith</div>
                  <small class="lg-item-text">Availble</small>
                </div>
              </a>

              <a class="list-group-item media" href="">
                <div class="pull-left">
                  <img class="lg-item-img" src="dist/images/profile-pics/5.jpg" alt="">
                </div>
                <div class="media-body">
                  <div class="lg-item-heading">Tim Booth</div>
                  <small class="lg-item-text">Last seen 10 days ago</small>
                </div>
              </a>

              <a class="list-group-item media" href="">
                <div class="pull-left p-relative">
                  <img class="lg-item-img" src="dist/images/profile-pics/6.jpg" alt="">
                  <i class="chat-status-busy"></i>
                </div>
                <div class="media-body">
                  <div class="lg-item-heading">William James</div>
                  <small class="lg-item-text">Available</small>
                </div>
              </a>

              <a class="list-group-item media" href="">
                <div class="pull-left">
                  <img class="lg-item-img" src="dist/images/profile-pics/7.jpg" alt="">
                </div>
                <div class="media-body">
                  <div class="lg-item-heading">Paul Graham</div>
                  <small class="lg-item-text">Last seen 7 hours ago</small>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </aside>

    <section id="main">
      <!-- Main Nav Bar -->
      <nav id="sidebar-left" class="sidebar mcs-overflow">
        <ul class="sb-header m-b-20">
          <li class="dp-trigger" data-dp-action="left-sidebar-toggle" data-dp-target="#sidebar-left">
            <a href=""><span class="header-logo m-r-20">Dashplus Admin</span><i class="menu-icon zmdi zmdi-arrow-left"></i></a>
          </li>
        </ul>
        <div class="nav-menu-wrapper mcs-overflow1">
          <ul class="nav-menu">
            <li class="nav-item">
              <a href="index.html" data-dp-action="submenu-toggle"><i class="zmdi zmdi-palette"></i>&nbsp;<span>Home</span></a>
            </li>

            <li class="nav-item">
              <a href="choose-menu.html"><i class="zmdi zmdi-apps"></i>&nbsp;<span>Compare</span></a>
            </li>

            <li class="nav-item">
              <a href="" data-dp-action="submenu-toggle"><i class="zmdi zmdi-border-color"></i>&nbsp;<span>Setting</span></a>
              <ul>
                <li><a href="food.html">Foods</a></li>
                <li><a href="add-raw-group.html">Materials</a></li>
                <li><a href="product.html">Betagro Products</a></li>
                <li><a href="man.html">Man & Equipments</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </nav>

      <!-- Content Section START -->
      <section id="content">
        <div class="container">
          <div class="block-header clearfix">
            <h2 class="pull-left">Add Raw Material Group</h2>


            <ul class="breadcrumb pull-right">
              <li><a href="../../index.html">Home</a></li>
              <li><a href="">Setting</a></li>
              <li><a href="">Add Raw Material Group</a></li>
            </ul>
          </div>

        </br>
      </br>
      <div class="row">
        <div class="col-sm-3">
          <div class="thumbnail img-check">
            <label class=" btn btn-light">
              <label for="cb3"><a href="add-raw-material-page.html"><img src="https://pbs.twimg.com/profile_images/486478679283752960/WMhOYwAs.jpeg" alt="Nature" style="width:50%;height: 50%"></a>
                <div class="caption">
                  <p>น้องหมู</p>
                </div></label>
              </li>
            </lable>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="thumbnail img-check">
            <label class=" btn btn-light">
              <label for="cb3"><a href=""><img src="http://ca.lnwfile.com/_/ca/_raw/vh/tp/ak.jpg" alt="Nature" style="width:50%;height: 50%"></a>
                <div class="caption">
                  <p>น้องวัว</p>
                </div></label>
              </li>
            </lable>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="card">
            <div class="card-header">
              <h2>Add Raw Material Group</h2>
            </div>
            <div align="center">
              <a href="#">
                <img src="dist/images/icons/addButton.png" data-toggle="modal" data-target="#myAddRawModal" alt="addRaw" style="width:30%">
              </a>
            </div>
          

            <!-- Modal -->
            <div id="myAddRawModal" class="modal fade" role="dialog">
              <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Add Raw Material Group</h4>
                  </div>

                  <!-- add image-->
                  <div class="fileinput fileinput-new card-body card-padding" data-provides="fileinput">
                    <span class="btn btn-default btn-file m-r-10">
                      <span class="fileinput-new"><img src="dist/images/icons/addButton.png" width="30%" alt=""></span>
                      <span class="fileinput-exists">Change</span>
                      <input type="file" name="...">
                    </span>
                    <span class="fileinput-filename"></span>
                    <a href="#" class="close fileinput-exists" data-dismiss="fileinput">&times;</a>
                    <center>
                      <h4>Add Picture</h4></center>

                      <!-- add name-->
                      <div class="col-sm-6"> </div>
                      <div class="card-body card-padding">
                        <form class="form-horizontal">
                          <div class="form-group">
                            <label class="col-sm-3 col-xs-3 control-label">Group Name :</label>
                            <div class="col-sm-9 col-xs-9">
                              <input class="form-control" id="focusedInput" type="text" placeholder="Group Name">
                            </div>
                          </div>
                        </form>
                      </div>

                      <div class="row">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-3">
                          <button type="button" class="btn btn-success btn-block" data-dismiss="modal">Add</button>
                        </div>
                        <div class="col-sm-2"></div>
                        <div class="col-sm-3">
                          <button type="button" class="btn btn-danger btn-block" data-dismiss="modal">Close</button>
                        </div>
                        <div class="col-sm-2"></div>
                      </div>

                    </div>
                  </div>
                </br>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-2"></div>
    </div>
  </section>
  <!-- Content Section END -->
</section>

<!-- Footer -->
<footer id="footer">
  Copyright &copy; 2016 Admin Dashboard


</footer>

<!-- Page Loader -->
<div class="page-loader">
  <div class="preloader pls-blue">
    <svg class="pl-circular" viewBox="25 25 50 50">
      <circle class="plc-path" cx="50" cy="50" r="20" />
    </svg>

    <p>Please wait...</p>
  </div>
</div>

<!-- Javascript Libraries -->
<script src="vendors/jquery/dist/jquery.min.js"></script>
<script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>

<script src="vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="vendors/Waves/dist/waves.min.js"></script>
<script src="vendors/bootstrap-growl/bootstrap-growl.min.js"></script>
<script src="vendors/sweetalert/dist/sweetalert.min.js"></script>

<script src="vendors/moment/min/moment.min.js"></script>
<script src="vendors/fullcalendar/dist/fullcalendar.min.js"></script>
<script src="vendors/simpleWeather/jquery.simpleWeather.min.js"></script>
<script src="vendors/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js"></script>

<script src="vendors/charts/sparklines/jquery.sparkline.min.js"></script>
<script src="vendors/charts/flot/jquery.flot.js"></script>
<script src="vendors/charts/flot/jquery.flot.resize.js"></script>
<script src="vendors/charts/flot.curvedlines/curvedLines.js"></script>

<script src="vendors/charts/flot/jquery.flot.pie.js"></script>
<script src="vendors/charts/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
<script src="vendors/charts/flot-orderBars/js/jquery.flot.orderBars.js"></script>
<script src="vendors/charts/chartjs/Chart.min.js"></script>

<script src="vendors/map/jvectormap/jquery-jvectormap-2.0.3.min.js"></script>
<script src="vendors/map/jvectormap/jquery-jvectormap-world-mill.js"></script>

<script src="dist/js/dashplus.min.js"></script>
<script src="dist/js/gdp-data.js"></script>

<script type="text/javascript">
  $(document).ready(function() {
    /* Welcome Message */
    function notify(message, type) {
      $.growl({
        message: message
      }, {
        type: type,
        allow_dismiss: false,
        label: 'Cancel',
        placement: {
          from: 'top',
          align: 'right'
        },
        delay: 2000,
        animate: {
          enter: 'animated fadeInUp',
          exit: 'animated fadeOutDown'
        },
        offset: {
          x: 30,
          y: 70
        }
      });
    };

    setTimeout(function() {
      if ($('.show-welcome-message')[0]) {
        notify('Welcome Kate Winslet!', 'inverse');
      }
    }, 1000);

    /* Profile Card */
    $('.btn-move-up').click(function() {
      $('.card-reveal').css({
        'display': 'block',
        'transform': 'translateY(-100%)'
      });
    });

    $('.btn-move-down').click(function() {
      $('.card-reveal').css({
        'display': 'none',
        'transform': 'translateY(0%)'
      });
    });

    /* Vector Map */
    $('#dashboard-map-orders').vectorMap({
      map: 'world_mill',
      backgroundColor: '#EEE',
      regionsSelectable: true,
      regionStyle: {
        selected: {
          fill: '#B64645'
        },
        initial: {
          fill: '#757575'
        }
      },
      markerStyle: {
        initial: {
          fill: '#3FBAE4',
          stroke: '#3FBAE4'
        }
      },
      markers: [{
        latLng: [50.27, 30.31],
        name: 'Kyiv - 1'
      },
      {
        latLng: [52.52, 13.40],
        name: 'Berlin - 2'
      },
      {
        latLng: [48.85, 2.35],
        name: 'Paris - 1'
      },
      {
        latLng: [51.51, -0.13],
        name: 'London - 3'
      },
      {
        latLng: [40.71, -74.00],
        name: 'New York - 5'
      },
      {
        latLng: [35.38, 139.69],
        name: 'Tokyo - 12'
      },
      {
        latLng: [37.78, -122.41],
        name: 'San Francisco - 8'
      },
      {
        latLng: [28.61, 77.20],
        name: 'New Delhi - 4'
      },
      {
        latLng: [39.91, 116.39],
        name: 'Beijing - 3'
      }
      ]
    });

  });
</script>

</body>

</html>
