<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_testimoni extends CI_Model{
	
	function __construct(){
		parent::__construct();
		$this->load->database();	
	}

	function simpantestimoni($data){
		$this->db->insert('testimoni',$data);
	}

	function tampiltestimoni(){
		$this->db->select('*');
		$this->db->from('testimoni');
	
		$query = $this->db->get();
		return $query->result();
	}

	function delete_data($id){
		$this->db->where($id);
		$this->db->delete('testimoni');
	}

	

	public function save($data){
      $this->db->insert($this->table, $data);
      return $this->db->insert_id();
    }

	function update_data($data){
		// var_dump($data['id']);
		// die();
		$update = $this->db->where('id', $data['id'])
							->set($data)
							->update('testimoni');
		 return $update;
		// $this->db->where($where);
		// $this->db->update($datae);
	}

	function getTestimoniById($id) {
		$sql = $this->db->select()
						->from('testimoni')
						->where('id', $id)
						->get();

		return $sql->row_array();
	}
}