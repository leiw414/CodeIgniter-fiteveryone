<?php 
class Company extends CI_Controller {
	// Direct to the company page.
	function index(){
	
		$data['main_content'] = 'company';
		$this->load->view('includes/template',$data);
	}
	
}