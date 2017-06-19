<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Material extends MX_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->module('init_sys/Init_sys');
        
        $this->load->model('Material_models');

    }

    public function material_page() {
        
        $data['content']='material/group';
        $data['material_list'] = $this->get_mate_group();
        $cat_id = $this->uri->segment(3);
        $data['raw_detail'] = $this->Material_models->get_group_material($cat_id);
        $this->init_sys->content($data);
    }

    public function material_d_page() 
    {
        $cat_id = $this->uri->segment(3);
        $qstr_sess=array('select_items_one'=>$cat_id);
        $this->session->set_userdata($qstr_sess);
        $qstr_cate=array('cat_id'=>$cat_id);
        $data['material_detail'] = $this->Material_models->get_raw_material($qstr_cate);
        $data['content']='material/raw-material-page';
        $this->init_sys->content($data);
    }

    //edit page
    public function edit_page() {
        $mat_id = $this->uri->segment(3);
        $data['content']='material/edit-material';
        $data['material_detail'] = $this->Material_models->get_material_details($mat_id);
        $this->init_sys->content($data);
    }
    
    

    //page show
    public function raw_page() 
    {
        $data['content']='material/add-material';
        $this->init_sys->content($data);
    }

    public function material_group_page() {
        $data['content']='material/add-group';
        $this->init_sys->content($data);
    }

    //Add Group
    public function add_mate_group(){
        $cat_id = $this->session->userdata("cat_id");
        $data['material_list'] = $this->get_mate_group();
        $this->load->model('Material_models');
        $timestam = date('Y-m-d H:i:s');
        $this->Material_models->add_mate_group();
        //$this->session->set_flashdata('alert', true);
        redirect('material/material_page/'.$cat_id);

    }
    public function get_mate_group (){
        $this->load->model('Material_models');
        $result = $this->Material_models->get_mate_group();
        //echo '<pre>', print_r($result);
        return $result;
        
    }

    //Add Material
    public function add_raw_material()
    {
        $mat_id = $this->session->userdata('select_items_one');
        $this->Material_models->add_raw_material();
        redirect('material/material_d_page/'.$mat_id);

    }

    public function get_raw_material (){
        $this->load->model('Material_models');
        $result = $this->Material_models->get_raw_material();
        //echo '<pre>', print_r($result);
        return $result;
        
    }

    //Update form edit
    public function update_material(){
        $timestam = date('Y-m-d H:i:s');
        $cat_id = $this->session->userdata('select_items_one');
        $mat_id = $this->uri->segment(3);
        $this->Material_models->update_material($mat_id);
        redirect('material/material_d_page/'.$cat_id);
    

    }

    //delete 
     public function delete_material(){
        $this->load->model('Material_models');
        $cat_id = $this->session->userdata('select_items_one');
        $mat_id = $this->uri->segment(3);
        $this->Material_models->delete_material($mat_id);
         redirect('material/material_d_page/'.$cat_id);
    }
}//end class

