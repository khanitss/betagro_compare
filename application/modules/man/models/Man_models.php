<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Man_models extends CI_Model{
		
		public function add_man($input){
			// $this->db->insert('equipment',$input);
			{
		$this->load->module('upload/Myupload');
        $prop = array(
                    'upload_path'   =>'./images_compare/',
                    'allowed_types' =>'jpg|jpeg|png',
                    'txt_upload'    =>'upload_file',
                    'txt_unlink'    =>$this->input->post('file_old'),
                    'default_file'  =>'no-image.png'
                );
        $eq_pic = $this->myupload->upload_file($prop);
        $timestam = date('Y-m-d H:i:s');
        $input = array(
        	'eq_name' 		=> $this->input->post('eq_name'),
            'eq_cost' => $this->input->post('eq_cost'),
			'eq_status' => '1',
            'created'       => $timestam,
            'lastupdate'    => $timestam,
            'eq_pic'       => $eq_pic

            );
		$this->db->insert('equipment',$input);
			}
		}
	
		public function get_man(){
			$result = $this->db->get('equipment')->result_array();
			return $result;
		// 	$result = $this->db->select('*')
		// ->where('eq_id',$id)
		// ->from('equipment')
		// ->get()
		// ->result_array();
		// return $result;
		}


		public function delete_man($id){
			$this->db->delete('equipment', array('eq_id' => $id));
 
		 }
}