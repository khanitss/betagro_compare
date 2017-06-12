<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Material extends MX_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->module('init_sys/Init_sys');
    }

    public function material_page() {
        $data['content']='material/add-raw-group';
        $this->init_sys->content($data);
    }
    
    public function material_d_page() {
        $data['content']='material/add-raw-material-page';
        $this->init_sys->content($data);
    }
    public function edit_page() {
        $data['content']='material/edit-material';
        $this->init_sys->content($data);
    }
    public function raw_page() {
        $data['content']='material/raw-material';
        $this->init_sys->content($data);
    }
    public function material_group_page() {
        $data['content']='material/material-group';
        $this->init_sys->content($data);
    }

}//end class
