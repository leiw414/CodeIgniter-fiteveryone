<?php
class Products extends CI_Controller{
	
	// Get all info of all products.
	function index(){
		
		$this->load->model('products_model');
		
		$data['products'] = $this->products_model->get_all();
		$data['main_content'] = 'products';
		
		$this->load->view('includes/template',$data);
	}
	
	// Get info of all tea that is black tea.
	function black_tea(){
		
		$this->load->model('products_model');
		
		$data['products'] = $this->products_model->get_black();
		$data['nav'] = 'Black tea';
		$data['main_content'] = 'products';
		$this->load->view('includes/template',$data);
	}
	
	// Get info of all tea that is green tea.
	function green_tea(){
		
		$this->load->model('products_model');
		
		$data['products'] = $this->products_model->get_green();
		$data['nav'] = 'Green tea';
		$data['main_content'] = 'products';
		$this->load->view('includes/template',$data);
	}
	
	// Get info of all tea that is bagged tea.
	function tea_bag(){
		
		$this->load->model('products_model');
		
		$data['products'] = $this->products_model->get_bag();
		$data['nav'] = 'Tea bag';
		$data['main_content'] = 'products';
		$this->load->view('includes/template',$data);
	}
	
	/*function pro_test(){
		$data['main_content'] = 'pro_test';
		$this->load->view('includes/template',$data);
	
	}*/
	
	// Get product info according to product id.
	function product($product_id){
	
		$this->load->model('products_model');
		
		$data['product'] = $this->products_model->get_product($product_id);
		$data['main_content'] = 'product';
		
		$this->load->view('includes/template',$data);
	}
	
}