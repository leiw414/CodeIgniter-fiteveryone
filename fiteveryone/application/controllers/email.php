<?php

class Email extends CI_Controller
{
	public function __construct()
    {
         parent::__construct();
         // Your own constructor code
    }
	
	// Direct to the contactus page
    function index()
 	{
    	$data['main_content'] = 'contactus';
		$this->load->view('includes/template',$data);
    }
	
	// send eamil with ajax
	function submit() {
		// save the input info in array
		$data = array(
				'name' => $this->input->post('name'),
				'email' => $this->input->post('email'),
				'subject' => $this->input->post('subject'),
				'message' => $this->input->post('message')
				
		);
		// Save the info in database
		$this->contact_model->add_record($data);
		
		// At the same time, send a email to the person in charge 
		$config = Array(
				'protocol' => 'smtp',
				'smtp_host' => 'ssl://smtp.gmail.com',
				'smtp_port' => 465,
				'smtp_user' => 'leiw414@gmail.com',
				'smtp_pass' => 'zuoyou414',
				'mailtype'  => 'html', 
				'charset'   => 'iso-8859-1'
			);
			$this->load->library('email', $config);
			$this->email->set_newline("\r\n");
            
            $this->email->from($_POST["email"], $_POST["name"]);
            $this->email->to('leiw414@gmail.com');
            $this->email->subject($_POST["subject"]);
            $this->email->message($_POST["email"] . " " . $_POST["message"]);
			
		$this->email->send();
		
		$data['main_content'] = 'contact_submitted';
		if ($this->input->post('ajax')) {
		
			$this->load->view($data['main_content']);			
		} 
		else {
			$this->load->view('includes/template', $data);
		}
	}
	
	// send email with PHP
	function sendemail()
	{
		// check if the user input is valid.
		$this->load->library('form_validation');
		
		//field name, error message, validation rules
		$this->form_validation->set_rules('email', 'Email Address', 'trim|required|valid_email');
		
		if($this->form_validation->run() == FALSE)
		{
			$data['main_content'] = 'contactus';
			$this->load->view('includes/template',$data);
		}
		else
		{
			//validation has passed, then send the email;
			$config = Array(
				'protocol' => 'smtp',
				'smtp_host' => 'ssl://smtp.gmail.com',
				'smtp_port' => 465,
				'smtp_user' => 'leiw414@gmail.com',
				'smtp_pass' => 'zuoyou414',
				'mailtype'  => 'html', 
				'charset'   => 'iso-8859-1'
			);
			$this->load->library('email', $config);
			$this->email->set_newline("\r\n");
            
            $this->email->from($_POST["email"], $_POST["name"]);
            $this->email->to('leiw414@gmail.com');
            $this->email->subject($_POST["subject"]);
            $this->email->message($_POST["email"] . " " . $_POST["message"]);
			
            // if the email send successful, then direct to tkemail page.
            if($this->email->send())
            {
            	$data['main_content'] = 'tkemail';
				$this->load->view('includes/template',$data);
            }
			
			//Otherwise, get error message.
            else
            {
            	show_error($this->email->print_debugger());
            }
		}
	}
	
}