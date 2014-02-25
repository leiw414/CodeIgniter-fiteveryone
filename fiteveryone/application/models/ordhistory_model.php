<?php

class Ordhistory_model extends CI_Model {
	
	function getAll(){
		
		$user_id = $this->session->userdata('id');
		$sql = "SELECT * FROM order_items INNER JOIN order_history ON order_items.order_no=order_history.order_no WHERE customer_id = ?";
		$q = $this->db->query($sql, $user_id);	
		
		return $q->result();
	}
		
	function get_sp_record($order_no){
		
		$this->db->from('order_history');
		$this->db->where( array('order_no'=>$order_no));
		$q = $this->db->get();
		
		return $q->result();
	}
	
	function get_item_records($order_no){
		
		$this->db->from('order_items');
		$this->db->where( array('order_no'=>$order_no));
		$q = $this->db->get();
		
		return $q->result();
	}
	
	function add_record($data){
		$this->db->insert('order_history', $data);
		
		return;
	}
	
	function get_order_no($order_id){
		
		$user_id = $this->session->userdata('id');
		$this->db->from('order_history');
		$this->db->where( array('customer_id'=>$user_id));
		$this->db->where( array('order_id'=>$order_id));
		$q = $this->db->get();
		
		return $q->result();
	}
	
	function add_records($data){

		$this->db->insert('order_items', $data);
		return;
	}
}