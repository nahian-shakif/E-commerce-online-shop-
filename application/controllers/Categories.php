<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categories extends CI_Controller {

	public function __construct()
    {
		parent::__construct();
		$this->load->model('Category_model');
		$this->load->model('User_model');
	
      
    }


	
	public function index()
	{
        
		$result = $this->Category_model->getCat();
		echo json_encode($result);
		
		
	}



   public function GetProductBySubCategory($SubCatID,$ProductName)
   {
	   # code...
	 // echo $SubCatID.".".$ProductName;
	  // echo "<pre>"; print_r($data['ProductListData']); exit;
	   $data['BreadCumbs'] =  urldecode($ProductName);

	   $data['cat'] = $this->Category_model->GetSubCategories();
	   $data['subcat'] = $this->Category_model->GetSubCategoriesForCategories();

	   $data['ProductListData'] = $this->Category_model->GetProductBySubCategories($SubCatID);

 
 		
		$this->load->view('client/header',$data);
		$this->load->view('client/shop-page',$data);
		$this->load->view('client/footer');

	   
	  
   }

   public function SingleProductDetails($ProductID,$ProductName)
   {

	   $data['SingleProductData'] = $this->Category_model->GetSingleProductDetails($ProductID);
	   $data['cat'] = $this->Category_model->GetSubCategories();
	   $data['subcat'] = $this->Category_model->GetSubCategoriesForCategories();
	   $data['BreadCumbs'] =  urldecode($ProductName);
	   $data['rating'] = $this->User_model->GetRating($ProductID);

	    $UserID = $this->session->userdata('current_user_id');
		$data['IfAddedToFvrt'] = $this->User_model->CheckIfAddedToFvrt($ProductID,$UserID);
	    	
			$this->load->view('client/header',$data);
			$this->load->view('client/single-product-details',$data);
			$this->load->view('client/footer');

   }
	

 }


