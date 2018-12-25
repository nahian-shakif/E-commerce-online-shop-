<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registration extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('login_model');
        $this->load->model('Creation_model');
    }

	
	public function index()
	{
        //$this->load->view('login/admin-login');
        
    }
    public function UserRegistration(){
        
       $PasswordForEmail = $this->input->post('password');
		$Password =  md5($PasswordForEmail);
		$ConfirmPassword =  md5($this->input->post('c_password'));
		$email =  $this->input->post('email');
		
		$this->form_validation->set_rules('email','Email','required|valid_email|is_unique[client.email]');
		if($this->form_validation->run() == FALSE){
			
			echo "3";
			die();
		}
		if($Password != $ConfirmPassword){
			
			echo "2";
			die();
		}
	
		else{

			$CreateUserData = array(
				'fullname' => $this->input->post('name'),
				'password' => $Password,
				'email' => $email,
				'date_created' => date('Y-m-d H:i:s'),
				'role' => 'user',
				'address' => $this->input->post('address'),
				'phone' => $this->input->post('phone'),
				
			  
				
			);
			$insert = $this->Creation_model->UserCreateRequest($CreateUserData);
			 if($insert == TRUE){

				$this->load->library('email');
				$this->email->set_newline("\r\n");
				$this->email->from('shakif013@gmail.com', 'Welcome');
				
				$data['email'] =  $email;
				$data['password'] =  $PasswordForEmail;
				//echo $link;
				$this->email->to($email); 
				
				$this->email->subject('Greetings from E-commerce solution'); 
				
				$this->email->set_header('MIME-Version', '1.0; charset=utf-8');
				
				$this->email->set_header('Content-type', 'text/html');
				
				$body = $this->load->view('email/greetings',$data,TRUE);
				
				$this->email->message($body);   
				
				$this->email->send();
				echo "1";
			   // echo json_encode(array("status" => TRUE));
			}
		}
        
       
      


    }
    
    // public function admin_login(){

	// 	$this->form_validation->set_rules('username', 'USER NAME', 'trim|xss_clean|min_length[3]'); // validation of input data from form
	// 	$this->form_validation->set_rules('password', 'USER PASSWORD', 'trim|xss_clean');
		
	// 	$this->form_validation->set_rules('role', 'role', 'trim|xss_clean');

	// 	if($this->form_validation->run() == FALSE){

	// 		//$this->load->view('login_page_view'); 
	// 		echo "validation error";
	// 	}
	// 	else
	// 	{

		

	// 		$result = $this->login_model->admin_login_data_check();

	// 		if($result)
	// 		{
				
	// 			redirect('dashboard');
	// 			//echo "Done";
				
	// 		}
	// 		else
	// 		{

				
	// 			$data['errorLogin'] = 'Username or Password is invalid';
				
	// 			$data['notadmin'] = 'You have no permission to access this admin panel';
	// 		    $this->load->view('login/admin-login',$data); 
	// 			//echo "someting is wrong";
	// 		}
	// 	}
	// }
	// // Admin logout method
	// public function logout(){
		
	// 				$this->session->unset_userdata('current_admin_id');
	// 				$this->session->unset_userdata('current_admin_name');
		
	// 				$this->session->sess_destroy();
		
	// 				redirect('Login/?logout=success');
	// 			}
		
}
