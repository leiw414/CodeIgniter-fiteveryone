<?php

class Shipping_model extends CI_Model {
	
	// get all shipping address info by user id
	function get_records()
	{
		$user_id = $this->session->userdata('id');
		$this->db->from('shipping_address');
		$this->db->where( array('customer_id'=>$user_id));
		$q = $this->db->get();
		
		return $q->result();
	}
	
	// get a shipping address info by shipping_id 
	function get_record($id)
	{
		$this->db->from('shipping_address');
		$this->db->where( 'shipping_id',$id);
		$q = $this->db->get();
		
		return $q->result();
	}
	
	//delete a shipping address info by shipping_id 
	function delete_row($id)
	{
		$this->db->where( array(
			'shipping_id' =>  $id
			));
						
		$this->db->delete('shipping_address');
	}
	
	// update a shipping address info by shipping_id 
	function update_record($id, $data) 
	{
		$this->db->where( array(
			'shipping_id' =>  $id
			));
		$this->db->update('shipping_address', $data);
	}
	
	// add shipping address info into shipping_address table	
	function add_record($data) 
	{
		$this->db->insert('shipping_address', $data);
		return;
	}
	
	// check if the shipping address info exists
	function shipping_exists($name,$address1,$address2,$city,$state,$zip,$country,$phone)
	{
		$user_id = $this->session->userdata('id');
		$this->db->from('shipping_address');
		$this->db->where( array('customer_id'=>$user_id,
					'name' => $name,
					'address1' => $address1,
					'address2' => $address2,
					'city' => 	$city,
					'state' => 	$state,
					'zip' => $zip,
					'country' => $country,
					'phone' => $phone));
		$query = $this->db->get();
		
		if ($query->num_rows() == 1){
			return true;
		}
		else{
			return false;
		}
	}
}