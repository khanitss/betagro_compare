<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Init_sys extends MX_Controller 
{
	public $init = array(
							'initbody'			=>'init_sys/template',
							'none-timestamp'	=>'0000-00-00 00:00:00',
						);

	public function sess_query()
	{
		$sess_query=$this->session->flashdata('sess_query');
		return $sess_query;
	}

	public function content($data='compare/choose-menu')
	{
		$content=$this->load->view($this->init['initbody'], $data);
		return $content;
	}

	public function convert_json($node='')
	{
		$node=($node !='')? $node : $this->node;
		$json['rows']=count($node);
		$json['obj']=json_encode($node);
		return $json;
	}

}//end class