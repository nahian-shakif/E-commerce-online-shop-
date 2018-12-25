<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
		$this->load->model('Login_model');
		$this->load->model('Form_model');
		$this->load->model('Contact_model');
		$this->load->model('Creation_model');
		$this->load->model('Category_model');
		
    }


	
	public function index()
	{
		if($this->Login_model->is_admin_logged_in() )
		{
			
			

			
			
			$this->load->view('dashboard/header');
			$this->load->view('dashboard/home');
			$this->load->view('dashboard/footer');

		}
		else{
			redirect('login/?logged_in_first');
		}
		
	}
	

	#contact page
	
	public function Category(){

		if($this->Login_model->is_admin_logged_in() )
		{
			

			
			$data['current_categories'] = $this->Category_model->GetCategories();
			$data['page_title'] = "Insert products category";
			$this->load->view('dashboard/header',$data);
			$this->load->view('dashboard/insert_category',$data);
			$this->load->view('dashboard/footer');

		}
		else{
			redirect('login/?logged_in_first');
		}

	}
	public function SubCategory()
	{
		# code...
		if($this->Login_model->is_admin_logged_in() )
		{
			
			
			$data['CategoryList'] = $this->Category_model->GetCategories();
			//echo"<pre>"; print_r($data['CategoryList']); exit;
			$data['SubCategoryList'] = $this->Category_model->GetSubCategoriesForDashBoard();
			//echo"<pre>"; print_r($data['CategoryList']); exit;
			$data['page_title'] = "Insert products sub-category";
			$this->load->view('dashboard/header',$data);
			$this->load->view('dashboard/insert_sub_category',$data);
			$this->load->view('dashboard/footer');

		}
		else{
			redirect('login/?logged_in_first');
		}
	}

	public function InsertProduct()
	{
		# code...
		if($this->Login_model->is_admin_logged_in() )
		{
			
		
			$data['CategoryList'] = $this->Category_model->GetCategories();
			$data['SubCategoryList'] = $this->Category_model->GetSubCategoriesLists();
			//var_dump($data['CategoryList']); exit;
			$data['page_title'] = "Insert product's details";
			$this->load->view('dashboard/header',$data);
			$this->load->view('dashboard/insert_product',$data);
			$this->load->view('dashboard/footer');

		}
		else{
			redirect('login/?logged_in_first');
		}
	}
	public function ProductList(){

		$this->load->view('dashboard/header');
		$data['cat'] = $this->Category_model->GetProductList();
		$this->load->view('dashboard/product_list',$data);
		$this->load->view('dashboard/footer');
	}
	public function subcatname(){

		$category_id = $this->input->post('category_id');

		$subcategory = $this->Category_model->get_subcat_name($category_id);
		
		if(!empty($subcategory)>0){

			$subcat_select_box = '';
			$subcat_select_box .= '<option value="">Select Sub category</option>';
			foreach($subcategory as $subcat){

				$subcat_select_box .='<option value="'.$subcat->sub_cat_id.'">'.$subcat->sub_cat_name.'</option>';

			}
			echo $subcat_select_box;
		}
		//echo "<pre>"; print_r($subcategory);

	}
	public function showallproduct(){

		$sub_cat_id = $this->input->post('sub_cat_id');
		$result = $this->Category_model->GetAllProducts($sub_cat_id);
		echo json_encode($result);
		//echo $result;

		
				
	}
	public function deleteproduct(){

		$id = $this->input->post('product_id');
		$result = $this->Category_model->deleteProduct($id); 
		echo $result;

	}

	public function singleproductdetails(){
		$product_id= $this->input->get('product_id');
		$result = $this->Category_model->singleproductdetails($product_id);
		echo json_encode($result);
	}
	public function updateproduct(){

		$result = $this->Category_model->updateProductIndividual();
		
		
		if($result){
            
                      echo '1';
                     }
                     else{
                       echo '0';
					 }

	}

	public function CategoryVisibility($visibility_status,$catergory_id)
	{
		# code...
		if($visibility_status == '1'){

			$field = array(

					'cat_status'=> $visibility_status,
				);
				$this->db->where('category_id', $catergory_id);
				$this->db->update('category', $field);
				if($this->db->affected_rows() > 0){
					$this->session->set_flashdata('visibility', 'Visibility Status changed to published');
					redirect($_SERVER['HTTP_REFERER']);
				}else{
					$this->session->set_flashdata('visibility', 'Not changed');
					redirect($_SERVER['HTTP_REFERER']);
				}
		}
		if($visibility_status == '0'){

			$field = array(

					'cat_status'=> $visibility_status,
				);
				$this->db->where('category_id', $catergory_id);
				$this->db->update('category', $field);
				if($this->db->affected_rows() > 0){

					$this->session->set_flashdata('visibility', 'Visibility Status changed to un-published');
					redirect($_SERVER['HTTP_REFERER']);

				}else{
					$this->session->set_flashdata('visibility', 'Not changed');

					redirect($_SERVER['HTTP_REFERER']);
				}
		}
		

	}
	public function getCatName()
	{
		# code...
		$category_id = $this->input->post('category_id');
		$query= $this->db->query("SELECT * FROM category WHERE category_id ='$category_id'");
		echo json_encode($query->result());
	}
	public function ChangeCatergoryName()
	{
		# code...

		$category_name = $this->input->post('category_name');
		$category_id = $this->input->post('category_id');

		$field = array(

			'category_name'=> $category_name,
		);
		$this->db->where('category_id', $category_id);
		$this->db->update('category', $field);

		if($this->db->affected_rows() > 0){

			$this->session->set_flashdata('visibility', 'Name Change Successfully');
			redirect($_SERVER['HTTP_REFERER']);

		}else{
			$this->session->set_flashdata('visibility', 'Not changed');

			redirect($_SERVER['HTTP_REFERER']);
		}
		//var_dump($field);
	}

	public function getSubCatName()
	{
		# code...
		$sub_cat_id = $this->input->post('sub_cat_id');
		$query= $this->db->query("SELECT * FROM sub_category WHERE sub_cat_id ='$sub_cat_id'");
		echo json_encode($query->result());
	}
	public function ChangeSubCatergoryName()
	{
		# code...

		$sub_cat_name = $this->input->post('sub_cat_name');
		$sub_cat_id = $this->input->post('sub_cat_id');

		$field = array(

			'sub_cat_name'=> $sub_cat_name,
		);
		$this->db->where('sub_cat_id', $sub_cat_id);
		$this->db->update('sub_category', $field);

		if($this->db->affected_rows() > 0){

			$this->session->set_flashdata('visibility', 'Name Change Successfully');
			redirect($_SERVER['HTTP_REFERER']);

		}else{
			$this->session->set_flashdata('visibility', 'Not changed');

			redirect($_SERVER['HTTP_REFERER']);
		}
		//var_dump($field);
	}

	
	public function SubCategoryVisibility($visibility_status,$sub_cat_id)
	{
		# code...
		if($visibility_status == '1'){

			$field = array(

					'subcat_status'=> $visibility_status,
				);
				$this->db->where('sub_cat_id', $sub_cat_id);
				$this->db->update('sub_category', $field);
				if($this->db->affected_rows() > 0){
					$this->session->set_flashdata('visibility', 'Visibility Status changed to published');
					redirect($_SERVER['HTTP_REFERER']);
				}else{
					$this->session->set_flashdata('visibility', 'Not changed');
					redirect($_SERVER['HTTP_REFERER']);
				}
		}
		if($visibility_status == '0'){

			$field = array(

					'subcat_status'=> $visibility_status,
				);
				$this->db->where('sub_cat_id', $sub_cat_id);
				$this->db->update('sub_category', $field);
				if($this->db->affected_rows() > 0){

					$this->session->set_flashdata('visibility', 'Visibility Status changed to un-published');
					redirect($_SERVER['HTTP_REFERER']);

				}else{
					$this->session->set_flashdata('visibility', 'Not changed');

					redirect($_SERVER['HTTP_REFERER']);
				}
		}
		

	}
	


			
	
}
	
