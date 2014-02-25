<?php

class Profile_model extends CI_Model {
	
	function get_records()
	{
		$user_id = $this->session->userdata('id');
		$this->db->from('user');
		$this->db->where( array('customer_id'=>$user_id));
		$q = $this->db->get();
		
		return $q->result();
	}
	
	function update_record($data) 
	{
		$user_id = $this->session->userdata('id');
		$this->db->where( array('customer_id'=>$user_id));
		$this->db->update('user', $data);
	}
	
	function add_record($data) 
	{
		$this->db->insert('user', $data);
		return;
	}

}