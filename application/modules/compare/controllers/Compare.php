<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Compare extends MX_Controller {

	public function __construct() {
    	parent::__construct();
        $this->load->module('init_sys/Init_sys');
        // $this->load->model('vendor/Vendor_model');
    }

	public function go_index() {
		$data['content']='dashboard/dashboard';
		$this->init_sys->content($data);
	}

	public function choose_menu() {
		$data['content']='compare/choose-menu';
		$this->init_sys->content($data);
	}


}//end class
