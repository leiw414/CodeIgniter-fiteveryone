<?php 
class Checkcard extends CI_Controller {

	function index(){//check num cards
		
	
	
		if( $query = $this->checkcard_model->get_nums()) //>1
		{
			$data = array();
			
			if($query = $this->checkcard_model->get_records())//all records in the payment table
			{
				$data['records'] = $query;
			}
			
			$data['main_content'] = 'choosecard';
			$this->load->view('includes/template',$data);
		}
		
		else
		{
			$data['main_content'] = 'newcard';
			$this->load->view('includes/template',$data);//new card
		}
	}
	
	function choosecard(){
		
		if($this->input->post('sbm') == 'add')
		{
			$data['main_content'] = 'newcard';
			$this->load->view('includes/template',$data);//new card
		}
		
		
		else
		{	
		
			$this->load->library('form_validation');
			
			// field name, error message, validation rules
			$this->form_validation->set_rules('card_id', 'Credit Card', 'trim|required');
			
			if($this->form_validation->run() == FALSE)
			{
				$data = array();
			
				if($query = $this->checkcard_model->get_records())
				{
					$data['records'] = $query;
				}
				
				$data['main_content'] = 'choosecard';
				$this->load->view('includes/template',$data);
			}
			
			else
			{
				$data = array();
				
				if($q = $this->checkcard_model->get_record()){
			
					foreach ($q as $row){
							
						$this->session->set_userdata('payment_name', $row->name);
						$this->session->set_userdata('payment_card_no', $row->card_no);
						$this->session->set_userdata('payment_last_four', substr($row->card_no, 12, 4));
						$this->session->set_userdata('payment_month', $row->month);
						$this->session->set_userdata('payment_year', $row->year);
						$this->session->set_userdata('payment_cvv', $row->cvv);
						$this->session->set_userdata('payment_card_type', $row->card_type);
						$this->session->set_userdata('payment_address1', $row->address1);
						$this->session->set_userdata('payment_address2', $row->address2);
						$this->session->set_userdata('payment_city', $row->city);
						$this->session->set_userdata('payment_state', $row->state);
						$this->session->set_userdata('payment_zip', $row->zip);
						$this->session->set_userdata('payment_country', $row->country);
						$this->session->set_userdata('payment_phone', $row->phone);
					}
				}
				
				if($query = $this->checkcard_model->get_record()){
					$data['records'] = $query;
				}
				
				$data['main_content'] = 'confirmcard';
				$this->load->view('includes/template',$data);
			}
		}
	}
	
	function save_confirm()
	{
		$this->load->library('form_validation');
		
		// field name, error message, validation rules
		$this->form_validation->set_rules('month', 'Card Expiry Month', 'trim|required');
		$this->form_validation->set_rules('year', 'Card Expiry Year', 'trim|required');
		$this->form_validation->set_rules('card_type', 'card type', 'trim|required');
		$this->form_validation->set_rules('address1', 'Address', 'trim|required');
		$this->form_validation->set_rules('city', 'City', 'trim|required');
		$this->form_validation->set_rules('state', 'State', 'trim|required');
		$this->form_validation->set_rules('zip', 'Zip Code', 'trim|required');
		$this->form_validation->set_rules('country', 'Country', 'trim|required');
		$this->form_validation->set_rules('phone', 'Phone Number', 'trim|required');
		
		
		
		if($this->form_validation->run() == FALSE)
		{
			$data['main_content'] = 'newcard';
			$this->load->view('includes/template',$data);
		}
		else
		{
		
			if($this->input->post('save_card') == 'option1')
			{
				$this->save();	
			}
			
			$data = array(
			
				'new' => true,
				'name' => $_POST["name"],
				'card_no' => $_POST["card_no"],
				'month' => $_POST["month"],
				'year' => $_POST["year"],
				'cvv' => $_POST["cvv"],
				'card_type' => $_POST["card_type"],
				'address1' => $_POST["address1"],
				'address2' => $_POST["address2"],
				'city' => 	$_POST["city"],
				'state' => 	$_POST["state"],
				'zip' => $_POST["zip"],
				'country' => $_POST["country"],
				'phone' => $_POST["phone"]
			);
			
			$this->session->set_userdata('payment_name', $_POST["name"]);
			$this->session->set_userdata('payment_card_no', $_POST["card_no"]);
			$this->session->set_userdata('payment_last_four', substr( $_POST["card_no"], 12, 4));
			$this->session->set_userdata('payment_month', $_POST["month"]);
			$this->session->set_userdata('payment_year', $_POST["year"]);
			$this->session->set_userdata('payment_cvv', $_POST["cvv"]);
			$this->session->set_userdata('payment_card_type', $_POST["card_type"]);
			$this->session->set_userdata('payment_address1', $_POST["address1"]);
			$this->session->set_userdata('payment_address2', $_POST["address2"]);
			$this->session->set_userdata('payment_city', $_POST["city"]);
			$this->session->set_userdata('payment_state', $_POST["state"]);
			$this->session->set_userdata('payment_zip', $_POST["zip"]);
			$this->session->set_userdata('payment_country', $_POST["country"]);
			$this->session->set_userdata('payment_phone', $_POST["phone"]);
			
			$data['main_content'] = 'confirmcard';
			$this->load->view('includes/template',$data);
		}
	}
	
		
	function save(){
	
		$data = array(
		
				'customer_id' => $this->session->userdata('id'),
				'name' => $_POST["name"],
				'card_no' => $_POST["card_no"],
				'last_four' => substr($_POST["card_no"], 12, 4),
				'month' => $_POST["month"],
				'year' => $_POST["year"],
				'cvv' => $_POST["cvv"],
				'card_type' => $_POST["card_type"],
				'address1' => $_POST["address1"],
				'address2' => $_POST["address2"],
				'city' => 	$_POST["city"],
				'state' => 	$_POST["state"],
				'zip' => $_POST["zip"],
				'country' => $_POST["country"],
				'phone' => $_POST["phone"],
				'method'=>1
			);
			
		if($this->creditcard_model->card_exists($_POST["card_no"])){
			
			$this->creditcard_model->update_record($data);
		}
					
		else{
			
			$this->creditcard_model->add_record($data);
		}
	}
	
