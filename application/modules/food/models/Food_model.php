<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Food_model extends CI_Model{

    public function set_food_menu($input){
        $this->db->insert('food',$input);
    }

}
