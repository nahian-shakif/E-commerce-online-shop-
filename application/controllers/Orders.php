<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Orders extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Login_model');
        $this->load->model('order_model');
        $this->load->model('Category_model');
    }

	
    public function index()
	{
        $data['orders'] = $this->order_model->getOrders();
        //echo "<pre>"; print_r($data['orders']); exit;
        if(!empty($data['orders'])){

			$myCustomArray = array();
			foreach($data['orders'] as $result){
					
				$ref = $result->reference_no;
				if(array_key_exists($ref, $myCustomArray)){
					array_push($myCustomArray[$ref], (array) $result);
				
				
				}
				else{
					$myCustomArray[$ref] = array();
					array_push($myCustomArray[$ref], (array) $result);
				}
			
			}	
            $data['OrderResOBJ'] = json_decode(json_encode($myCustomArray));
			//echo "<pre>"; print_r($data['ProResOBJ']); exit;
		 
        $this->load->view('dashboard/header');
        $this->load->view('dashboard/orders',$data);
        $this->load->view('dashboard/footer');
    }
}
    public function ViewInvoice($order_master_id,$order_id,$client_id){

        $data['order_details'] = $this->order_model->getOrderDetails($order_id,$order_master_id,$client_id);
         //$data['customer_details'] = $this->order_model->getCustomeretails($client_id);
      //echo "<pre>"; print_r($data['order_details']); exit;
         $myCustomArray = array();
			foreach($data['order_details'] as $result){
					
				$ref = $result->fullname;
				if(array_key_exists($ref, $myCustomArray)){
					array_push($myCustomArray[$ref], (array) $result);
				
				
				}
				else{
					$myCustomArray[$ref] = array();
					array_push($myCustomArray[$ref], (array) $result);
				}
			
			}	
            $data['OrderResOBJ'] = json_decode(json_encode($myCustomArray));
            //echo "<pre>"; print_r($data['OrderResOBJ']); exit;
        $this->load->view('dashboard/header');
        $this->load->view('dashboard/invoice',$data);
        $this->load->view('dashboard/footer');

   // echo "Order ID - ".$order_id." Order Master ID:-".$order_master_id." Client ID:- ".$client_id;
        

    }
    
    public function ShippedOrder($order_master_id,$email,$transaction_id)
    {
        # code...
        $data = array(


			'status'=> 4,
		

		);
		$this->db->where('order_master_id', $order_master_id);
		$this->db->update('order_master', $data);
		if($this->db->affected_rows() > 0){
            $DecodeEmail = urldecode($email);
            $data['transaction_ID'] = $transaction_id;
                 $this->load->library('email');
				$this->email->set_newline("\r\n");
				$this->email->from('shakif013@gmail.com', 'Welcome');
				
		
				//echo $link;
				$this->email->to($DecodeEmail); 
				
				$this->email->subject('Greetings from E-commerce solution'); 
				
				$this->email->set_header('MIME-Version', '1.0; charset=utf-8');
				
				$this->email->set_header('Content-type', 'text/html');
				
				$body = $this->load->view('email/shipping',$data,TRUE);
				
				$this->email->message($body);   
				
                $this->email->send();
                
                $this->session->set_flashdata('success','<div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><i class="fa fa-warning"></i>Product Shipping status updated successfully</div>');
                redirect($_SERVER['HTTP_REFERER']);
		}else{

			echo "2";
		}
    }
    

    public function ViewShippedOrders()
    {
        # code...
        $data['orders'] = $this->order_model->getOrders();
        //echo "<pre>"; print_r($data['orders']); exit;
        if(!empty($data['orders'])){

			$myCustomArray = array();
			foreach($data['orders'] as $result){
					
				$ref = $result->reference_no;
				if(array_key_exists($ref, $myCustomArray)){
					array_push($myCustomArray[$ref], (array) $result);
				
				
				}
				else{
					$myCustomArray[$ref] = array();
					array_push($myCustomArray[$ref], (array) $result);
				}
			
			}	
            $data['OrderResOBJ'] = json_decode(json_encode($myCustomArray));
			//echo "<pre>"; print_r($data['ProResOBJ']); exit;
        $this->load->view('dashboard/header');
        $this->load->view('dashboard/orders',$data);
        $this->load->view('dashboard/footer');
    }
} 



}














 //This section is for Edit

	// public function ViewAbc()
    // {
       
    //     $this->load->view('dashboard/header');
    //     $this->load->view('dashboard/abc');
    //     $this->load->view('dashboard/footer');
    
	
        
	// }
	// public function insertAbc()
    // {
       
    //     $cat_name = $this->input->post('ccategory_name');
    //     $data = array(

    //         'c_cat_name'=> strip_tags($cat_name) ,
    //         'status'=> 1
    //     );
    //     $insert = $this->Category_model->InsertCCategoryName($data);
    //     if(!$insert){
            
    //         $this->session->set_flashdata('posted', 'Not Inserted');
    //         redirect($_SERVER['HTTP_REFERER']);
    //      }
    //      else{
    //         $this->session->set_flashdata('posted', 'Inserted successfully ');
    //         redirect($_SERVER['HTTP_REFERER']);
    //      }
	
        
    // }
		

