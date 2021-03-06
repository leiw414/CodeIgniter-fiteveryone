<?php

class Membership_model extends CI_model {

	//check if the username and password match 
	function validate()
	{
		
		$this->db->where('customer_id', $this->input->post('email'));
		$this->db->where('passwd', $this->input->post('passwd'));
		$this->db->where('status', 'activated');
		$query = $this->db->get('user');
		
		if($query->num_rows == 1)
		{
			$data = array (
				
				'last_login' => date("m/d/Y", mktime())
			);
			
			$this->db->where('customer_id', $this->input->post('email'));
			$this->db->update('user', $data);
			
			return true;
		}
	}
	
	// check if activated
	function check_activation()
	{
		
		$this->db->where('customer_id', $this->input->post('email'));
		$this->db->where('status', md5($this->input->post('email')));
		$query = $this->db->get('user');
		
		if($query->num_rows == 1)
		{
					
			return true;
		}
	}
	
	//check if email exists
	function email_exists()
	{
		$this->db->where('customer_id',$this->input->post('email'));
		$query = $this->db->get('user');
		if ($query->num_rows() > 0){
			return true;
		}
		else{
			return false;
		}
	}
	
	// create a member by adding a row in the user table
	function create_member()
	{
		
		$new_member_insert_data = array(
			'customer_id' => $this->input->post('email'),
			'passwd' => $this->input->post('passwd'),
			'fname' => $this->input->post('fname'),
			'lname' => $this->input->post('lname'),
			'tel1' => $this->input->post('tel1'),
			'registration_date' => date("m/d/Y", mktime()),
			'status'=> md5($this->input->post('email'))
		);
		
		$insert = $this->db->insert('user', $new_member_insert_data);
		return $insert;
	}

	//check the email activation status
	function check_account_activation($md5_email)
	{
		$this->db->from('user');
		$this->db->where( array('status'=>$md5_email));
		$query = $this->db->get();	
		
		if($query->num_rows == 1)
		{
			return true;
		}
	}
	
	//get the user id by code($md5_email)
	function get_active_account($md5_email){
	
		$this->db->from('user');
		$this->db->select('customer_id');
		$this->db->where( array('status'=>$md5_email));
		$q = $this->db->get();
		
		if ($q->num_rows()>0){
			foreach ($q->result() as $row){
				$data = $row->customer_id;
			}
			return $data;
		}
		
	}
	
	//update the user table
	function update_record($data) 
	{
		$user_id = $this->session->userdata('id');
		$this->db->where( array('customer_id'=>$user_id));
		$this->db->update('user', $data);
	}
}