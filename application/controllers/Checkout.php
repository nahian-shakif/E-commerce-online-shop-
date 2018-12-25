<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout extends CI_Controller {

	public function __construct()
    {
		parent::__construct();
		$this->load->model('Category_model');
		$this->load->model('Checkout_model');
		$this->load->model('User_model');
	
      
    }


	
	public function index()
	{
        
		
		if($this->session->userdata('cart') == '[]') {
			redirect('home');
		}

		$data['cartArray'] = json_decode($this->session->userdata('cart'));
		$UserID = $this->session->userdata('current_user_id');
		$data['userData'] = $this->User_model->GetLoggedInUserData($UserID);
		
		$data['cat'] = $this->Category_model->GetSubCategories();
	    $data['subcat'] = $this->Category_model->GetSubCategoriesForCategories();
	
	
			
		$this->load->view('client/header',$data);
		$this->load->view('client/check-out',$data);

		$this->load->view('client/footer');
		
			

	}

	
	public function place_order() {

		$cartArray = json_decode($this->session->userdata('cart'));
		$clientID = $this->session->userdata('current_user_id');
		$this->Checkout_model->place_order($cartArray,$clientID);
		
	}
	
	
   

   

 }


