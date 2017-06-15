<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Material extends MX_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->module('init_sys/Init_sys');
    }

    public function material_page() {
        $data['content']='material/group';
        $data['material_list'] = $this->get_mate_group();
        $this->init_sys->content($data);
    }
    
    public function material_d_page() {
        $data['content']='material/raw-material-page';
        $data['raw_material_list'] = $this->get_raw_material();
        $this->init_sys->content($data);
    }
    public function edit_page() {
        $this->load->model('Material_models');
        $data['content']='material/edit-material';
        $id = $this->uri->segment(3);
        $data['raw_detail'] = $this->Material_models->get_raw_material($id);
        $this->init_sys->content($data);
    }
    public function raw_page() {
        $data['content']='material/add-raw-material';
        $this->init_sys->content($data);
    }
    public function material_group_page() {
        $data['content']='material/add-group';
        $this->init_sys->content($data);
    }
    public function add_mate_group(){
        $timestam = date('Y-m-d H:i:s');

        $this->load->model('Material_models');
        $input = array('cat_name' => $this->input->post('cat_name'),
            'cat_type' => '0',
            'cat_status' => '1',
            'created'       => $timestam,
            'lastupdate'    => $timestam,

            );
        $this->Material_models->add_mate_group($input);
        //$this->session->set_flashdata('alert', true);
        redirect('material/material_page');

    }
    public function get_mate_group (){
        $this->load->model('Material_models');
        $result = $this->Material_models->get_mate_group();
        //echo '<pre>', print_r($result);
        return $result;
        
    }
    public function add_raw_material(){
        $this->load->module('upload/myupload');
        $prop = array(
                    'upload_path'   =>'./images_compare/',
                    'allowed_types' =>'jpg|jpeg|png',
                    'txt_upload'    =>'upload_file',
                    'txt_unlink'    =>$this->input->post('file_old'),
                    'default_file'  =>'default.jpg',
                );

    $file_name = $this->myupload->upload_file($prop);
        $timestam = date('Y-m-d H:i:s');    
        $this->load->model('Material_models');
        $input = array('mat_name' => $this->input->post('mat_name'),
            'mat_quantity' => $this->input->post('mat_quantity'),
            'mat_unit' => $this->input->post('mat_unit'),
            'mat_cost' => $this->input->post('mat_cost'),
            'mat_type' => '0',
            'mat_status' => '1',
            'created'       => $timestam,
            'lastupdate'    => $timestam,

            );
        $this->Material_models->add_raw_material($input);
        //$this->session->set_flashdata('alert', true);
        redirect('material/material_d_page');

    }
    public function get_raw_material (){
        $this->load->model('Material_models');
        $result = $this->Material_models->get_raw_material();
        //echo '<pre>', print_r($result);
        return $result;
        
    }

    public function update_material(){
        //$data['show_mat'] = $this->get_raw_material();
        $this->load->model('Meterial_models');
        $timestam = date('Y-m-d H:i:s');
        $id = $this->uri->segment(3);
        $this->Material_models->update_material();
        redirect('material/material_d_page');
}
}//end class

