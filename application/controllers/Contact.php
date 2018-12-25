<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
	
        $this->load->model('Form_model');
        $this->load->model('Contact_model');
        $this->load->model('Category_model');
    }


	
	public function index()
	{
        
       

			$this->load->view('client/header');
			$this->load->view('client/contact-page');
			$this->load->view('client/footer');

	
		
    }



}