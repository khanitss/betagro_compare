   <div class="block-header clearfix">
    <h2 class="pull-left">Man/Equipment</h2>
    <ul class="breadcrumb pull-right">
        <li><a href="index.html">Home</a></li>
        <li><a href="#">Man/Equipment</a></li>
    </ul>
</div>
<div class="row">
    <div class="col-sm-10 col-xs-8"></div>
    <div class="col-sm-2 col-xs-4 text-center">
        <a href="<?php echo site_url('man/man_add');?>">
        <button class="btn btn-success">Add Man/Equipment</button>
        </a>
    </div>
</div>
<div class="row">
    <form method="get">
        <div class="form-group">
            <div class="col-md-3">
                <div class="thumbnail img-check">
                    <center><a href= "<?php echo site_url ('man/man_edit');?>">
                        <label for="cb1"> <img src="<?php echo base_url('dist/images/menu/12041301524825.jpg');?>"  alt="light" width="250" height="300"></lable></a>
                        </center>
                        <div class="caption">
                         <center><p>Helper : 250 / hour</p></center>
                     </div>
                 </div>
             </div>
             <div class="col-md-3">
                <div class="thumbnail img-check">
                    <center><a href= "<?php echo site_url ('man/man_edit');?>"><label for="cb1"> <img src="<?php echo base_url('dist/images/menu/images.jpg');?>"  alt="light" width="250" height="300"> </lable></a></center>
                    <div class="caption">
                        <center><p>Cheff : 300 / hour</p></center>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="thumbnail img-check">
                    <center><a href= "<?php echo site_url ('man/man_edit');?>"><label for="cb1"> <img src="<?php echo base_url('dist/images/menu/930660_91485537.jpg');?>"  alt="light" width="250" height="300"></label></a>
                    </center>
                    <div class="caption">
                        <center><p>Cheff : 250 / hour</p></center>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="thumbnail img-check">
                    <center><a href= "<?php echo site_url ('man/man_edit');?>"><label for="cb1"> <img src="<?php echo base_url('dist/images/menu/gas-refill.jpg');?>"  alt="light" width="250" height="300"></lable></a></center>
                    <div class="caption">
                        <center><p>Gas : 60 / hour</p></center>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="thumbnail img-check">
                    <center><a href= "<?php echo site_url ('man/man_edit');?>"><label for="cb1"><img src="<?php echo base_url('dist/images/menu/worldgas-15-kg.jpg');?>"  alt="light" width="250" height="300"></lable></a></center>
                    <div class="caption">
                        <center><p>Gas : 35 / hour</p></center>
                    </div>
                </div>
            </div>
        </div>
    </from>
</div>