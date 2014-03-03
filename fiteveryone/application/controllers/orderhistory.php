<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Orderhistory extends CI_Controller {

	
	function index()
	{	
		// If the user has logged in, then display all history orders.
		if( $this->session->userdata('login_state')) 
		{
            $data = array();
		
			if($query = $this->Ordhistory_model->getAll())
			{
				$data['records'] = $query;
			}
			
			// Display the order history on the orderhistory page.
			$data['main_content'] = 'orderhistory';
			$this->load->view('includes/template',$data);
			
        } 
		// Otherwise, return to the login page.
		else
		{
			redirect('login');
		}
	}
	function Viewmore($order_no)
	{
		// Get shipping and payment info corresponding to the order number.
		if($query = $this->Ordhistory_model->get_sp_record($order_no)){
				$data['sp'] = $query;
		}
		// Get item info corresponding to the order number.
		if($q = $this->Ordhistory_model->get_item_records($order_no)){
				$data['item'] = $q;
		}	
		// Display the info on the invoice page.
		$this->load->view('invoice',$data);
	}
}
