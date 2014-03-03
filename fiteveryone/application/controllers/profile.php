<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profile extends CI_Controller {

	function index()
	{
		//If user has logged in, get the user profile info.
		if( $this->session->userdata('login_state') ) 
		{
			$data = array();
		
			if($query = $this->profile_model->get_records())
			{
				$data['records'] = $query;
			}
			else
			{
				$data['new'] = True;
			}
			
			$data['main_content'] = 'profile';
			$this->load->view('includes/template',$data);
		}
		// Otherwise, return to the login page.
		else
		{	
			redirect('login');
		}
		
	}
	function pro_update()
	{
		// Check if the user input is valid.
		$this->load->library('form_validation');
		
		// field name, error message, validation rules
		$this->form_validation->set_rules('fname', 'First Name', 'trim|required');
		$this->form_validation->set_rules('lname', 'Last Name', 'trim|required');
		
		// If not correct, return with error messages.
		if($this->form_validation->run() == FALSE)
		{
			$this->index();
		}
		
		// If correct, update the user profile.
		else{
			$data = array(
				'fname' => $_POST["fname"],
				'lname' => $_POST["lname"],
				'tel1' => $_POST["tel1"]
			);
			
			$this->profile_model->update_record($data);
			
			$data = array();
			
			if($query = $this->profile_model->get_records())
			{
				$data['records'] = $query;
			}
			
			// get new profile info and return profile updated message
			$data['success'] = 'profile updated';
			$data['main_content'] = 'profile';
			$this->load->view('includes/template',$data);
		}
	}
	
}

/* End of file profile.php */
/* Location: ./application/controllers/profile.php */