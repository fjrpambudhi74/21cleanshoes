<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_slider extends CI_Model{
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();	
	}
	
	function tampilslider()
	{
		$this->db->select('*');
		$this->db->from('slider');
	
		$query = $this->db->get();
		return $query->result();
	}

	function update_data($data){
	
		$update = $this->db->where('id', $data['id'])
							->set($data)
							->update('slider');
		 return $update;
	}
}
