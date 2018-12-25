<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Creation extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
		 $this->load->model('Login_model');
		// $this->load->model('Form_model');
        $this->load->model('Contact_model');
        $this->load->model('Creation_model');
	
    }

	
    public function CreateAdmin() //Create Admin Page View Only
	{
        $data['breadcumbs'] = 'Admin Create Section';
		$data['home'] = '<a href="Dashboard">Home</a>';
        if($this->Login_model->is_admin_logged_in() )
		{
			
			
				
			$this->load->view('dashboard/header',$data);
			$this->load->view('dashboard/admin_create');
			$this->load->view('dashboard/footer');

		}
		else{
			redirect('login/?logged_in_first');
		}

		
    }
    public function admin_create_request() //Admin Creating Form
    {

        $this->form_validation->set_rules('username', 'User Name', 'trim|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'trim|xss_clean');
       

        if ($this->form_validation->run() == FALSE) 
        {
                
                $data['TotalMessage'] = $this->Contact_model->GetContactMessageDataNumber();
                $data['ListMessage'] = $this->Contact_model-> GetContactMessage();
               
                $data['Error'] = 'Something is wrong here !!! We can not accept your request';
                $this->load->view('dashboard/header',$data);
                $this->load->view('dashboard/admin_create');
                $this->load->view('dashboard/footer');
        } 
        else 
        {
       
        $CreateAdminData = array(
            'username' => $this->input->post('username'),
            'password' => md5($this->input->post('password')),
            'role' => 'admin'
          
            
        );
        //var_dump($CreateAdminData);
        $insert = $this->Creation_model->AdminCreateRequest($CreateAdminData);
         if($insert == TRUE){
            echo "Admin Created Successfully";
           // echo json_encode(array("status" => TRUE));
        }
        

    }
    
    }

    function process(){
        
                $id = $this->input->post('item');
         
                $data["result"] = $this->Creation_model->GetAdminDetails($id);
        
                $var = json_encode($data);

                //$var2 = json_decode($var);
        
                echo $var;
        
    }


    public function AdminList(){
        
                if($this->Login_model->is_admin_logged_in() )
                {
                    $data['TotalMessage'] = $this->Contact_model->GetContactMessageDataNumber();
                    $data['ListMessage'] = $this->Contact_model-> GetContactMessage();
                    
                    // admin list data
                    //$data['AdminList'] = $this->Creation_model-> GetAdminList();
                    
                    
                    
                        
                     $this->load->view('dashboard/header',$data);
                    $this->load->view('dashboard/admin_list',$data);
                    $this->load->view('dashboard/footer',$data);
                    
        
                }
                else{
                    redirect('login/?logged_in_first');
                }
        
        
            }
        function showAdmin(){


            $result = $this->Creation_model-> GetAdminList();
            echo json_encode($result);
            
        } 
        function singleadmin(){
            
            
                        $result = $this->Creation_model-> signleadmindetails();
                        echo json_encode($result);
                        
        } 
        public function updateAdmin(){
            $result = $this->Creation_model->updateAdminIndividual();
            $msg['success'] = false;
            $msg['type'] = 'update';
            if($result){
                $msg['success'] = true;
            }
            echo json_encode($msg);
        }
        public function singleclienttdetails(){

            $result = $this->Creation_model-> singleclientdetails();
            echo json_encode($result);
        }
        public function updateclient(){

            $result = $this->Creation_model->updateClientIndividual();
            
            if($result){
                echo json_encode("Information Updated");
            }
            else{
                echo json_encode("Not Updated");
            }
            
        }
}

