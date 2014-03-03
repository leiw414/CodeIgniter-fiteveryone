<?php 
class Checkshipping extends CI_Controller {

	function index(){//check num cards
		
		// if user logged in,
		if( $this->session->userdata('login_state')) {
			if( $query = $this->checkshipping_model->get_nums()) //if the shipping address saved in the database greater than 1
			{
				$data = array();
				
				if($query = $this->checkshipping_model->get_records())  // get all shipping info from the database
				{
					$data['records'] = $query;
				}
				
				$data['main_content'] = 'chooseshipping';
				$this->load->view('includes/template',$data);
			}
			
			// if no shipping info in the database, direct to newshipping page.
			else
			{
				$data['main_content'] = 'newshipping'; 
				$this->load->view('includes/template',$data);//new shipping
			}
		}
		
		// if not logged in..
		else{
			
			// direct to login page with error message.
			$data['login_first'] = 'You should login first!';
			$data['main_content'] = 'login';
			$this->load->view('includes/template',$data);
		}
	}
	function chooseshipping(){
		
		// if the user wanted to add a new shipping addresss
		
		if($this->input->post('sbm') == 'add')
		{
			$data['main_content'] = 'newshipping';
			$this->load->view('includes/template',$data);//new shipping
		}
		
		
		else
		{	
			//check if the user input is valid.
			$this->load->library('form_validation');
			
			// field name, error message, validation rules
			$this->form_validation->set_rules('shipping_id', 'Shipping Address', 'trim|required');
			
			// if not valid..
			if($this->form_validation->run() == FALSE)
			{
				$data = array();
			
				if($query = $this->checkshipping_model->get_records())
				{
					$data['records'] = $query;
				}
				
				$data['main_content'] = 'chooseshipping';
				$this->load->view('includes/template',$data);
			}
			
			// if valid....
			else
			{
						
				if($q = $this->checkshipping_model->get_record()){ //get the shipping address customer choose
					
					// save the shipping info in the session.
					foreach ($q as $row){
						
						$this->session->set_userdata('shipping_name', $row->name);
						$this->session->set_userdata('shipping_address1', $row->address1);
						$this->session->set_userdata('shipping_address2', $row->address2);
						$this->session->set_userdata('shipping_city', $row->city);
						$this->session->set_userdata('shipping_state', $row->state);
						$this->session->set_userdata('shipping_zip', $row->zip);
						$this->session->set_userdata('shipping_country', $row->country);
						$this->session->set_userdata('shipping_phone', $row->phone);
						
					}				
					
				}
				
				if($query = $this->checkshipping_model->get_record()) // get record from shipping table by shipping_id
				{
					$data['records'] = $query;
				}
				
				$data['main_content'] = 'confirmshipping';
				$this->load->view('includes/template',$data);
			}
		}
	}
	
	function save_confirm()
	{
		// check if the user input is valid
		$this->load->library('form_validation');
		
		// field name, error message, validation rules
		$this->form_validation->set_rules('name', 'Name', 'trim|required');
		$this->form_validation->set_rules('address1', 'Address', 'trim|required');
		$this->form_validation->set_rules('city', 'City', 'trim|required');
		$this->form_validation->set_rules('state', 'State', 'trim|required');
		$this->form_validation->set_rules('zip', 'Zip Code', 'trim|required');
		$this->form_validation->set_rules('country', 'Country', 'trim|required');
		$this->form_validation->set_rules('phone', 'Phone Number', 'trim|required');
		
		
		//if not valid, direct to new shipping page
		if($this->form_validation->run() == FALSE){
		
			$data['main_content'] = 'newshipping';
			$this->load->view('includes/template',$data);
		}
		
		// if valid
		else
		{
			// call save()
			$this->save();	
			
			$data = array(
				'new' => true,
				'name' => $_POST["name"],
				'address1' => $_POST["address1"],
				'address2' => $_POST["address2"],
				'city' => 	$_POST["city"],
				'state' => 	$_POST["state"],
				'zip' => $_POST["zip"],
				'country' => $_POST["country"],
				'phone' => $_POST["phone"]
			);
			
			// direct to confirmshipping page
			$data['main_content'] = 'confirmshipping';
			$this->load->view('includes/template',$data);
		}
	}
	
	function save(){
	
		$data = array(
		
				'customer_id' => $this->session->userdata('id'),
				'name' => $_POST["name"],
				'address1' => $_POST["address1"],
				'address2' => $_POST["address2"],
				'city' => 	$_POST["city"],
				'state' => 	$_POST["state"],
				'zip' => $_POST["zip"],
				'country' => $_POST["country"],
				'phone' => $_POST["phone"]
			);
		
		// check if the info exists in the database
		if($this->shipping_model->shipping_exists($_POST["name"],$_POST["address1"],$_POST["address2"],$_POST["city"],$_POST["state"],$_POST["zip"],$_POST["country"],$_POST["phone"]))
		{
			//if exists, update
			$this->shipping_model->update($data);	
		
		}
					
		else{
			
			//if not, add record			
			$this->shipping_model->add_record($data);
		}	
		
		//save the shipping info into session
		$this->session->set_userdata('shipping_name', $_POST["name"]);
		$this->session->set_userdata('shipping_address1', $_POST["address1"]);
		$this->session->set_userdata('shipping_address2', $_POST["address2"]);
		$this->session->set_userdata('shipping_city', $_POST["city"]);
		$this->session->set_userdata('shipping_state', $_POST["state"]);
		$this->session->set_userdata('shipping_zip', $_POST["zip"]);
		$this->session->set_userdata('shipping_country', $_POST["country"]);
		$this->session->set_userdata('shipping_phone', $_POST["phone"]);
		
	}

}