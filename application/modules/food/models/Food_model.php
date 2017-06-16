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
        return $this->db->insert_id();
    }

    public function get_food_details($food_id){
        $result = $this->db->select('*')
        ->where('food_id',$food_id)
        ->from('food')
        ->get()
        ->result_array();
        return $result;
    }

    public function update_food_details($food_id){
        $this->load->module('upload/Myupload');
        $prop = array(
                    'upload_path'	=>'./images_compare/',
                    'allowed_types'	=>'jpg|jpeg|png',
                    'txt_upload'	=>'upload_file',
                    'txt_unlink'	=>$this->input->post('file_old'),
                    'default_file'	=>'no-image.png'
                );
        $food_pic = $this->myupload->upload_file($prop);

        $input = array(	'food_name'		=> $this->input->post('food_name'),
                        'food_for'		=> $this->input->post('food_for'),
                        'food_unit'		=> $this->input->post('food_unit'),
                        'food_time'		=> $this->input->post('food_time'),
                        'food_pic'      => $food_pic,
                        'lastupdate'	=> $timestam
                    );
                    if($input['food_pic'] == 'no-image.png'){
                        unset($input['food_pic']);
                    }
                    if($input['food_name'] == null){
                        unset($input['food_name']);
                    }
                    if($input['food_for'] == null){
                        unset($input['food_for']);
                    }
                    if($input['food_unit'] == null){
                        unset($input['food_unit']);
                    }
                    if($input['food_time'] == null){
                        unset($input['food_time']);
                    }
        $this->db->where('food_id',$food_id);
        $this->db->update('food',$input);
    }

    public function get_man(){
        $result = $this->db->get('equipment')->result_array();
        return $result;
    }

    public function get_mat(){
        $result = $this->db->get('material')->result_array();
        return $result;
    }

    public function set_mat_detail($food_id,$mat_id){
        $input = array(  'food_id'      => $food_id,
                         'mat_id'       => $mat_id,
                         'lastupdate'	=> $timestam
                     );
        $this->db->insert('map_food',$input);
    }

    public function set_eq_detail($food_id,$eq_id){
        $input = array(  'food_id'       => $food_id,
                         'eq_id'         => $eq_id,
                         'lastupdate'	=> $timestam
                     );
        $this->db->insert('map_food',$input);
    }

    public function delete_mat_detail($food_id,$mat_id){
        $input = array('mat_id'=> $mat_id);
        $this->db->where('map_food.food_id',$food_id);
        $this->db->delete('map_food',$input);

        // update time
        $input = array('lastupdate'=> $timestam);
        $this->db->update('map_food',$input);
    }

    public function delete_eq_detail($food_id,$eq_id){
        $input = array('eq_id' => $eq_id);
        $this->db->where('map_food.food_id',$food_id);
        $this->db->delete('map_food',$input);

        // update time
        $input = array('lastupdate'=> $timestam);
        $this->db->update('map_food',$input);
    }

    public function get_mat_details($food_id){
        $result = $this->db->select('*')
                ->from('material')
                ->join('map_food', 'map_food.mat_id = material.mat_id')
                ->where('map_food.food_id',$food_id)
                ->get()
                ->result_array();
        return $result;
    }

    public function get_eq_details($food_id){
        $result = $this->db->select('*')
                ->from('equipment')
                ->join('map_food', 'map_food.eq_id = equipment.eq_id')
                ->where('map_food.food_id',$food_id)
                ->get()
                ->result_array();
        return $result;
    }

}
