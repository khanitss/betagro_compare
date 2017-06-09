<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MX_Controller {

  public function __construct() {
    parent::__construct();
    $this->load->module('init_sys/Init_sys');
  }

  public function index() {
    $data['content'] ='dashboard/dashboard';
    $this->init_sys->content($data);
  }

}//end class