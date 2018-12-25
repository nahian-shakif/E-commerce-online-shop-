<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forget_password extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
	
        $this->load->model('Form_model');
        $this->load->model('Contact_model');
        $this->load->model('Creation_model');
        $this->load->model('Login_model');
        $this->load->model('Access_model');
        

    }
    public function do_forget()
    {
        $email = $this->input->post('email');
        $query = $this->db->query("SELECT email FROM client WHERE email = '$email'");
        if($query->result() == true){
            
                 $this->load->library('email');
				$this->email->set_newline("\r\n");
				$this->email->from('shakif013@gmail.com', 'Welcome');
				
				$data['link'] =  base_url('Forget_password/ResetPassword/'.urlencode($email));
				
                //echo $link;
           
				$this->email->to($email); 
				
				$this->email->subject('Reset Password'); 
				
				$this->email->set_header('MIME-Version', '1.0; charset=utf-8');
				
				$this->email->set_header('Content-type', 'text/html');
				
				$body = $this->load->view('email/reset-email',$data,TRUE);
				
				$this->email->message($body);   
				
				$this->email->send();
                    $dataReset = array(

                        'link' => $data['link'],
                        'status' => 1
                    );
                    $this->db->insert('reset_password', $dataReset);
                    echo "1";
               

           

        }else{



            echo "0";
        }
    }

    public function ResetPassword($email)
    {
        # code...
        //echo urldecode($email);
        $data['email'] = urldecode($email);
        $data['title'] = "Reset Password";
		
		
			$this->load->view('client/header',$data);
			$this->load->view('client/reset-password',$data);
			$this->load->view('client/footer');

    }
    public function Reset()
    {
        # code...
        $email = $this->input->post('email');
        $password = md5($this->input->post('password'));
        $c_password = md5($this->input->post('c_password'));
        if($password == $c_password){

            $field = array(

                'password'=> $password,
            );
            $this->db->where('email', $email);
            $this->db->update('client', $field);
            if($this->db->affected_rows() > 0){
    
               
                echo "1";
    
            }else{
                
                echo "1";
            }


        }else{

            echo "0";
        }

        
    }



    

 }



