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
	public function edit_man() {
		
		$data['content']='man/edit-man';
		$eq_id = $this->uri->segment(3);
		$data['man_list'] = $this->Man_models->get_man($eq_id);
		$this->init_sys->content($data);
		$this->load->model('Man_models');
	}
	public function update_man_details(){
		$this->load->model('Man_models');
		$timestam = date('Y-m-d H:i:s');
		$eq_id = $this->uri->segment(3);
		$this->Food_model->update_man_details($eq_id);
		redirect('man/man_page');
	}
	 public function do_upload() { 
         $config['upload_path']   = './uploads/'; 
         $config['allowed_types'] = 'gif|jpg|png'; 
         $config['max_size']      = 100; 
         $config['max_width']     = 1024; 
         $config['max_height']    = 768;  
         $this->load->library('upload', $config);
			
        if ( ! $this->upload->do_upload('userfile')) {
            $error = array('error' => $this->upload->display_errors()); 
            $this->load->view('upload_form', $error); 
         }
			
         else { 
            $data = array('upload_data' => $this->upload->data()); 
            $this->load->view('upload_success', $data); 
         } 
      } 


}//end class