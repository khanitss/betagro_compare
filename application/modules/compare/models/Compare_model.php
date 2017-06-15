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
  public function get_food_detail($food_id)
  {
    $items='*';
    $results = $this->db->select($items)
                    ->from('food')
                    ->where('food_id',$food_id)
                    ->get()
                    ->result_array();

    return $results;
  }
} // end class