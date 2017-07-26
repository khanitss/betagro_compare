<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Material extends MX_Controller {

    public function __construct() {
        // parent::__construct();
        $this->load->module('init_sys/Init_sys');
        $this->load->model('Material_models');
    }

    public function material_page()
    {
        // $cat_id = $this->uri->segment(3);
        // $data['raw_detail'] = $this->Material_models->get_group_material($cat_id);
        $data['txt_search_name'] = $this->input->post('txt_search_name');

        $material_list = $this->get_mate_group($data['txt_search_name']);
        $data['material_list'] = array_filter($material_list, function($value) {
            if ($value['cat_type'] == 1) {
                return $value;
            }
        });

        // echo '<pre>', print_r($data['material_list']);exit();

        $data['content']='material/group';
        
        $this->init_sys->content($data);
    }

    public function material_d_page()
    {
        $data['txt_search_name'] = $this->input->post('txt_search_name');
        $data['cat_id'] = ($this->uri->segment(3) !=''? $this->uri->segment(3) : $this->input->post('cat_id'));
        $qstr_sess=array('select_items_one'=>$data['cat_id']);
        $this->session->set_userdata($qstr_sess);

        $qstr_cate=array('cat_id'=>$data['cat_id']);
        $data['material_detail'] = $this->Material_models->get_raw_material($qstr_cate, $data['txt_search_name']);
        // echo '<pre>', print_r($data['material_detail']);exit();
        $data['content']='material/raw-material-page';

        $this->init_sys->content($data);
    }

    //edit page
    public function edit_page()
    {
        $mat_id = $this->uri->segment(4);
        $data['material_detail'] = $this->Material_models->get_material_details($mat_id);
        $data['content']='material/edit-material';
        
        $this->init_sys->content($data);
    }

    //page show
    public function raw_page()
    {
        $data['content']='material/add-material';
        $this->init_sys->content($data);
    }

    public function material_group_page()
    {
        $data['content']='material/add-group';
        $this->init_sys->content($data);
    }

    //Add Group
    public function add_mate_group()
    {
        $cat_id = $this->session->userdata("cat_id");
        $timestam = date('Y-m-d H:i:s');
        
        // $data['material_list'] = $this->get_mate_group();
        $this->Material_models->add_mate_group();
        $this->session->set_flashdata('alert', 1);

        redirect('material/material_page/'.$cat_id);
    }

    public function get_mate_group($qstr ='')
    {        
        $result = $this->Material_models->get_mate_group($qstr);
        return $result;
    }

    //Add Material
    public function add_raw_material()
    {
        $mat_id = $this->session->userdata('select_items_one');
        $this->Material_models->add_raw_material();
        $this->session->set_flashdata('alert', 1);

        redirect('material/material_d_page/'.$mat_id);
    }

    public function get_raw_material()
    {
        $this->load->model('Material_models');
        $result = $this->Material_models->get_raw_material();
        return $result;
    }

    //Update form edit
    public function update_material()
    {
        $cat_id = $this->session->userdata('select_items_one');
        $mat_id = $this->uri->segment(3);
        $timestam = date('Y-m-d H:i:s');
        
        $this->Material_models->update_material($mat_id);
        $this->session->set_flashdata('alert', 1);

        redirect('material/material_d_page/'.$cat_id);
    }

    //delete
    public function delete_material()
    {
        $cat_id = $this->session->userdata('select_items_one');
        $mat_id = $this->uri->segment(3);

        $this->Material_models->delete_material($mat_id);
        $this->session->set_flashdata('alert', 2);
        
        redirect('material/material_d_page/'.$cat_id);
    }
}//end class
