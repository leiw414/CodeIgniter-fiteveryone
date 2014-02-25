<?php
class Products extends CI_Controller{
	
	function index(){
		
		$this->load->model('products_model');
		
		$data['products'] = $this->products_model->get_all();
		$data['main_content'] = 'products';
		
		$this->load->view('includes/template',$data);
	}
	function black_tea(){
		
		$this->load->model('products_model');
		
		$data['products'] = $this->products_model->get_black();
		$data['nav'] = 'Black tea';
		$data['main_content'] = 'products';
		$this->load->view('includes/template',$data);
	}
	
	function green_tea(){
		
		$this->load->model('products_model');
		
		$data['products'] = $this->products_model->get_green();
		$data['nav'] = 'Green tea';
		$data['main_content'] = 'products';
		$this->load->view('includes/template',$data);
	}
	
	function tea_bag(){
		
		$this->load->model('products_model');
		
		$data['products'] = $this->products_model->get_bag();
		$data['nav'] = 'Tea bag';
		$data['main_content'] = 'products';
		$this->load->view('includes/template',$data);
	}
	
	function pro_test(){
		$data['main_content'] = 'pro_test';
		$this->load->view('includes/template',$data);
	
	}
	
	function product($product_id){
	
		$this->load->model('products_model');
		
		$data['product'] = $this->products_model->get_product($product_id);
		$data['main_content'] = 'product';
		
		$this->load->view('includes/template',$data);
	}
	
}