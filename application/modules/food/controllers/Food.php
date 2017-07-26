<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Food extends MX_Controller {

	public function __construct() 
	{
		// parent::__construct();
		$this->load->module('init_sys/Init_sys');
		$this->load->model('Food_model');		
	}

	public function food_page() 
	{
		$data['txt_search_name'] = $this->input->post('txt_search_name');

		$data['content']='food/food-page';
		$food_list = $this->get_food_menu($data['txt_search_name']);

		$data['standard_recipe'] = $this->set_food_standard_recipe($food_list);
		$data['betagro_recipe'] = $this->set_food_betagro_recipe($food_list);
		// echo '<pre>', print_r($data['betagro_recipe']);exit();
		$this->init_sys->content($data);
	}

	private function set_food_standard_recipe($qstr) {
		$rs = array_filter($qstr, function($value) {
			if ($value['food_type'] == 0 && $value['food_status'] == 1) {
				return $value;
			}
		});

		return $rs;
	}

	private function set_food_betagro_recipe($qstr) {
		$rs = array_filter($qstr, function($value) {
			if ($value['food_type'] == 1 && $value['food_status'] == 1) {
				return $value;
			}
		});

		return $rs;
	}

	public function add_food() 
	{
		$data['content']='food/add-food';
		$this->init_sys->content($data);
	}

	public function add_food_details() 
	{
		$food_id = $this->uri->segment(3);
		$data['content']='food/add-food-details.php';

		$data['food_details'] = $this->Food_model->get_food_details($food_id);
		$data['man_list'] = $this->Food_model->get_man();
		$data['mat_list'] = $this->Food_model->get_mat();
		$data['mat_details'] = $this->Food_model->get_mat_details($food_id);
		$data['eq_details'] = $this->Food_model->get_eq_details($food_id);
		$data['material_list'] = $this->Food_model->get_mate_group();

		$this->init_sys->content($data);
	}

	public function food_details() 
	{
		$food_id = $this->uri->segment(3);
		$data['content']='food/food-details';
		
		$data['food_details'] = $this->Food_model->get_food_details($food_id);
		$data['mat_details'] = $this->Food_model->get_mat_details($food_id);
		$data['eq_details'] = $this->Food_model->get_eq_details($food_id);

		$this->init_sys->content($data);
	}

	public function edit_food() 
	{
		$food_id = $this->uri->segment(3);
		$data['content']='food/edit-food';
		
		$data['food_details'] = $this->Food_model->get_food_details($food_id);
		$data['mat_details'] = $this->Food_model->get_mat_details($food_id);
		$data['eq_details'] = $this->Food_model->get_eq_details($food_id);
		$data['material_list'] = $this->Food_model->get_mate_group();
		$data['man_list'] = $this->Food_model->get_man();
		$data['mat_list'] = $this->Food_model->get_mat();

		$this->init_sys->content($data);
	}

	public function delete_food()
	{
		$food_id = $this->uri->segment(3);
		$timestam = date('Y-m-d H:i:s');
		
		$this->Food_model->delete_food($food_id);
		$this->session->set_flashdata('alert', 2);

		redirect('food/food_page');
	}

	public function set_food_menu()
	{
		$timestam = date('Y-m-d H:i:s');
		$last_id = $this->Food_model->set_food_menu();
		$this->session->set_flashdata('alert', 1);

		redirect('food/add_food_details/'.$last_id);
	}

	public function get_food_menu($qstr ='') 
	{
		$result = $this->Food_model->get_food_menu($qstr);
		return $result;
	}

	public function update_food_details()
	{
		$food_id = $this->uri->segment(3);
		$timestam = date('Y-m-d H:i:s');
		
		$this->Food_model->update_food_details($food_id);
		$this->session->set_flashdata('alert', 1);

		redirect('food/food_details/'.$food_id);
	}

	public function delete_mat_detail()
	{
		$food_id = $this->uri->segment(3);
		$mat_id = $this->uri->segment(4);			
		$timestam = date('Y-m-d H:i:s');

		$this->Food_model->delete_mat_detail($food_id,$mat_id);
		$this->session->set_flashdata('alert', 2);

		redirect('food/edit_food/'.$food_id);
	}

	public function delete_eq_detail()
	{
		$food_id = $this->uri->segment(3);
		$eq_id = $this->uri->segment(4);

		$timestam = date('Y-m-d H:i:s');
		
		$this->Food_model->delete_eq_detail($food_id,$eq_id);
		$this->session->set_flashdata('alert', 2);

		redirect('food/edit_food/'.$food_id);
	}

	public function set_mat_detail()
	{
		$food_id = $this->uri->segment(3);
		$mat_id = $this->uri->segment(4);

		$timestam = date('Y-m-d H:i:s');
		
		$this->Food_model->set_mat_detail($food_id,$mat_id,$timestam);
		$this->session->set_flashdata('alert', 1);

		redirect('food/edit_food/'.$food_id);
	}

	public function set_mat_detail2()
	{
		$food_id = $this->uri->segment(3);
		$mat_id = $this->uri->segment(4);
		$timestam = date('Y-m-d H:i:s');
		
		$this->Food_model->set_mat_detail($food_id,$mat_id);
		$this->session->set_flashdata('alert', 1);

		redirect('food/add_food_details/'.$food_id);
	}

	public function set_eq_detail()
	{
		$food_id = $this->uri->segment(3);
		$eq_id = $this->uri->segment(4);
		$timestam = date('Y-m-d H:i:s');
		
		$this->Food_model->set_eq_detail($food_id,$eq_id);
		$this->session->set_flashdata('alert', 1);

		redirect('food/edit_food/'.$food_id);
	}

	public function set_eq_detail2()
	{
		$food_id = $this->uri->segment(3);
		$eq_id = $this->uri->segment(4);
		$timestam = date('Y-m-d H:i:s');
		
		$this->Food_model->set_eq_detail($food_id,$eq_id);
		$this->session->set_flashdata('alert', 1);
		
		redirect('food/add_food_details/'.$food_id);
	}

}
//end class
?>
