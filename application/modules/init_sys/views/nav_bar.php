<div class="block-header clearfix">
  <h2 class="pull-left"><?php echo $nav['title'];?></h2>
    <ul class="breadcrumb pull-right">
      <li><a href="<?php echo site_url('');?>"><?php echo $nav['title'];?></a></li>
      <?php
      	for ($i=0; $i <$rows_nav; $i++) {
      ?>
        <li><?php echo $nav['nav_line'][$i]?></li>
      <?php
    	 }
      ?>
    </ul>
</div>