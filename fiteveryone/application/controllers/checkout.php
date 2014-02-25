<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Checkout extends CI_Controller {

	function index(){
		
		$this->save_order_history();
		// delete cart table destroy ->cart
		$this->cart_model->delete();
		$this->cart->destroy();
		$data['main_content'] = 'tkorder';
		$this->load->view('includes/template',$data);
	}
	function save_order_history(){
		
		$data = array(
		
			'customer_id' => $this->session->userdata('id'),
			'order_id' => $this->session->userdata('order_id'),
			'order_date' =>date("m/d/Y", mktime()),
			'total' => $this->cart->total(),
			's_name' => $this->session->userdata('shipping_name'),
			's_address1' => $this->session->userdata('shipping_address1'),
			's_address2' => $this->session->userdata('shipping_address2'),
			's_city' => $this->session->userdata('shipping_city'),
			's_state' => $this->session->userdata('shipping_state'),
			's_zip' => $this->session->userdata('shipping_zip'),
			's_country' => $this->session->userdata('shipping_country'),
			's_phone' => $this->session->userdata('shipping_phone'),
			'p_name' => $this->session->userdata('payment_name'),
			'p_card_no' => $this->session->userdata('payment_card_no'),
			'p_last_four' => $this->session->userdata('payment_last_four'),
			'p_month' => $this->session->userdata('payment_month'),
			'p_year' => $this->session->userdata('payment_year'),
			'p_cvv' => $this->session->userdata('payment_cvv'),
			'p_card_type' => $this->session->userdata('payment_card_type'),
			'p_address1' => $this->session->userdata('payment_address1'),
			'p_address2' => $this->session->userdata('payment_address2'),
			'p_city' => $this->session->userdata('payment_city'),
			'p_state' => $this->session->userdata('payment_state'),
			'p_zip' => $this->session->userdata('payment_zip'),
			'p_country' => $this->session->userdata('payment_country'),
			'p_phone' => $this->session->userdata('payment_phone')
			
		);
		
		$this->Ordhistory_model->add_record($data);
		
		if($query = $this->Ordhistory_model->get_order_no($this->session->userdata('order_id'))){
			
			foreach ($query as $q){
				
				$this->session->set_userdata('order_no', $q->order_no);
			}
			
		}
			
		if($cart = $this->cart->contents()){

			foreach ($cart as $item){
						
				$insert = array(
						
					'order_no' =>$this->session->userdata('order_no'),
					'name' => $item['name'],
					'qty' => $item['qty'],
					'option' =>$item['option'],
					'unit_price' => $item['price'],
					'subtotal' => $item['subtotal']
							
				);
				$this->Ordhistory_model->add_records($insert);
			}
					
		}
	}
}