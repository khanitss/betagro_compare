<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends MX_Controller {

	public function __construct() {
    	parent::__construct();
        $this->load->module('init_sys/Init_sys');
        // $this->load->model('vendor/Vendor_model');
    }

	public function product_page() {
		$data['content']='product/product';
		// print_r($data) ;
		$this->init_sys->content($data);
		// echo "string";
	}
	public function product_add(){
		$data['content']='product/add-product';
		$this->init_sys->content($data);
	}
	public function product_edit(){
		$data['content']='product/edit-product';
		$this->init_sys->content($data);
	}


}//end class