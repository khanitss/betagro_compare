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
    $results2 =$this->db->get('material')->result_array();
    $results3 =$this->db->get('equipment')->result_array();

    return $results;
    return $results2;
    return $results3;
  }
} // end class
