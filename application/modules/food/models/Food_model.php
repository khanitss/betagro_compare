<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Food_model extends CI_Model{

    public function get_food_menu(){
        $result = $this->db->get('food')->result_array();
        return $result;
    }

    public function set_food_menu($input){
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

}
