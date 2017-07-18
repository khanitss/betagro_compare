<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MX_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->module('init_sys/Init_sys');
    }

    public function home() {
        $data['alert'] = $this->session->flashdata('alert');
        $data['content'] ='dashboard/dashboard';
        $data['food_list'] = $this->get_food_menu();
        $data['material_list'] = $this->get_raw_material();
        // echo print_r($data['material_list']);
        // exit();
        $this->init_sys->content($data);
    }

    public function get_food_menu(){
        $result = $this->db->get('food')->result_array();
        return $result;
    }

    public function get_raw_material(){
        $result = $this->db->get('material')->result_array();
        return $result;
    }

}//end class
