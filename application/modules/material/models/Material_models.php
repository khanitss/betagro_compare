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

		// public function delete_material($id){
		//  	$this->db->delete('material', array('mat_id' => $id));

		// }

	public function add_raw_material($input){
		$this->db->insert('material',$input);
	}

	public function get_raw_material($id){
		$result = $this->db->select('*')
		->where('mat_id',$id)
		->from('material')
		->get()
		->result_array();
		return $result;
	}

	public function update_material($id){
		$data = array(
			'mat_name' => $this->input->post('mat_name')
			);
		$this->db->where('mat_id', $id);
		$this->db->update('material', $data);


	}

}
