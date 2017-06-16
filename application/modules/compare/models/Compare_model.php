<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Compare_model extends CI_Model {

  public function get_food_list($qstr)
  {
    $items='*';
    $results = $this->db->select($items)
                    ->from('food')
                    ->where($qstr)
                    ->get()
                    ->result_array();

    return $results;
  }
  public function get_standard_food_detail($standard_id)
  {
    $items='*';
    $results = $this->db->select($items)
                    ->from('food')
                    ->where('food_id',$standard_id)
                    ->get()
                    ->result_array();

    return $results;
  }
  public function get_betagro_food_detail($betagro_id)
  {
    $items='*';
    $results = $this->db->select($items)
                    ->from('food')
                    ->where('food_id',$betagro_id)
                    ->get()
                    ->result_array();

    return $results;
  }
  public function get_standard_mat_details($standard_id){
      $result = $this->db->select('*')
              ->from('material')
              ->join('map_food', 'map_food.mat_id = material.mat_id')
              ->where('map_food.food_id',$standard_id)
              ->get()
              ->result_array();
      return $result;
  }
  public function get_betagro_mat_details($betagro_id){
      $result = $this->db->select('*')
              ->from('material')
              ->join('map_food', 'map_food.mat_id = material.mat_id')
              ->where('map_food.food_id',$betagro_id)
              ->get()
              ->result_array();
      return $result;
  }

  public function get_standard_eq_details($standard_id){
      $result = $this->db->select('*')
              ->from('equipment')
              ->join('map_food', 'map_food.eq_id = equipment.eq_id')
              ->where('map_food.food_id',$standard_id)
              ->get()
              ->result_array();
      return $result;
  }
  public function get_betagro_eq_details($betagro_id){
      $result = $this->db->select('*')
              ->from('equipment')
              ->join('map_food', 'map_food.eq_id = equipment.eq_id')
              ->where('map_food.food_id',$betagro_id)
              ->get()
              ->result_array();
      return $result;
  }
} // end class
