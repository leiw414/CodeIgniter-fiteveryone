<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
	

	function index()
	{
		// If user has logged in, direct to cart page.
		if($this->session->userdata('login_state')) 
		{
            redirect('cart');
        } 
		// Otherwise, direct to login page
		else 
		{
			$data['main_content'] = 'login';
			$this->load->view('includes/template',$data);
		}
	}
	
	// Check if the use has correct login info.
	function validate_credentials()
	{		
		$this->load->model('membership_model');
		$query = $this->membership_model->validate();
		$q = $this->membership_model->check_activation();
		
		if($query) // if the user's credentials validated...
		{
			/*$data = array(
				'customer_id' => $this->input->post('email'),
				'is_logged_in' => true
			);

			$this->session->set_userdata($data);*/
			
			// Set the login state as True and save the user id
			$this->session->set_userdata('login_state', TRUE);
			$this->session->set_userdata('id', $this->input->post('email'));
			
			redirect('cart');
		}
		
		if($q) // if the user's credentials validated...
		{

			$data['activation'] = 'Account has not been activated';
			$data['login_state'] = False;
			$data['main_content'] = 'login';
			$this->load->view('includes/template',$data);
		}
		
		else // incorrect username or password
		{
			$data['incorrect'] = 'incorrect Username or Password';
			$data['login_state'] = False;
			$data['main_content'] = 'login';
			$this->load->view('includes/template',$data);
		}
	}
	
	//Direct to signup page
	function signup()
	{
		$data['main_content'] = 'signup';
		$this->load->view('includes/template', $data);
	}
	
	function create_member()
	{
		//check if the user input is valid.
		$this->load->library('form_validation');
		
		// field name, error message, validation rules
		$this->form_validation->set_rules('email', 'Email Address', 'trim|required|valid_email');
		$this->form_validation->set_rules('passwd', 'Password', 'trim|required|min_length[6]|max_length[32]|xss_clean');
		$this->form_validation->set_rules('passwd2', 'Password Confirmation', 'trim|required|matches[passwd]');
		$this->form_validation->set_rules('fname', 'First Name', 'trim|required');
		$this->form_validation->set_rules('lname', 'Last Name', 'trim|required');
		
		// If not valid, direct to signup page.
		if($this->form_validation->run() == FALSE)
		{
			$this->signup();
		}
		
		//if valid
		else
		{			
			$this->load->model('membership_model');
			
			//If the email not exists in the database, then
			if($this->membership_model->email_exists() == False)
			{
				//send a "activate your account email" to user's email.
				if($query = $this->membership_model->create_member())
				{
					$config = Array(
						'protocol' => 'smtp',
						'smtp_host' => 'ssl://smtp.gmail.com',
						'smtp_port' => 465,
						'smtp_user' => 'zuoyou482634@gmail.com',
						'smtp_pass' => '!zuoyou482634',
						'mailtype'  => 'html', 
						'charset'   => 'iso-8859-1'
					);
					
					$verification_code = md5($_POST["email"]);
					$this->load->library('email', $config);
					$this->email->set_newline("\r\n");
					

					$this->email->from('zuoyou482634@gmail.com');
					$this->email->to($_POST["email"]);
					$this->email->subject("Activate Your Account");
					$link = 'You can simply activate your account by clicking the following link - <a href="http://localhost/fiteveryone/index.php?/login/user_activation/'.$verification_code.'">http://localhost/fiteveryone/index.php?/login/user_activation/'.$verification_code.'</a>';
					$this->email->message($link);

					// If the email sent successfully.
					if($this->email->send())
					{
						//Direct to activation_email_send page
						$data['main_content'] = 'activation_email_send';
						$this->load->view('includes/template',$data);
					}
					else
					{
						show_error($this->email->print_debugger());
					}
				}
				else
				{
					$this->signup();			
				}
			}
			//if the email already exists in the database, return to signup page with error message.
			else
			{
				$data['error'] = 'Email address already exists';
				$data['main_content'] = 'signup';
				$this->load->view('includes/template', $data);
			}
		}
		
	}
	
	//Log out 
	function logout()
	{
		$this->session->sess_destroy();
		$this->index();
	}
	
	//Direct to pwlost page
    function pwforget()
 	{
    	$data['main_content'] = 'pwlost';
		$this->load->view('includes/template',$data);
    }
	
	//Send password to email.
	function sendpw()
	{
		// check if the user input is valid
		$this->load->library('form_validation');
		
		//field name, error message, validation rules
		$this->form_validation->set_rules('email', 'Email Address', 'trim|required|valid_email');
		
		// if not valid, direct to pwlost page
		if($this->form_validation->run() == FALSE)
		{
			
			$data['main_content'] = 'pwlost';
			$this->load->view('includes/template',$data);
		}
		
		//if the email not exists in the database, return to pwlost page with error message.
		elseif($this->membership_model->email_exists() == False){
		
			$data['error'] = 'Email address has not been registered';
			$data['main_content'] = 'pwlost';
			$this->load->view('includes/template',$data);
		}
		
		else
		{
			
			//validation has passed, then send the email;
			$config = Array(
				'protocol' => 'smtp',
				'smtp_host' => 'ssl://smtp.gmail.com',
				'smtp_port' => 465,
				'smtp_user' => 'zuoyou482634@gmail.com',
				'smtp_pass' => '!zuoyou482634',
				'mailtype'  => 'html', 
				'charset'   => 'iso-8859-1'
			);
			$this->load->library('email', $config);
			$this->email->set_newline("\r\n");
			
            $passwd = $this->passwd_model->get_passwd() ;

            $this->email->from('zuoyou482634@gmail.com');
			$this->email->to($_POST["email"]);
            $this->email->subject("Password forget");
            $this->email->message( "Your Password is " . $passwd . ". " . "We highly recommendate that you reset the password immediately");

            // if the email sent successfully, then direct to passsent page
            if($this->email->send())
            {
            	$data['main_content'] = 'passsent';
				$this->load->view('includes/template',$data);
            }
            else
            {
            	show_error($this->email->print_debugger());
            }
		}
	}
	
	function user_activation($md5_email){
		
		// check which email need to activate according to the code($md5_email)
		if($this->membership_model->check_account_activation($md5_email)){
		
		//get the email that need to activate
			$data['email'] = $this->membership_model->get_active_account($md5_email);
			
			$data['main_content'] = 'account_activation';
			$this->load->view('includes/template',$data);
		}
		else{
			
			echo "Incorrect request";
		}		
	
	}
	
	// activate the account
	function activate(){
		
		$this->session->set_userdata('id', $this->input->post('email'));
			
			$data = array(
				'status' => "activated"
			);
			
			// Update the user table and set the status as activated
			$this->membership_model->update_record($data);
				
			// Direct to tkregister page
			$data['main_content'] = 'tkregister';
			$this->load->view('includes/template',$data);
		
	}
	
}

