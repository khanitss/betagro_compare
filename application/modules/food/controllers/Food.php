<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Food extends MX_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->module('init_sys/Init_sys');
	}

	public function food_page() {
		$data['alert'] = $this->session->flashdata('alert');
		$data['content']='food/food-page';
		$data['food_list'] = $this->get_food_menu();
		// echo $data['food_list'];
		// exit;
		$this->init_sys->content($data);
	}

	public function add_food() {
		$this->load->model('Food_model');
		$data['content']='food/add-food';
		$data['man_list'] = $this->Food_model->get_man();
		$data['mat_list'] = $this->Food_model->get_mat();
		$this->init_sys->content($data);
	}

	public function food_details() {
		$this->load->model('Food_model');
		$data['content']='food/food-details';
		$food_id = $this->uri->segment(3);
		$data['food_details'] = $this->Food_model->get_food_details($food_id);
		$data['mat_details'] = $this->Food_model->get_mat_details($food_id);
		$data['eq_details'] = $this->Food_model->get_eq_details($food_id);
		// echo '<pre>', print_r($data['mat_details']);
		// echo '<pre>', print_r($data['eq_details']);
		// exit();
		$this->init_sys->content($data);
	}

	public function edit_food() {
		$this->load->model('Food_model');
		$data['alert'] = $this->session->flashdata('alert');
		$data['content']='food/edit-food';
		$food_id = $this->uri->segment(3);
		$data['food_details'] = $this->Food_model->get_food_details($food_id);
		$data['mat_details'] = $this->Food_model->get_mat_details($food_id);
		$data['eq_details'] = $this->Food_model->get_eq_details($food_id);
		$data['man_list'] = $this->Food_model->get_man();
		$data['mat_list'] = $this->Food_model->get_mat();
		$this->init_sys->content($data);
	}

	public function set_food_menu(){
		$this->load->model('Food_model');
		$timestam = date('Y-m-d H:i:s');
		$this->Food_model->set_food_menu();
		$this->session->set_flashdata('alert', 1);
		redirect('food/food_page');
	}

	public function get_food_menu(){
		$this->load->model('Food_model');
		$result = $this->Food_model->get_food_menu();
		// echo '<pre>', print_r($result);
		// exit;
		return $result;
	}

	public function update_food_details(){
		$this->load->model('Food_model');
		$timestam = date('Y-m-d H:i:s');
		$food_id = $this->uri->segment(3);
		$this->Food_model->update_food_details($food_id);
		$this->session->set_flashdata('alert', 1);
		redirect('food/food_page');
	}

	public function delete_mat_detail(){
		$this->load->model('Food_model');
		$timestam = date('Y-m-d H:i:s');
		$food_id = $this->uri->segment(3);
		$mat_id = $this->uri->segment(4);
		$this->Food_model->delete_mat_detail($food_id,$mat_id);
		$this->session->set_flashdata('alert', 0);
		redirect('food/food_page');
	}

	public function delete_eq_detail(){
		$this->load->model('Food_model');
		$timestam = date('Y-m-d H:i:s');
		$food_id = $this->uri->segment(3);
		$eq_id = $this->uri->segment(4);
		$this->Food_model->delete_eq_detail($food_id,$eq_id);
		$this->session->set_flashdata('alert', 0);
		redirect('food/food_page');
	}

	public function set_mat_detail(){
		$this->load->model('Food_model');
		$timestam = date('Y-m-d H:i:s');
		$food_id = $this->uri->segment(3);
		$mat_id = $this->uri->segment(4);
		$this->Food_model->set_mat_detail($food_id,$mat_id);
		$this->session->set_flashdata('alert', 1);
		redirect('food/food_page');
	}

	public function set_eq_detail(){
		$this->load->model('Food_model');
		$timestam = date('Y-m-d H:i:s');
		$food_id = $this->uri->segment(3);
		$eq_id = $this->uri->segment(4);
		$this->Food_model->set_eq_detail($food_id,$eq_id);
		$this->session->set_flashdata('alert', 1);
		redirect('food/food_page');
	}

}
//end class
?>
