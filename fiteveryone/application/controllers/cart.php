<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cart extends CI_Controller {

	function index()
	{
		// If user has logged in
		if( $this->session->userdata('login_state') ) 
		{
			// Get the items in the cart_model, the insert into cart.
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
			
			//Then, all items are in the cart now
			if($cart = $this->cart->contents()){
					// Then, delete the items in the cart table
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
						//Then, save all items that in the shopping cart in the cart table
						$this->cart_model->insert($data);
					}
					
			}
			//direct to cart page
			$data['main_content'] = 'cart';
			$this->load->view('includes/template',$data);

        } 
		// If user has not logged in, the direct to shopping cart page.
		else
		{
			$data['main_content'] = 'shoppingcart';
			$this->load->view('includes/template',$data);
		}

	}
	
	
	
}