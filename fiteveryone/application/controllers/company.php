<?php 
class Company extends CI_Controller {

	function index(){
	
		$data['main_content'] = 'company';
		$this->load->view('includes/template',$data);
	}
	
}