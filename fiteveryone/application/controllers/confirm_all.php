<?php 
class Confirm_all extends CI_Controller {

	function index(){
		
		$this->session->set_userdata('order_id', mktime());
		$data['main_content'] = 'confirmall';
		$this->load->view('includes/template',$data);
	}
}
