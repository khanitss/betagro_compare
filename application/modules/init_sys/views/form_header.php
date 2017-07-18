<?php
	$form_url=(isset($form_url))? $form_url : '';
	$attr = array(
    				'class'         =>'form-horizontal ls_form',
                    'autocomplete'  =>'off'
                );

    echo form_open($form_url, $attr);
?>