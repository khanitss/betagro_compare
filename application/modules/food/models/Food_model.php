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

    public function get_food_details($id){
        // $result = $this->db->get('food')->result_array();
        $result = $this->db->select($items)
                        ->from('food')
                        ->where($id)
                        ->get()
                        ->result_array();
        return $result;
    }

}
