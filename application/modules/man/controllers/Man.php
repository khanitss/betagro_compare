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
		$data['man_list'] = $this->get_man();
		$this->init_sys->content($data);
		// echo "string";
	}
	public function man_add(){
		$data['content']='man/add-man';
		$this->init_sys->content($data);
	}
	public function man_edit(){
		$data['content']='man/edit-man';
		$this->init_sys->content($data);
	}
	public function add_man(){
		$timestam = date('Y-m-d H:i:s');
		$this->load->model('Man_models');
		$input = array(	'eq_name' => $this->input->post('eq_name'),
			'eq_cost' => $this->input->post('eq_cost'),
			'eq_status' => '1',
			'created'       => $timestam,
			'lastupdate'    => $timestam,
			);
		$this->Man_models->add_man($input);
	// $this->session->set_flashdata('alert',true);
		redirect('man/man_page');

	}
	public function get_man (){
		$this->load->model('Man_models');
		$result = $this->Man_models->get_man();
		//echo '<pre>', print_r($result);
		return $result;
		
	}
	public function delete_man(){
		$this->load->model('Man_models');
		$id = $this->uri->segment(3);
		$this->Man_models->delete_man($id);
		redirect('man/man_page');
	}

}//end class