<?php
class Products_model extends CI_Model {
	
	function get_all() {
		
		$results = $this->db->get('products')->result();
		return $results;
		
	}
	
	function get_black() {
		
		$this->db->from('products');
		$this->db->where( array('category'=>'Black Tea'));
		$results = $this->db->get();
		
		return $results->result();
	}
	
	function get_green() {
		
		$this->db->from('products');
		$this->db->where( array('category'=>'Green Tea'));
		$results = $this->db->get();
		
		return $results->result();
	}
	
	function get_bag() {
		
		$this->db->from('products');
		$this->db->where( array('category'=>'Tea Bag'));
		$results = $this->db->get();
		
		return $results->result();
	}
	
	function get_product($product_id) {
		
		$this->db->from('products');
		$this->db->where( array('product_id'=>$product_id));
		$results = $this->db->get();
		
		return $results->result();
	}
	
	function get($id){
	
		$this->db->select('product_name,price,option_name');
		$this->db->from('products');
		$this->db->where('product_id',$id);
		
		$q = $this->db->get();
		if ($q->num_rows()>0){
			foreach ($q->result() as $row){
				$data[] = $row;
			}
			return $data;
		}
	}
	
}
