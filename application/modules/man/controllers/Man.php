<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Man extends MX_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->module('init_sys/Init_sys');
		$this->load->model('man/Man_models');
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
		$eq_id = $this->uri->segment(3);
		$data['man_details'] = $this->Man_models->get_man_details($eq_id);
		$this->init_sys->content($data);
	}
	public function add_man(){
		$data['man_list'] = $this->get_man();
        
        $this->load->model('Man_models');
        $timestam = date('Y-m-d H:i:s');
        $this->Man_models->add_man();
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
	public function update_man_details(){
		$this->load->model('Man_models');
		$timestam = date('Y-m-d H:i:s');
		$eq_id = $this->uri->segment(3);
		$this->Man_models->update_man_details($eq_id);
		redirect('man/man_page');
	}

}//end class