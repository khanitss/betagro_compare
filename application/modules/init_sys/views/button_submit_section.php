<?php $back_url=(isset($back_url))? $back_url : '';?>
<div class="row">&nbsp;</div>
<div class="row">
	<div class="col-lg-10">&nbsp;</div>
	<div class="col-lg-1 text-right">
		<a href="<?php echo site_url($back_url);?>" class="btn btn-info btn-icon-text">
			<i class="zmdi zmdi-long-arrow-left"></i>Back
		</a>
	</div>

	<div class="col-lg-1 text-left">
		<button class="btn btn-primary btn-icon-text"><i class="zmdi zmdi-floppy"></i>Save</button>
	</div>
</div>