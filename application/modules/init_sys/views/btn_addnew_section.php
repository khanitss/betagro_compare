<?php
	$form_add=(isset($form_add))? $form_add : '';
	$label_btn_add_new=(isset($label_btn_add_new))? $label_btn_add_new : 'Add&nbsp;New';
?>
<div class="row">
	<div class="col-lg-12">
		&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="<?php echo site_url($form_add);?>" class="btn btn-success btn-icon-text">
			<i class="zmdi zmdi-plus"></i><?php echo $label_btn_add_new;?>
		</a>
	</div>
</div>