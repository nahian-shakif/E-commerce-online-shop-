<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Login_model');
        $this->load->model('order_model');
        $this->load->model('creation_model');
        $this->load->model('category_model');
        $this->load->model('Search_model');
    }

	
    public function GetProducts(){
        $keyword =  $this->input->get('keyword');
        $SearchResult = $this->Search_model->GetProducts($keyword);
        echo json_encode($SearchResult);
        //echo json_encode($keyword);
    }

       
        
 }	

