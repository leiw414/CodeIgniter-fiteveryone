<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Passwd extends CI_Controller {

	function index()
	{
		if( $this->session->userdata('login_state') ) 
		{
            $data['main_content'] = 'passwd';
			$this->load->view('includes/template',$data);
        } 
		else
		{
			redirect('login');
		}
	}
	
	function update()
	{
		$this->load->library('form_validation');
		
		// field name, error message, validation rules
		$this->form_validation->set_rules('new_passwd', 'Password', 'trim|required|min_length[6]|max_length[32]');
		$this->form_validation->set_rules('new_passwd2', 'Password Confirmation', 'trim|required|matches[new_passwd]');
		
		if($this->form_validation->run() == FALSE)
		{
			$this->index();
		}
		
		else
		{	
		
			if($this->passwd_model->check_passwd())
			{
				$data = array(
					'passwd' => $_POST["new_passwd"]
				);
				
				$this->passwd_model->update_record($data);
				$data['success'] = 'password updated';
				$data['main_content'] = 'passwd';
				$this->load->view('includes/template',$data);
			
			}
			else
			{
				$data['error'] = 'old password not right';
				$data['main_content'] = 'passwd';
				$this->load->view('includes/template',$data);
			}
		}
	}
}
