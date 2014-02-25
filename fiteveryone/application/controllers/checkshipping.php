<?php 
class Checkshipping extends CI_Controller {

	function index(){//check num cards
		
		if( $this->session->userdata('login_state')) {
			if( $query = $this->checkshipping_model->get_nums()) //>1
			{
				$data = array();
				
				if($query = $this->checkshipping_model->get_records())
				{
					$data['records'] = $query;
				}
				
				$data['main_content'] = 'chooseshipping';
				$this->load->view('includes/template',$data);
			}
			else
			{
				$data['main_content'] = 'newshipping';
				$this->load->view('includes/template',$data);//new shipping
			}
		}
		else{
			
			$data['login_first'] = 'You should login first!';
			$data['main_content'] = 'login';
			$this->load->view('includes/template',$data);
		}
	}
	function chooseshipping(){
		
		if($this->input->post('sbm') == 'add')
		{
			$data['main_content'] = 'newshipping';
			$this->load->view('includes/template',$data);//new shipping
		}
		
		
		else
		{	
		
			$this->load->library('form_validation');
			
			// field name, error message, validation rules
			$this->form_validation->set_rules('shipping_id', 'Shipping Address', 'trim|required');
			
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
			
			else
			{
						
				if($q = $this->checkshipping_model->get_record()){ //the shipping address customer choose
			
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
		$this->load->library('form_validation');
		
		// field name, error message, validation rules
		$this->form_validation->set_rules('name', 'Name', 'trim|required');
		$this->form_validation->set_rules('address1', 'Address', 'trim|required');
		$this->form_validation->set_rules('city', 'City', 'trim|required');
		$this->form_validation->set_rules('state', 'State', 'trim|required');
		$this->form_validation->set_rules('zip', 'Zip Code', 'trim|required');
		$this->form_validation->set_rules('country', 'Country', 'trim|required');
		$this->form_validation->set_rules('phone', 'Phone Number', 'trim|required');
		
		
		
		if($this->form_validation->run() == FALSE){
		
			$data['main_content'] = 'newshipping';
			$this->load->view('includes/template',$data);
		}
		
		else
		{
		
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
		
		if($this->shipping_model->shipping_exists($_POST["name"],$_POST["address1"],$_POST["address2"],$_POST["city"],$_POST["state"],$_POST["zip"],$_POST["country"],$_POST["phone"])){
				
		}
					
		else{
					
			$this->shipping_model->add_record($data);
		}	
		
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