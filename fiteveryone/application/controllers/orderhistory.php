<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Orderhistory extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	function index()
	{
		if( $this->session->userdata('login_state')) 
		{
            $data = array();
		
			if($query = $this->Ordhistory_model->getAll())
			{
				$data['records'] = $query;
			}
			
			$data['main_content'] = 'orderhistory';
			$this->load->view('includes/template',$data);
			
        } 
		else
		{
			redirect('login');
		}
	}
	function Viewmore($order_no)
	{
		if($query = $this->Ordhistory_model->get_sp_record($order_no)){
				$data['sp'] = $query;
		}
		if($q = $this->Ordhistory_model->get_item_records($order_no)){
				$data['item'] = $q;
		}	
		$this->load->view('invoice',$data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */