<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Food_model extends CI_Model{

    public function get_food_menu(){
        $result = $this->db->get('food')->result_array();
        return $result;
    }

    public function set_food_menu(){
        $this->load->module('upload/Myupload');
        $prop = array(
    				'upload_path'	=>'./images_compare/',
    				'allowed_types'	=>'jpg|jpeg|png',
    				'txt_upload'	=>'upload_file',
    				'txt_unlink'	=>$this->input->post('file_old'),
    				'default_file'	=>'no-image.png'
                );
        $food_pic = $this->myupload->upload_file($prop);

        $input = array(	'food_name' 	=> $this->input->post('food_name'),
						'food_type'		=> $this->input->post('food_type'),
						'food_for'		=> $this->input->post('food_for'),
						'food_unit'		=> $this->input->post('food_unit'),
						'food_time'		=> $this->input->post('food_time'),
						'food_status'	=> '1',
                        'food_pic'      => $food_pic,
						'created' 		=> $timestam,
						'lastupdate'	=> $timestam
                    );
        $this->db->insert('food',$input);
    }

    public function get_food_details($food_id){
        $result = $this->db->select('*')
        ->where('food_id',$food_id)
        ->from('food')
        ->get()
        ->result_array();
        return $result;
    }

    public function get_man(){
        $result = $this->db->get('equipment')->result_array();
        return $result;
    }

    public function get_mat(){
        $result = $this->db->get('material')->result_array();
        return $result;
    }

    public function update_food_details($food_id){
        $input = array(	'food_name'		=> $this->input->post('food_name'),
                        'food_for'		=> $this->input->post('food_for'),
						'food_unit'		=> $this->input->post('food_unit'),
						'food_time'		=> $this->input->post('food_time'),
						'lastupdate'	=> $timestam
					);
        $this->db->where('food_id',$food_id);
        $this->db->update('food',$input);
    }

    public function set_food_detail($food_id){

    }

    public function delete_food_detail($food_id){

    }
}
