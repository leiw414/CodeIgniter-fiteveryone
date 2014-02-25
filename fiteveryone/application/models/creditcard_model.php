<?php

class Creditcard_model extends CI_Model {
	
	function get_records()
	{
		$user_id = $this->session->userdata('id');
		$this->db->from('payment');
		$this->db->where( array('customer_id'=>$user_id));
		$q = $this->db->get();
		
		return $q->result();
	}
	
	function update_record($data) 
	{
		$user_id = $this->session->userdata('id');
		$this->db->where( array('customer_id'=>$user_id));
		$this->db->update('payment', $data);
	}
	
	function add_record($data) 
	{
		$this->db->insert('payment', $data);
		return;
	}
	
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
	
	function get_record($id)
	{
		$this->db->from('payment');
		$this->db->where( 'card_id',$id);
		$q = $this->db->get();
		
		return $q->result();
	}
	
	function delete_row($id)
	{
		$this->db->where( array(
			'card_id' =>  $id
			));
						
		$this->db->delete('payment');
	}
	
	function edit_record($id, $data) 
	{
		$this->db->where( array(
			'card_id' =>  $id
			));
		$this->db->update('payment', $data);
	}
	
	function get_temp_record()
	{
		$user_id = $this->session->userdata('id');
		$this->db->from('temp_payment');
		$this->db->where( array('customer_id'=>$user_id));
		$q = $this->db->get();
		
		return $q->result();
	}
		
	function add_payment_record($data) 
	{
		$this->db->insert('payment', $data);
		return;
	}
}