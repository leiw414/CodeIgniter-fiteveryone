<?php 
class Manageshipping extends CI_Controller {

	function index(){
		
		// get all info of all card and display them on the manageshipping page
			$data = array();
			
			if($query = $this->shipping_model->get_records())
			{
				$data['records'] = $query;
			}
			
			$data['main_content'] = 'manageshipping';
			$this->load->view('includes/template',$data);
		
	}
	
	function del_edit(){
	
		$shipping_id = $this->input-> post('shipping_id');
		
		// if the user wanted to edit
		if($this->input->post('sbm') == "edit") { 
			
			if($query = $this->shipping_model->get_record($shipping_id))
			{
				$data['records'] = $query;
			}
			
			$data['main_content'] = 'editshipping';
			$this->load->view('includes/template',$data);// do something with edit
			
		} 
		
		// if the user wanted to delete
		else {
			$this->shipping_model->delete_row($shipping_id);
			
			$this->index();
		}
	
	}
	
	function update_record($shipping_id){
		
		// check if the user input is valid
		$this->load->library('form_validation');
		
		// field name, error message, validation rules
		$this->form_validation->set_rules('name', 'Full Name', 'trim|required');
		$this->form_validation->set_rules('address1', 'Address', 'trim|required');
		$this->form_validation->set_rules('city', 'City', 'trim|required');
		$this->form_validation->set_rules('zip', 'Zip Code', 'trim|required');
		$this->form_validation->set_rules('country', 'Country', 'trim|required');
		$this->form_validation->set_rules('phone', 'Phone Number', 'trim|required');
		
		
		//if not valid..
		if($this->form_validation->run() == FALSE)
		{
			if($query = $this->shipping_model->get_record($shipping_id))
			{
				$data['records'] = $query;
			}
			
			// return editshipping page with error message
			$data['main_content'] = 'editshipping';
			$this->load->view('includes/template',$data);
		}
		
		// update the shipping info
		else{
		
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
			$this->shipping_model->update_record($shipping_id, $data);
			
			$this->index();
		}
	}
}