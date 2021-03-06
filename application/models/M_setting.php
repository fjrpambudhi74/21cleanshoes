<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_setting extends CI_Model{
	
	function __construct(){
		parent::__construct();
		$this->load->database();	
	}

	function tampil()
	{
		$this->db->select('*');
		$this->db->from('setting');
	
		$query = $this->db->get();
		return $query->result();
	}

	function update_data($id, $data, $where){
		$update = $this->db->where('id', $id)
							->where("description" , $where)
							->set($data)
							->update('setting');
		 return $update;
	}

	function getProductTittle($where) {
		$sql = $this->db->select()
						->from('setting')
						->where('description', $where)
						->get();

		return $sql->row_array();
	}

}