<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cart extends CI_Controller {

	function index()
	{
		if( $this->session->userdata('login_state') ) 
		{
            if($query = $this->cart_model->get_records(1))
			{
			
				foreach ($query as $row){
					
					$data = array(
						'id' => $row->id,
						'name' => $row->name,
						'qty' => $row->qty,
						'option' => $row->option,
						'price' => $row->price	
					);
					
					$this->cart->insert($data);
				}				
			
			}
			
			if($cart = $this->cart->contents()){
			
					$this->cart_model->delete();
					
					foreach ($cart as $item){
						
						$data = array(
							'customer_id' => $this->session->userdata('id'),
							'id' => $item['id'],
							'name' => $item['name'],
							'qty' => $item['qty'],
							'option' =>$item['option'],
							'price' => $item['price'] 
						);
						
						$this->cart_model->insert($data);
					}
					
			}
		
			$data['main_content'] = 'cart';
			$this->load->view('includes/template',$data);

        } 
		else
		{
			$data['main_content'] = 'shoppingcart';
			$this->load->view('includes/template',$data);
		}

	}
	
	
	
}