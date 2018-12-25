<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
		$this->load->model('Login_model');
		$this->load->model('Form_model');
		$this->load->model('Category_model');
		
    }


	
	public function index()
	{
		$data['cat'] = $this->Category_model->GetSubCategories();
		$data['subcat'] = $this->Category_model->GetSubCategoriesForCategories();
	
		$data['PopularProductListData'] = $this->Category_model->GetPopularProducts();
				
		$data['title'] = "Welcome to Ecommerce Shop";
		
		
			$this->load->view('client/header',$data);
			$this->load->view('client/home',$data);
			$this->load->view('client/footer');

	
		
		
		
	}
  
	
}
	