	function choosePo(){
	
		if( $query = $this->checkcard_model->get_Pnums()) //>1
		{
			$data = array();
			
			if($query = $this->checkcard_model->get_precords())//all records in the payment table
			{
				$data['records'] = $query;
			}
			
			$data['main_content'] = 'choosePO';
			$this->load->view('includes/template',$data);
		}
		
		else
		{
			$data['main_content'] = 'newPO';
			$this->load->view('includes/template',$data);//new card
		}
	}
	
	function choosePONO(){
		
		if($this->input->post('sbm') == 'add')
		{
			$data['main_content'] = 'newPO';
			$this->load->view('includes/template',$data);//new card
		}
		
		
		else
		{	
		
			$this->load->library('form_validation');
			
			// field name, error message, validation rules
			$this->form_validation->set_rules('card_id', 'PO Number', 'trim|required');
			
			if($this->form_validation->run() == FALSE)
			{
				$data = array();
			
				if($query = $this->checkcard_model->get_precords())
				{
					$data['records'] = $query;
				}
				
				$data['main_content'] = 'choosePO';
				$this->load->view('includes/template',$data);
			}
			
			else
			{
				$data = array();
				
				if($q = $this->checkcard_model->get_record()){
			
					foreach ($q as $row){
							
						$this->session->set_userdata('payment_name', $row->name);
						$this->session->set_userdata('payment_card_no', $row->card_no);
						$this->session->set_userdata('payment_last_four', substr($row->card_no, strlen($row->card_no)-4, 4));
						$this->session->set_userdata('payment_address1', $row->address1);
						$this->session->set_userdata('payment_address2', $row->address2);
						$this->session->set_userdata('payment_city', $row->city);
						$this->session->set_userdata('payment_state', $row->state);
						$this->session->set_userdata('payment_zip', $row->zip);
						$this->session->set_userdata('payment_country', $row->country);
						$this->session->set_userdata('payment_phone', $row->phone);
					}
				}
				
				if($query = $this->checkcard_model->get_record()){
					
					$data['records'] = $query;
				}
				
				$data['main_content'] = 'confirmPO';
				$this->load->view('includes/template',$data);
			}
		}
	}
	
	function po_save_confirm()
	{
		$this->load->library('form_validation');
		
		// field name, error message, validation rules
		$this->form_validation->set_rules('address1', 'Address', 'trim|required');
		$this->form_validation->set_rules('city', 'City', 'trim|required');
		$this->form_validation->set_rules('state', 'State', 'trim|required');
		$this->form_validation->set_rules('zip', 'Zip Code', 'trim|required');
		$this->form_validation->set_rules('country', 'Country', 'trim|required');
		$this->form_validation->set_rules('phone', 'Phone Number', 'trim|required');
		
		
		
		if($this->form_validation->run() == FALSE){
			
			$data['main_content'] = 'newPO';
			$this->load->view('includes/template',$data);
		}
		
		else
		{
		
			if($this->input->post('save_card') == 'option1')
			{
				$this->po_save();	
			}
			
			$data = array(
			
				'new' => true,
				'name' => $_POST["name"],
				'card_no' => $_POST["card_no"],
				'card_type' => "PO Number",
				'address1' => $_POST["address1"],
				'address2' => $_POST["address2"],
				'city' => 	$_POST["city"],
				'state' => 	$_POST["state"],
				'zip' => $_POST["zip"],
				'country' => $_POST["country"],
				'phone' => $_POST["phone"]

			);
			
			$this->session->set_userdata('payment_name', $_POST["name"]);
			$this->session->set_userdata('payment_card_no', $_POST["card_no"]);
			$this->session->set_userdata('payment_last_four', substr( $_POST["card_no"], strlen($_POST["card_no"])-4, 4));
			$this->session->set_userdata('payment_card_type', "PO Number");
			$this->session->set_userdata('payment_address1', $_POST["address1"]);
			$this->session->set_userdata('payment_address2', $_POST["address2"]);
			$this->session->set_userdata('payment_city', $_POST["city"]);
			$this->session->set_userdata('payment_state', $_POST["state"]);
			$this->session->set_userdata('payment_zip', $_POST["zip"]);
			$this->session->set_userdata('payment_country', $_POST["country"]);
			$this->session->set_userdata('payment_phone', $_POST["phone"]);
			
			$data['main_content'] = 'confirmPO';
			$this->load->view('includes/template',$data);
		}
	}

	function po_save(){
	
		$data = array(
		
				'customer_id' => $this->session->userdata('id'),
				'name' => $_POST["name"],
				'card_no' => $_POST["card_no"],
				'last_four' => substr($_POST["card_no"], strlen($_POST["card_no"])-4, 4),
				'card_type' => "PO Number",
				'address1' => $_POST["address1"],
				'address2' => $_POST["address2"],
				'city' => 	$_POST["city"],
				'state' => 	$_POST["state"],
				'zip' => $_POST["zip"],
				'country' => $_POST["country"],
				'phone' => $_POST["phone"],
				'method'=>2
			);
			
		if($this->creditcard_model->card_exists($_POST["card_no"])){
			
			$this->creditcard_model->update_record($data);
		}
					
		else{
			
			$this->creditcard_model->add_record($data);
		}
		
	}
}