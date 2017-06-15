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
		$data['content']='product/edit-product';
		$this->init_sys->content($data);
	}
	public function add_product(){
		$timestam = date('Y-m-d H:i:s');
		$this->load->model('Product_models');
		$input = array(	'mat_name' => $this->input->post('mat_name'),
			'mat_quantity' => $this->input->post('mat_quantity'),
			'mat_cost' => $this->input->post('mat_cost'),
			'mat_unit' => $this->input->post('mat_unit'),
			'mat_type' => '1',
			'mat_status' => '1',
			'created'       => $timestam,
			'lastupdate'    => $timestam,
			);
		$this->Product_models->add_product($input);
	// $this->session->set_flashdata('alert',true);
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


}//end class