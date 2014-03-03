<?php

class Profile_model extends CI_Model {
	
	//get profile info by user id 
	function get_records()
	{
		$user_id = $this->session->userdata('id');
		$this->db->from('user');
		$this->db->where( array('customer_id'=>$user_id));
		$q = $this->db->get();
		
		return $q->result();
	}
	
	//update profile info by user id 
	function update_record($data) 
	{
		$user_id = $this->session->userdata('id');
		$this->db->where( array('customer_id'=>$user_id));
		$this->db->update('user', $data);
	}
	
	//add profile info by user id 
	function add_record($data) 
	{
		$this->db->insert('user', $data);
		return;
	}

}