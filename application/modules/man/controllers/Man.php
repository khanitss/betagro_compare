<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Man extends MX_Controller {

	public function __construct() {
    	parent::__construct();
        $this->load->module('init_sys/Init_sys');
        // $this->load->model('vendor/Vendor_model');
    }

	public function man_page() {
		$data['content']='man/man';
		// print_r($data) ;
		$this->init_sys->content($data);
		// echo "string";
	}


}//end class