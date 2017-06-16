<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Product_models extends CI_Model{
		
		public function add_product($input){
			$this->load->module('upload/Myupload');
        	$prop = array(
                    'upload_path'   =>'./images_compare/',
                    'allowed_types' =>'jpg|jpeg|png',
                    'txt_upload'    =>'upload_file',
                    'txt_unlink'    =>$this->input->post('file_old'),
                    'default_file'  =>'no-image.png'
                );
        	$mat_pic = $this->myupload->upload_file($prop);
			$timestam = date('Y-m-d H:i:s');
			$input = array(	'mat_name' => $this->input->post('mat_name'),
							'mat_quantity' => $this->input->post('mat_quantity'),
							'mat_cost' => $this->input->post('mat_cost'),
							'mat_unit' => $this->input->post('mat_unit'),
							'mat_type' => '1',
							'mat_status' => '1',
							'created'       => $timestam,
							'lastupdate'    => $timestam,
							'mat_pic'       => $mat_pic
						);     
		$this->db->insert('material',$input);
		}
	
		public function get_product_details($mat_id){
			$result = $this->db->select('*')
			->where('mat_id',$mat_id)
			->from('material')
			->get()
			->result_array();
			return $result;
		}

		public function get_product(){
			$result = $this->db->get('material')->result_array();
			return $result;
		}

		public function delete_product($id){
			$this->db->delete('material', array('mat_id' => $id));
		}

		public function update_product_details($mat_id){
			$input = array(	'mat_name' 		=> $this->input->post('mat_name'),
							'mat_quantity' 	=> $this->input->post('mat_quantity'),
							'mat_cost' 		=> $this->input->post('mat_cost'),
							'mat_unit' 		=> $this->input->post('mat_unit'),
							'lastupdate'	=> $timestam
					);
        	$this->db->where('mat_id',$mat_id);
        	$this->db->update('material',$input);
		}

}