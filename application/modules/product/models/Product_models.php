<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Product_models extends CI_Model{
		
		public function add_product($input){
			$this->db->insert('material',$input);
		}
	
		public function get_product(){
			$result = $this->db->get('material')->result_array();
			return $result;
		}

		public function delete_product($id){
			$this->db->delete('material', array('id' => $id));
		}


}