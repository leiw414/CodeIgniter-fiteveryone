<?php

class Contact_model extends CI_Model {
	
	// get the $data(contact info) from controller, then save the data in the database
	function add_record($data) 
	{
		$this->db->insert('contact', $data);
		return;
	}

}