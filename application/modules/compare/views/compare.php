<div class="block-header clearfix">
    <h2 class="pull-left">เปรียบเทียบ</h2>

    <ul class="breadcrumb pull-right">
        <li><a href="<?php echo site_url('dashboard/home');?>">หน้าหลัก</a></li>
        <li><a href="<?php echo site_url('compare/choose_menu1_page');?>">เมนูทั่วไป</a></li>
        <li><a href="<?php echo site_url('compare/choose_menu2_page');?>">เมนูเบทาโกร</a></li>
        <li><a href="<?php echo site_url('compare/compare_page');?>">เปรียบเทียบ</a></li>
    </ul>
</div>

<div class="row">
    <div class="col-sm-10 col-xs-8"></div>
    <div class="col-sm-2 col-xs-4 text-right">
        <a href="<?php echo site_url('compare/choose_menu1_page');?>">
            <button class="btn btn-warning btn-block">กลับ</button>
        </a>
    </div>
</div>


</br>

<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <div class="col-xs-1"></div>
            <div class="card-header">
                <h3>เมนูทั่วไป</h3>
            </div>
        </div>
        <?php $this->load->view('compare/profile_standard_panel');?>
    </div>

    <div class="col-md-6"><div class="form-group">
        <div class="col-xs-1"></div>
        <div class="card-header">
            <h3>เมนูเบทาโกร</h3>
        </div>
    </div>
        <?php $this->load->view('compare/profile_betagro_panel');?>
    </div>

</div>
