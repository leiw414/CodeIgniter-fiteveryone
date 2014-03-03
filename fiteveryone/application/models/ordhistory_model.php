<?php

class Ordhistory_model extends CI_Model {
	
	// get all order history and items from order_histroy and order_items table by user id
	function getAll(){
		
		$user_id = $this->session->userdata('id');
		$sql = "SELECT * FROM order_items INNER JOIN order_history ON order_items.order_no=order_history.order_no WHERE customer_id = ?";
		$q = $this->db->query($sql, $user_id);	
		
		return $q->result();
	}
	
	// get order hisrtoy information from order_history table by user id
	function get_sp_record($order_no){
		
		$this->db->from('order_history');
		$this->db->where( array('order_no'=>$order_no));
		$q = $this->db->get();
		
		return $q->result();
	}
	
	// get items info from order_items table by user id
	function get_item_records($order_no){
		
		$this->db->from('order_items');
		$this->db->where( array('order_no'=>$order_no));
		$q = $this->db->get();
		
		return $q->result();
	}
	
	//add order into order_history table
	function add_record($data){
		$this->db->insert('order_history', $data);
		
		return;
	}
	
	// get order no by order_id
	function get_order_no($order_id){
		
		$user_id = $this->session->userdata('id');
		$this->db->from('order_history');
		$this->db->where( array('customer_id'=>$user_id));
		$this->db->where( array('order_id'=>$order_id));
		$q = $this->db->get();
		
		return $q->result();
	}
	
	//add items into order_items table
	function add_records($data){

		$this->db->insert('order_items', $data);
		return;
	}
}