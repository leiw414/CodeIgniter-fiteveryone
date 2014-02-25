<?php

class Checkcard_model extends CI_Model {
	
	function get_records()
	{
		$user_id = $this->session->userdata('id');
		$this->db->from('payment');
		$this->db->where( array('customer_id'=>$user_id));
		$this->db->where( array('method'=>'1'));
		$q = $this->db->get();
		
		return $q->result();
	}
	
	function get_precords()
	{
		$user_id = $this->session->userdata('id');
		$this->db->from('payment');
		$this->db->where( array('customer_id'=>$user_id));
		$this->db->where( array('method'=>'2'));
		$q = $this->db->get();
		
		return $q->result();
	}
	
	function get_all_records()
	{
		$user_id = $this->session->userdata('id');
		$this->db->from('payment');
		$this->db->where( array('customer_id'=>$user_id));
		$q = $this->db->get();
		
		return $q->result();
	}
	
	function get_nums()
	{
		$user_id = $this->session->userdata('id');
		$this->db->from('payment');
		$this->db->where( array('customer_id'=>$user_id));
		$this->db->where( array('method'=>'1'));
		$query = $this->db->get();
		
		if ($query->num_rows() > 0){
			return true;
		}
		else{
			return false;
		}
	}
	
	function get_pnums()
	{
		$user_id = $this->session->userdata('id');
		$this->db->from('payment');
		$this->db->where( array('customer_id'=>$user_id));
		$this->db->where( array('method'=>'2'));
		$query = $this->db->get();
		
		if ($query->num_rows() > 0){
			return true;
		}
		else{
			return false;
		}
	}
	
	function get_record()
	{
		$user_id = $this->session->userdata('id');
		$this->db->from('payment');
		$this->db->where( array('customer_id'=>$user_id));
		$this->db->where( 'card_id',$this->input->post('card_id'));
		$q = $this->db->get();
		
		return $q->result();
	}
}