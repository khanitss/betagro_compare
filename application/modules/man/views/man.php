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
            <?php
            foreach ($man_list as $key => $value) {
            ?>
                <div class="col-md-3">
                    <div class="thumbnail img-check">
                        <center><a href= "<?php echo site_url ('man/man_edit');?>">
                            <label for="cb1"> <img src="<?php echo base_url('dist/images/menu/12041301524825.jpg');?>"  alt="light" width="250" height="300"></lable></a>
                            </center>
                            <div class="caption">
                                <center><p><?php echo $value['eq_name'];?> : <?php echo $value['eq_cost'];?> Baht</p></center>
                                <div class="col-sm-8">
                                </div>
                                <a href="<?php echo site_url('man/delete_man/'.$value['eq_id']);?>" type="delete" class="btn btn-danger">DELETE</a>
                            </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </from> 
</div>