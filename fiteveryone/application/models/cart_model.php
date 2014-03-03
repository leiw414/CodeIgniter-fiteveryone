<?php

class Cart_model extends CI_Model {
	
	// insert into cart
	function insert($data) 
	{
		$this->db->insert('cart', $data);
		return;
	}
	
	// get info from cart table by user id
	function get_records()
	{
		$user_id = $this->session->userdata('id');
		$this->db->from('cart');
		$this->db->where( array('customer_id'=>$user_id));
		$q = $this->db->get();
		
		return $q->result();
	}
	
	//delete item from cart table by user id
	function delete()
	{
		$user_id = $this->session->userdata('id');
		$this->db->where( array('customer_id'=>$user_id));
		$this->db->delete('cart');
	}
	

}