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
		$data['product_list'] = $this->get_product();
		$this->init_sys->content($data);
		// echo "string";
	}
	public function product_add(){
		$data['content']='product/add-product';
		$this->init_sys->content($data);
	}
	public function product_edit(){
		$this->load->model('Product_models');
		$data['content']='product/edit-product';
		$mat_id = $this->uri->segment(3);
		$data['product_details'] = $this->Product_models->get_product_details($mat_id);
		$this->init_sys->content($data);
	}
	public function add_product(){
		$data['product_list'] = $this->get_product();
        
        $this->load->model('Product_models');
        $timestam = date('Y-m-d H:i:s');
        $this->Product_models->add_product();
		redirect('product/product_page');

	}
	public function get_product(){
		$this->load->model('Product_models');
		$result = $this->Product_models->get_product();
		//echo '<pre>', print_r($result);
		return $result;
		
	}
	public function delete_product(){
		$this->load->model('Product_models');
		$id = $this->uri->segment(3);
		$this->Product_models->delete_product($id);
		redirect('product/product_page');
	}
	
	public function update_product_details(){
		$this->load->model('Product_models');
		$timestam = date('Y-m-d H:i:s');
		$mat_id = $this->uri->segment(3);
		$this->Product_models->update_product_details($mat_id);
		redirect('product/product_page');
	}


}//end class