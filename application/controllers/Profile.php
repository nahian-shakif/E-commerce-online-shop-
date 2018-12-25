<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function __construct()
    {
		parent::__construct();
		
		$this->load->model('Creation_model');
		$this->load->model('Login_model');
		$this->load->model('Form_model');
		$this->load->model('Category_model');
		$this->load->model('order_model');
		$this->load->model('User_model');
	
      
    }



	public function ViewAccount()
		{
			# code...
			$data['cat'] = $this->Category_model->GetSubCategories();
			$data['subcat'] = $this->Category_model->GetSubCategoriesForCategories();

		$UserID =  $this->session->userdata('current_user_id');
		$data['myproducts'] = $this->User_model->GetMyProducts($UserID);

		$data['userdata'] =$this->User_model->GetLoggedInUserData($UserID);
 
			$this->load->view('client/header',$data);
			$this->load->view('client/account_view');
			$this->load->view('client/footer');
	}

	public function CheckAddToFvrtLogin()
	{
		# code...
		if($this->session->userdata('current_user_id') == false){

			echo "0";
		
			
		}elseif($this->session->userdata('current_user_id') == true){

			echo "1";
		}
	}

	public function AddToFavourite()
	{
		# code...
		$product_id = $this->input->post('product_id');
		$client_id = $this->input->post('client_id');
		$dataProduct = array(

			'product_id' => $product_id,
			'client_id' => $client_id,
			'time_added' =>  date('Y-m-d H:i:s'),
		);
		$data = $this->User_model->AddToFavourite($dataProduct);
		if($data){

			echo "1";
		}
	}

	public function Favourites($UserID)
	{
		# code...
		$data['ProductListData'] = $this->User_model->Favourites($UserID);

		$data['cat'] = $this->Category_model->GetSubCategories();
		$data['subcat'] = $this->Category_model->GetSubCategoriesForCategories();
		 $UserID = $this->session->userdata('current_user_id');
		
			$this->load->view('client/header',$data);
			$this->load->view('client/favourite_view',$data);
			$this->load->view('client/footer');

	}

	public function ProductRating()
	{
		# code...
		$rating = $this->input->post('rating');
		$product_id = $this->input->post('product_id');
		$userID = $this->input->post('client_id');
		
		$dataProduct = array(

			'client_id' => $userID,
			'product_id' => $product_id,
			'rating' => $rating
		);
		$data = $this->User_model->ProductRating($dataProduct);
		if($data){

			echo "1";
		}
		
		
	}
	public function AccountUpdate(){
        
		$name = $this->input->post('fullname'); 
		$address = $this->input->post('address'); 
		$phone = $this->input->post('phone'); 
		$client_id = $this->input->post('client_id'); 


		$UpdateData = array(
			
			'fullname'=> $name,	 
			'address'=> $address,	
			'phone'=> $phone,	
			
		   
										
			
	 );
	 //echo "<pre>"; print_r($UpdateData);
	
	$this->db->where('client_id', $client_id);
	$this->db->update('client', $UpdateData);
	
	if($this->db->affected_rows() > 0){
		echo '<div class="col-md-6 alert alert-success input-height">Account Has been Updated</div>';
	}else{
		echo '<div class="col-md-6 alert alert-success input-height">Something went wrong</div>';
	}
	
	
	 
}
		
		
   

 }


