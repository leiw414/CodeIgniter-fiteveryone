<?php 
class Shippingadd extends CI_Controller {

	function index(){
		
		if( $this->session->userdata('login_state')) 
		{
			$data = array();
			
			if($query = $this->shipping_model->get_records())
			{
				$data['records'] = $query;
			}
			
			$data['main_content'] = 'shippingadd';
			$this->load->view('includes/template',$data);
		}
		else
		{
			redirect('login');
		}
	}
	
	function check(){
	
		$this->load->library('form_validation');
		
		// field name, error message, validation rules
		$this->form_validation->set_rules('name', 'Name', 'trim|required');
		$this->form_validation->set_rules('address1', 'Address', 'trim|required');
		$this->form_validation->set_rules('city', 'City', 'trim|required');
		$this->form_validation->set_rules('state', 'State', 'trim|required');
		$this->form_validation->set_rules('zip', 'Zip Code', 'trim|required');
		$this->form_validation->set_rules('country', 'Country', 'trim|required');
		$this->form_validation->set_rules('phone', 'Phone Number', 'trim|required');
		
		
		
		if($this->form_validation->run() == FALSE)
		{
			$this->index();
		}
		else
		{
			redirect('checkcard');
		}
	}
}