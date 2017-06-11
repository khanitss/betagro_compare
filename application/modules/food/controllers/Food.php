<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Food extends MX_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->module('init_sys/Init_sys');
	}

	public function go_index() {
		$data['content']='dashboard/dashboard';
		$this->init_sys->content($data);
	}

	public function food_page() {
		$data['content']='food/food-page';
		$this->init_sys->content($data);
	}

	public function add_food() {
		$data['content']='food/add-food';
		$this->init_sys->content($data);
	}

	public function food_details() {
		$data['content']='food/food-details';
		$this->init_sys->content($data);
	}

}//end class
