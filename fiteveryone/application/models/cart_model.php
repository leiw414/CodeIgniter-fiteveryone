<?php

class Cart_model extends CI_Model {
	
	function insert($data) 
	{
		$this->db->insert('cart', $data);
		return;
	}
	
	function get_records()
	{
		$user_id = $this->session->userdata('id');
		$this->db->from('cart');
		$this->db->where( array('customer_id'=>$user_id));
		$q = $this->db->get();
		
		return $q->result();
	}
	
	function delete()
	{
		$user_id = $this->session->userdata('id');
		$this->db->where( array('customer_id'=>$user_id));
		$this->db->delete('cart');
	}
	
	function delete_row()
	{
		
		$this->db->where( array(
			'customer_id' =>  $this->session->userdata('id'),
			'option' =>$this->input->post('option')
			));
						
		$this->db->delete('cart');
	}
}