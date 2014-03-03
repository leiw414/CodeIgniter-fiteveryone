<?php

class Creditcard_model extends CI_Model {
	
	// get all payment records from payment table by user id
	function get_records()
	{
		$user_id = $this->session->userdata('id');
		$this->db->from('payment');
		$this->db->where( array('customer_id'=>$user_id));
		$q = $this->db->get();
		
		return $q->result();
	}
	
	// update the payment table by user id  
	function update_record($data) 
	{
		$user_id = $this->session->userdata('id');
		$this->db->where( array('customer_id'=>$user_id));
		$this->db->update('payment', $data);
	}
	
	// add record into payment table 
	function add_record($data) 
	{
		$this->db->insert('payment', $data);
		return;
	}
	
	//check if the card exists in the database
	function card_exists($card_no)
	{
		$user_id = $this->session->userdata('id');
		$this->db->from('payment');
		$this->db->where( array('customer_id'=>$user_id));
		$this->db->where( 'card_no',$card_no);
		$query = $this->db->get();
		
		if ($query->num_rows() == 1){
			return true;
		}
		else{
			return false;
		}
	}
	
	// get specific card info from payment by card_id
	function get_record($id)
	{
		$this->db->from('payment');
		$this->db->where( 'card_id',$id);
		$q = $this->db->get();
		
		return $q->result();
	}
	
	//delete specific card info from payment by card_id
	function delete_row($id)
	{
		$this->db->where( array(
			'card_id' =>  $id
			));
						
		$this->db->delete('payment');
	}
	
	//update specific card info from payment by card_id
	function edit_record($id, $data) 
	{
		$this->db->where( array(
			'card_id' =>  $id
			));
		$this->db->update('payment', $data);
	}

	//add record into payment table
	function add_payment_record($data) 
	{
		$this->db->insert('payment', $data);
		return;
	}
}