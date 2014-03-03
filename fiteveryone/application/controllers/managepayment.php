<?php 
class Managepayment extends CI_Controller {

	function index(){
		
		// get all info of all card and display them on the managepayment page
			$data = array();
			
			if($query = $this->checkcard_model->get_all_records())
			{
				$data['records'] = $query;
			}
			
			$data['main_content'] = 'managepayment';
			$this->load->view('includes/template',$data);
	
		
	}
	
	function del_edit(){
		
		
		$card_id = $this->input-> post('card_id');
		$card_type = $this->input-> post('card_type');
		
		// if the user wanted to edit
		if($this->input->post('sbm') == "edit") { 
			
			if($card_type == "PO%20Number"){
				
				if($query = $this->creditcard_model->get_record($card_id))
				{
					$data['precords'] = $query;
				}
			
			}
			else{
			
			if($query = $this->creditcard_model->get_record($card_id))
			{
				$data['records'] = $query;
			}
			
			}
			$data['main_content'] = 'editcreditcard';
			$this->load->view('includes/template',$data);// do something with edit
		} 
		
		// if the user wanted to delete
		else {
			$this->creditcard_model->delete_row($card_id);
			
			$this->index();
		}
	
	}
	
	function update_record($card_id){
		
		// check if the user input is valid
		$this->load->library('form_validation');
		
		// field name, error message, validation rules
		$this->form_validation->set_rules('month', 'Card Expiry Month', 'trim|required');
		$this->form_validation->set_rules('year', 'Card Expiry Year', 'trim|required');
		$this->form_validation->set_rules('card_type', 'card type', 'trim|required');
		$this->form_validation->set_rules('address1', 'Address', 'trim|required');
		$this->form_validation->set_rules('city', 'City', 'trim|required');
		$this->form_validation->set_rules('zip', 'Zip Code', 'trim|required');
		$this->form_validation->set_rules('country', 'Country', 'trim|required');
		$this->form_validation->set_rules('phone', 'Phone Number', 'trim|required');
		
		
		//if not valid..
		if($this->form_validation->run() == FALSE)
		{
			if($query = $this->creditcard_model->get_record($card_id))
			{
				$data['records'] = $query;
			}
			
			// return editcreditcard page with error message
			$data['main_content'] = 'editcreditcard';
			$this->load->view('includes/template',$data);
		}
		
		// update the card info
		else{
			
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
				'phone' => $_POST["phone"]
			);
			$this->creditcard_model->edit_record($card_id, $data);
			
			$this->index();
		}
	}
	
	/*function update_po_record($card_id){
		
		
		$this->load->library('form_validation');
		
		// field name, error message, validation rules
		$this->form_validation->set_rules('address1', 'Address', 'trim|required');
		$this->form_validation->set_rules('city', 'City', 'trim|required');
		$this->form_validation->set_rules('zip', 'Zip Code', 'trim|required');
		$this->form_validation->set_rules('country', 'Country', 'trim|required');
		$this->form_validation->set_rules('phone', 'Phone Number', 'trim|required');
		
		
		
		if($this->form_validation->run() == FALSE)
		{
			if($query = $this->creditcard_model->get_record($card_id))
			{
				$data['precords'] = $query;
			}
			
			$data['main_content'] = 'editcreditcard';
			$this->load->view('includes/template',$data);
		}
		
		
		else{
			
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
				'phone' => $_POST["phone"]
			);
			$this->creditcard_model->edit_record($card_id, $data);
			
			$this->index();
		}
	}*/
}