<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Material extends MX_Controller {

	public function __construct() {
    	parent::__construct();
        $this->load->module('init_sys/Init_sys');
        // $this->load->model('vendor/Vendor_model');
    }

	public function material_page() {
		$data['content']='material/add-raw-group';
		// print_r($data) ;
		$this->init_sys->content($data);
		// echo "string";
	}

	public function material_detail_page() {
		$data['content']='material/add-raw-material-page';
		// print_r($data) ;
		$this->init_sys->content($data);
		// echo "string";
	}



}//end class