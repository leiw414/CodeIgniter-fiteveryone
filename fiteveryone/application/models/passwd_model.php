<?php

class Passwd_model extends CI_Model {
	
	function index()
	{
	}
	
	function check_passwd()
	{
		$user_id = $this->session->userdata('id');
		$this->db->from('user');
		$this->db->where( array('customer_id'=>$user_id));
		$this->db->where('passwd', $this->input->post('old_passwd'));
		$query = $this->db->get();	
		
		if($query->num_rows == 1)
		{
			return true;
		}
	}
	
	function update_record($data) 
	{
		$user_id = $this->session->userdata('id');
		$this->db->where( array('customer_id'=>$user_id));
		$this->db->update('user', $data);
	}
	
	function get_passwd()
	{
		$user_id = $this->input->post('email');
		$this->db->from('user');
		$this->db->select('passwd');
		$this->db->where( array('customer_id'=>$user_id));
		$q = $this->db->get();
		
		if ($q->num_rows()>0){
			foreach ($q->result() as $row){
				$data = $row->passwd;
			}
			return $data;
		}
		
	}
}