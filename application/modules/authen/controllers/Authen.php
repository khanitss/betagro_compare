<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Authen extends MX_Controller {

	public function __construct() {
    	parent::__construct();
        /*$this->load->model('user/User_model');
        $this->load->model('vendor/Vendor_model');
        $this->load->library("Main_libs");*/
    }

	public function index() {
		$this->load->view('authen');
	}

	public function login() {
		redirect('dashboard/home');
		// echo "Yeh!!";
	}

	// public function logout() {
	// 	$this->session->sess_destroy();
	// 	// $this->main_libs->redirect_page(0);
	// 	$this->load->view('authen');
	// }

}//end class
