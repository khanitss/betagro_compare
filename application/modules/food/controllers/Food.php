<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Food extends MX_Controller {

	public function __construct() {
    	parent::__construct();
        $this->load->module('init_sys/Init_sys');
        // $this->load->model('vendor/Vendor_model');
    }

	public function food_page() {
		$data['content']='food/food';
		// print_r($data) ;
		$this->init_sys->content($data);
		// echo "string";
	}


}//end class