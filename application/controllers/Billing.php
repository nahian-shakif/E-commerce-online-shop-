
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Billing extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
	
        $this->load->model('Form_model');
        $this->load->model('Contact_model');
        $this->load->model('Creation_model');
        $this->load->model('User_model');
        $this->load->model('Login_model');
        $this->load->model('Checkout_model');
        $this->load->model('Category_model');

        

    }

    public function index(){

       $cartArray = json_decode($this->session->userdata('cart'));
       $UserID = $this->session->userdata('current_user_id');
     
       $grand_total = 0;
      
       foreach($cartArray as $item){

             $item_price = $item->price * $item->qnty;
             $grand_total += $item_price;
       }
        
       $data['grand_total'] = $grand_total;
       $data['userData'] = $this->User_model->GetLoggedInUserData($UserID);
       $data['ReferrenceNo']= $this->generateRandomString(); 
       $data['UserID']= $UserID; 

       /** This functions used for menubar */
       $data['cat'] = $this->Category_model->GetSubCategories();
	   $data['subcat'] = $this->Category_model->GetSubCategoriesForCategories();
       /** This functions used for menubar */
       			
		$this->load->view('client/header',$data);
		$this->load->view('client/billing',$data);
		$this->load->view('client/footer');

    }
    public function generateRandomString($length = 8){
        $characters = '0123456789ACDE';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    public function Payment_success()
    {
        # code...
        $UserID = $this->input->post('user_id');
        $TransactionID = $this->input->post('transaction_id');
        $ReferrenseId = $this->input->post('referrence_id');
         $grand_total = $this->input->post('grand_total');
         
        $cartArray = json_decode($this->session->userdata('cart'));
        $response = $this->Checkout_model->place_order($cartArray,$UserID,$grand_total,$ReferrenseId,$TransactionID);
        if($response){

            $this->Invoice();

        }
    }

    public function Invoice()
    {
        # code...

        $data['cat'] = $this->Category_model->GetSubCategories();
        $data['subcat'] = $this->Category_model->GetSubCategoriesForCategories();
      
        $this->load->view('client/header',$data);
		$this->load->view('client/payment_success',$data);
		$this->load->view('client/footer');

    }

    

 }


