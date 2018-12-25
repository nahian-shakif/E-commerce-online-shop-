<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
		$this->load->model('Login_model');
		$this->load->model('Category_model');
		$this->load->model('User_model');
    }

	
	public function index()
	{
		$this->load->view('login/admin-login');
    }
	/** Admin and Dashboard Section Start */
			public function admin_login(){

				$this->form_validation->set_rules('username', 'USER NAME', 'trim|xss_clean|min_length[3]'); // validation of input data from form
				$this->form_validation->set_rules('password', 'USER PASSWORD', 'trim|xss_clean');
				
				$this->form_validation->set_rules('role', 'role', 'trim|xss_clean');

				if($this->form_validation->run() == FALSE){

					//$this->load->view('login_page_view'); 
					echo "validation error";
				}
				else
				{

				

					$result = $this->Login_model->admin_login_data_check();

					if($result)
					{
						
						redirect('dashboard');
						//echo "Done";
						
					}
					else
					{

						
						$data['errorLogin'] = 'Username or Password is invalid';
						
						$data['notadmin'] = 'You have no permission to access this admin panel';
						$this->load->view('login/admin-login',$data); 
						//echo "someting is wrong";
					}
				}
			}
			// Admin logout method
			public function logout(){
				
							$this->session->unset_userdata('current_admin_id');
							$this->session->unset_userdata('current_admin_name');
				
							$this->session->sess_destroy();
				
							redirect('Login/?logout=success');
			}
	/** Admin and Dashboard Section Ends */


	/** User  Section Start */

	public function loginview()
	{
		# code...
		$data['BreadCumbs'] =  "Login";
		$this->load->view('client/headernew',$data);
		$this->load->view('client/login_view');
		$this->load->view('client/footer_js');

	}
	public function CheckIfUserIsLoggedIn()
	{
		# code...
		 if($this->session->userdata('current_user_id') == false){

			echo "0";
		
			
		}elseif($this->session->userdata('current_user_id') == true){

			echo "1";
		}
	}
	
	public function userlogin(){

		$result = $this->Login_model->user_login_data_check();
		if($result == TRUE){
			
			echo "1";
			//redirect($_SERVER['HTTP_REFERER']);
		}else{

			echo "0";
		}
	}
	public function user_logout()
	 {
			 			//echo "<pre>"; print_r($_SERVER); exit;
			
			$this->session->unset_userdata('current_user_id');
			$this->session->unset_userdata('current_fullname');
			$this->session->unset_userdata('session_client_role');
			$this->session->unset_userdata('session_email');
						
			
			$this->session->sess_destroy();
			
			// redirect($_SERVER['HTTP_REFERER']);
			 redirect('home');
	}

		/** User  Section Ends */
		   	   
   
		
		


	}
		

