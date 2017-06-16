<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Compare extends MX_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->module('init_sys/Init_sys');
		$this->load->model('compare/Compare_model');
	}

	public function choose_menu1_page()
	{
		$qstr=array('food_type'=>0);
		$results = $this->Compare_model->get_food_list($qstr);
		$data['food_standard_list'] = $results;

		$standard_id=$this->session->userdata('select_items_one');
		$data['standard'] = $this->Compare_model->get_food_detail($standard_id);

		$data['content']='compare/choose-menu';
		$this->init_sys->content($data);
	}

	public function choose_menu2_page()
	{
		$this->set_standard_food_id();
		$qstr1=array('food_type'=>1);
		$results = $this->Compare_model->get_food_list($qstr1);
		$data['food_betagro_list'] = $results;

		$standard_id=$this->session->userdata('select_items_one');
		$data['betagro'] = $this->Compare_model->get_food_detail($betagro_id);

		$data['content']='compare/choose-menu-betagro';
		$this->init_sys->content($data);
	}

	private function set_standard_food_id()
	{
		$id=($this->uri->segment(3)!=''? $this->uri->segment(3) : 0);
		$qstr=array('select_items_one'=>$id);
		$this->session->set_userdata($qstr);
	}

	private function set_betagro_food_id()
	{
		$id=($this->uri->segment(3)!=''? $this->uri->segment(3) : 0);
		$qstr=array('select_items_one'=>$id);
		$this->session->set_userdata($qstr);
	}

	public function compare_page() {
		$betagro_id=($this->uri->segment(3)!=''? $this->uri->segment(3) : 0);
		$standard_id=$this->session->userdata('select_items_one');

		$data['standard'] = $this->Compare_model->get_food_detail($standard_id);
		$data['betagro']= $this->Compare_model->get_food_detail($betagro_id);

		// echo '<pre>', print_r($data);exit();
		$data['content']='compare/compare';
		$this->init_sys->content($data);
	}


}//end class
