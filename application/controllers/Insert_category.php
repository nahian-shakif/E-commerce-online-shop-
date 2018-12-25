<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Insert_category extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
	
        $this->load->model('Form_model');
        $this->load->model('Contact_model');
        $this->load->model('Creation_model');
        $this->load->model('Login_model');
        $this->load->model('Access_model');
        $this->load->model('Category_model');
        

    }

    public function InsertCategoryName()
    {
        # code...
        $cat_name = $this->input->post('category_name');
        $data = array(

            'category_name'=> strip_tags($cat_name) ,
            'cat_status'=> 1
        );
        $insert = $this->Category_model->InsertCategoryName($data);
        if(!$insert){
            
            $this->session->set_flashdata('posted', 'Not Inserted');
            redirect($_SERVER['HTTP_REFERER']);
         }
         else{
            $this->session->set_flashdata('posted', 'Inserted successfully ');
            redirect($_SERVER['HTTP_REFERER']);
         }

    }

    public function InsertSubCategory()
    {
        # code...
        $cat_id = $this->input->post('cat_id');
        $subcat_name = $this->input->post('sub_category_name');
        $data = array(

            'category_id'=> $cat_id,
            'sub_cat_name'=> strip_tags($subcat_name) ,
            'subcat_status'=> 1

        );
        $insert = $this->Category_model->InsertSubCategoryName($data);
        if(!$insert){
            
            $this->session->set_flashdata('posted', 'Not Inserted');
            redirect($_SERVER['HTTP_REFERER']);
         }
         else{
            $this->session->set_flashdata('posted', 'Inserted successfully ');
            redirect($_SERVER['HTTP_REFERER']);
         }

    }
    

    public function addtocat(){

     

        $type= explode('.', $_FILES['file']['name']);
        $type = $type[count($type)-1];
       
       



        $url = "uploads/products/images/".uniqid(rand()).".".$type;
        //var_dump($url);
        if(in_array($type, array('jpg','jpeg','png','JPG','JPGE','PNG') ) )
        {
            if(is_uploaded_file($_FILES['file']['tmp_name']))
            {
               move_uploaded_file($_FILES['file']['tmp_name'],$url);
             }

        }
    

        $Data_product = array(
            
            'category_id' => $this->input->post('cat_id'),
            'sub_category_id' => $this->input->post('sub_cat_id'),
            'price' => abs($this->input->post('price')),
            'sale' => abs($this->input->post('sale')),
            'measurement' => $this->input->post('measurement'),
            'quantity' => abs($this->input->post('quantity')),
            'product_name' => $this->input->post('product_name'),
            'image' => $url,
            'product_description' => $this->input->post('desciption'),
                        
                        
            
        );


      
        $insert = $this->Category_model->AddToProductCategory($Data_product);
    
        if($insert){
            
                        $this->session->set_flashdata('posted', 'Product Inserted Successfully');
                        redirect($_SERVER['HTTP_REFERER']);
                     }
                     else{
                       $this->session->set_flashdata('posted', 'Product Inserted Successfully');
                       redirect($_SERVER['HTTP_REFERER']);
                     }
       
       

    }        

 }


