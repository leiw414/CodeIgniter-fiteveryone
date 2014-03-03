<?php 
class Order extends CI_Controller {

	
	function add(){
	
			// if user has logged in, then..
				if( $this->session->userdata('login_state') ) 
				{
					//insert items into cart
					$product = $this->Products_model->get($this->input->post('product_id'));
			
					foreach ($product as $row){
							
						$data = array(
							'customer_id' => $this->session->userdata('id'),
							'id' => mktime(),
							'name' => $row->product_name,
							'qty' => $this->input->post('quantity'),
							'option' =>  $this->input->post('size'),
							'price' => $row->price
						);
						
						$this->cart_model->insert($data);
					}
					
					//redirect to cart controller
					redirect('cart');
				} 
				
				// if not logged in..
				else
				{
					// insert item into cart.
					$product = $this->Products_model->get($this->input->post('product_id'));
			
						foreach ($product as $row){	
							
							$data = array(
								'id' => mktime(),
								'name' => $row->product_name,
								'qty' => $this->input->post('quantity'),
								'option' =>  $this->input->post('size'),
								'price' => $row->price
							);

							$this->cart->insert($data);
						}
					
					//direct to shopping cart page
					$data['main_content'] = 'shoppingcart';
					$this->load->view('includes/template',$data);
				}

	
	}
	

	
	/*function inquire(){
	
		//check if the user input is valid
		$this->load->library('form_validation');
		
		// field name, error message, validation rules
		$this->form_validation->set_rules('gene_seq', 'Gene Sequence', 'trim|required|min_length[5]');
		$this->form_validation->set_rules('prod_name', 'Product Name', 'trim|required');
		
		//if not valid..
		if($this->form_validation->run() == FALSE){
			
			$this->index();
		}
		
		// if valid..
		else{
		
			if($query = $this->profile_model->get_records()){
				
				foreach ($query as $row){
							
						$fname = $row->fname;
						$lname = $row->lname;
						$opt_email = $row->opt_email;
						
				}
				
			}
			
		if($q = $this->Products_model->get_pname($_POST["prod_name"])){
				
				foreach($q as $row){
				
					$pname = $row->name;
				}
		}
		
			//validation has passed, then send the email;
		$config = Array(
				'protocol' => 'smtp',
				'smtp_host' => 'smtpout.secureserver.net',
				'smtp_port' => 80,
				'smtp_user' => 'order@generalbiosystems.com',
				'smtp_pass' => 'Order#775',
				'mailtype'  => 'html', 
				'charset'   => 'iso-8859-1'
		);
		
		$this->load->library('email', $config);            
        $this->email->from($opt_email, $fname, $lname);
        $this->email->to('order@generalbiosystems.com');
        $this->email->subject($pname);
        $this->email->message("Email Address:" . $opt_email . "<br />First Name: " . $fname . "<br />Last Name: ". $lname . "<br />Product Name:" . $pname . "<br />Gene sequence:" . $_POST["gene_seq"] . "<br />Comment:" . $_POST["opt_name"]);
			
            
        if($this->email->send()){
			
			$data = array(
			
				'customer_id' => $this->session->userdata('id'),
				'prod_name' => $pname,
				'gene_seq' => $_POST["gene_seq"],
				'comment' => $_POST["opt_name"],
				'inquire_date' => date("m/d/Y", mktime()),
				'quote' => "processing"
			);
			
			$this->inquire_model->add_record($data);
            $data['main_content'] = 'tkinquire';
			$this->load->view('includes/template',$data);
        }
        else{
            	
			show_error($this->email->print_debugger());
        }
		}
	}
	*/
	function show() {
		
		$cart = $this->cart->contents();
		
		echo "<pre>";
		print_r($cart);
	}
	
	// remove item from cart
	function remove($rowid) {
		
		$this->cart->update(array(
			'rowid' => $rowid,
			'qty' => 0
		));
		
		$this->cart_model->delete();
		
		// if logged in
		if( $this->session->userdata('login_state') ) 
		{
			redirect('cart');
		} 
		
		// not logged in
		else
		{
			$data['main_content'] = 'shoppingcart';
			$this->load->view('includes/template',$data);
		}
		
	}
	
	//destroy cart
	function destroy() {
		
		$this->cart->destroy();
		echo "destroy() called";
	}
}
