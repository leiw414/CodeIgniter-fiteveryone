<?php

class Contact_model extends CI_Model {
	
	
	function add_record($data) 
	{
		$this->db->insert('contact', $data);
		return;
	}

}