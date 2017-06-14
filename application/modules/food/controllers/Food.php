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
		$data['content']='food/add-food';
		$this->init_sys->content($data);
	}

	public function food_details() {
		$this->load->model('Food_model');
		$data['content']='food/food-details';
		$food_id = $this->uri->segment(3);
		$data['food_details'] = $this->Food_model->get_food_details($food_id);
		// echo '<pre>', print_r($data['food_details']);
		// exit();
		$this->init_sys->content($data);
	}

	public function edit_food() {
		$data['content']='food/edit-food';
		$this->init_sys->content($data);
	}

	public function get_food_menu(){
		$this->load->model('Food_model');
		$result = $this->Food_model->get_food_menu();
		// echo '<pre>', print_r($result);
		// exit;
		return $result;
	}

	public function set_food_menu(){
		$this->load->model('Food_model');
		$timestam = date('Y-m-d H:i:s');
		$input = array(	'food_name' 	=> $this->input->post('food_name'),
		'food_type'		=> $this->input->post('food_type'),
		'food_for'		=> $this->input->post('food_for'),
		'food_unit'		=> $this->input->post('food_unit'),
		'food_time'		=> $this->input->post('food_time'),
		'food_status'	=> '1',
		'created' 		=> $timestam,
		'lastupdate'	=> $timestam,
	);
	$this->Food_model->set_food_menu($input);
	$this->session->set_flashdata('alert', 1);
	redirect('food/food_page');
}

public function get_food_details(){
	$this->load->model('Food_model');
	$id = $this->uri->segment(3);
	$this->Student_model->get_food_details($id);
}

}//end class
