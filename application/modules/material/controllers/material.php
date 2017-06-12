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
<<<<<<< HEAD
=======
    public function material_d_page() {
        $data['content']='material/add-raw-material-page';
        $this->init_sys->content($data);
    }
    public function edit_page() {
        $data['content']='material/edit-material';
        $this->init_sys->content($data);
    }

>>>>>>> 532da36c09b1ee858c2c5eb05aaf44f755bfc97e

}//end class
