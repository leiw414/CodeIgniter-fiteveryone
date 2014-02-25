<?php

class Checkshipping_model extends CI_Model {
	
	function get_records(){
		$user_id = $this->session->userdata('id');
		$this->db->from('shipping_address');
		$this->db->where( array('customer_id'=>$user_id));
		$q = $this->db->get();
		
		return $q->result();
	}
	
	function get_nums(){
		$user_id = $this->session->userdata('id');
		$this->db->from('shipping_address');
		$this->db->where( array('customer_id'=>$user_id));
		$query = $this->db->get();
		
		if ($query->num_rows() > 0){
			return true;
		}
		else{
			return false;
		}
	}
	
	function get_record(){
		$user_id = $this->session->userdata('id');
		$this->db->from('shipping_address');
		$this->db->where( array('customer_id'=>$user_id));
		$this->db->where( 'shipping_id',$this->input->post('shipping_id'));
		$q = $this->db->get();
		
		return $q->result();
	}
}