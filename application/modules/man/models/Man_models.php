<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Man_models extends CI_Model{
		
		public function add_man($input){
			$this->db->insert('equipment',$input);
		}
	
		public function get_man(){
			$result = $this->db->get('equipment')->result_array();
			return $result;
		}


		public function delete_man($id){
			$this->db->delete('equipment', array('eq_id' => $id));
 
		 }
}