<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Material_models extends CI_Model{

	public function add_mate_group(){
		$this->load->module('upload/Myupload');
        $prop = array(
                    'upload_path'   =>'./images_compare/',
                    'allowed_types' =>'jpg|jpeg|png',
                    'txt_upload'    =>'upload_file',
                    'txt_unlink'    =>$this->input->post('file_old'),
                    'default_file'  =>'no-image.png'
                );
        $cat_pic = $this->myupload->upload_file($prop);
        $timestam = date('Y-m-d H:i:s');
        $input = array(
        	'cat_name' 		=> $this->input->post('cat_name'),
            'cat_type'      => '0',
            'cat_status'    => '1',
            'created'       => $timestam,
            'lastupdate'    => $timestam,
            'cat_pic'       => $cat_pic

            );
		$this->db->insert('cat_material',$input);
	}
	
	public function get_mate_group(){
		$result = $this->db->get('cat_material')->result_array();
		return $result;
	}

	public function get_group_material($cat_id){
		$result = $this->db->select('*')
		->from('cat_material')
		->where('cat_id',$cat_id)
		->get()
		->result_array();
		return $result;
	}

		// public function delete_material($id){
		//  	$this->db->delete('material', array('mat_id' => $id));

		// }

	public function add_raw_material()
	{
		$this->load->module('upload/Myupload');
        $prop = array(
                    'upload_path'   =>'./images_compare/',
                    'allowed_types' =>'jpg|jpeg|png',
                    'txt_upload'    =>'upload_file',
                    'txt_unlink'    =>$this->input->post('file_old'),
                    'default_file'  =>'no-image.png'
                );

        $mat_pic = $this->myupload->upload_file($prop);
        $cate_id = $this->session->userdata('select_items_one');

        $timestamp = date('Y-m-d H:i:s');    
        $this->load->model('Material_models');
        $input = array(
        	'mat_name' 	=> $this->input->post('mat_name'),
            'mat_quantity' 			=> $this->input->post('mat_quantity'),
            'mat_unit' 				=> $this->input->post('mat_unit'),
            'mat_cost' 				=> $this->input->post('mat_cost'),
            'mat_type' 				=> '0',
            'mat_status' 			=> '1',
            'mat_pic'   			=> $mat_pic,
            'mat_id'				=> $mat_id,
            'cat_id'				=> $cate_id,
            
            'created'       		=> $timestamp,
            'lastupdate'    		=> $timestamp,
        );

		$this->db->insert('material',$input);
	}

	public function get_raw_material($qstr='')
	{
		if (!empty($qstr)) {
			$this->db->where($qstr);
		}

		$result = $this->db->get('material')->result_array();
		return $result;
	}

	public function get_material_details($mat_id){
			$result = $this->db->select('*')
			->where('mat_id',$mat_id)
			->from('material')
			->get()
			->result_array();
			return $result;
		}
	public function update_material($mat_id){
			$this->load->module('upload/Myupload');
        $prop = array(
                    'upload_path'	=>'./images_compare/',
                    'allowed_types'	=>'jpg|jpeg|png',
                    'txt_upload'	=>'upload_file',
                    'txt_unlink'	=>$this->input->post('file_old'),
                    'default_file'	=>'no-image.png'
                );
        $mat_pic = $this->myupload->upload_file($prop);

			$input = array(	'mat_name' 		=> $this->input->post('mat_name'),
							'mat_quantity' 	=> $this->input->post('mat_quantity'),
							'mat_cost' 		=> $this->input->post('mat_cost'),
							'mat_unit' 		=> $this->input->post('mat_unit'),
							'mat_pic'		=> $mat_pic,
							'cat_id'		=> $cat_id,
							'mat_id'		=> $mat_id,
							'lastupdate'	=> $timestam
					);
			if ($cat_id==0){
				unset($input['cat_id']);
			}

			if($input['mat_pic'] == 'no-image.png'){
                unset($input['mat_pic']);
            }
            if($input['mat_name'] == null){
                unset($input['mat_name']);
             }

            if($input['mat_quantity'] == null){
                unset($input['mat_quantity']);
             }

            if($input['mat_unit'] == null){
                unset($input['mat_unit']);
             }

             if($input['mat_cost'] == null){
                unset($input['mat_cost']);
             }


        	$this->db->where('mat_id',$mat_id);
        	$this->db->update('material',$input);
		}

	public function delete_material($mat_id){
			$this->db->delete('material', array('mat_id' => $mat_id));
		}

}