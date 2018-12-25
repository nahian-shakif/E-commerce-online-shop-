<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
	
        $this->load->model('Form_model');
        $this->load->model('Contact_model');
        $this->load->model('Creation_model');
        $this->load->model('Login_model');
        $this->load->model('Access_model');
        

    }

    public function setDataToSession(){

        $cartData = $this->input->post('cartData');
        $this->session->set_userdata('cart',$cartData);
    }

    

 }


