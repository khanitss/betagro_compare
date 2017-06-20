<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends MX_Controller {


    public function __construct() {
        parent::__construct();
        $this->load->module('init_sys/Init_sys');
        $this->load->model('Product_models');

    }

    public function material_page()
    {
        $data['alert'] = $this->session->flashdata('alert');
        $data['content']='product/group';
        $data['alert'] = $this->session->flashdata('alert');
        $data['material_list'] = $this->get_mate_group();
        $cat_id = $this->uri->segment(3);
        $data['raw_detail'] = $this->Product_models->get_group_material($cat_id);
        $this->init_sys->content($data);
    }

    public function material_d_page()
    {
        $data['alert'] = $this->session->flashdata('alert');
        $cat_id = $this->uri->segment(3);
        $data['alert'] = $this->session->flashdata('alert');
        $qstr_sess=array('select_items_one'=>$cat_id);
        $this->session->set_userdata($qstr_sess);
        $qstr_cate=array('cat_id'=>$cat_id);
        $data['material_detail'] = $this->Product_models->get_raw_material($qstr_cate);
        $data['content']='product/raw-material-page';
        $this->init_sys->content($data);
    }

    //edit page
    public function edit_page()
    {
        $data['alert'] = $this->session->flashdata('alert');
        $mat_id = $this->uri->segment(4);
        $data['content']='product/edit-material';
        $data['material_detail'] = $this->Product_models->get_material_details($mat_id);
        $this->init_sys->content($data);
    }

    //page show
    public function raw_page()
    {
        $data['alert'] = $this->session->flashdata('alert');
        $data['content']='product/add-material';
        $this->init_sys->content($data);
    }

    public function material_group_page()
    {
        $data['alert'] = $this->session->flashdata('alert');
        $data['content']='product/add-group';
        $this->init_sys->content($data);
    }

    //Add Group
    public function add_mate_group()
    {
        $cat_id = $this->session->userdata("cat_id");
        $data['material_list'] = $this->get_mate_group();
        $this->load->model('Product_models');
        $timestam = date('Y-m-d H:i:s');
        $this->Product_models->add_mate_group();
        $this->session->set_flashdata('alert', 1);
        redirect('product/material_page/'.$cat_id);
    }
    public function get_mate_group ()
    {
        $this->load->model('Product_models');
        $result = $this->Product_models->get_mate_group();
        //echo '<pre>', print_r($result);
        return $result;
    }

    //Add Material
    public function add_raw_material()
    {
        $mat_id = $this->session->userdata('select_items_one');
        $this->Product_models->add_raw_material();
        $this->session->set_flashdata('alert', 1);
        redirect('product/material_d_page/'.$mat_id);
    }

    public function get_raw_material ()
    {
        $this->load->model('Product_models');
        $result = $this->Product_models->get_raw_material();
        //echo '<pre>', print_r($result);
        return $result;

    }

    //Update form edit
    public function update_material()
    {
        $timestam = date('Y-m-d H:i:s');
        $cat_id = $this->session->userdata('select_items_one');
        $mat_id = $this->uri->segment(3);
        $this->Product_models->update_material($mat_id);
        $this->session->set_flashdata('alert', 1);
        redirect('product/material_d_page/'.$cat_id);
    }

    //delete
    public function delete_material()
    {
        $this->load->model('Product_models');
        $cat_id = $this->session->userdata('select_items_one');
        $mat_id = $this->uri->segment(3);
        $this->Product_models->delete_material($mat_id);
        $this->session->set_flashdata('alert', 2);
        redirect('product/material_d_page/'.$cat_id);

    }
}//end class
