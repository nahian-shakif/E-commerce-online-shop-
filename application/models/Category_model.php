<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Category_model extends CI_Model
{
   
    var $table_admin = 'admin';
    var $table_category = 'category_list';

    public function AddToProductCategory($Data_product){
        
       
             $this->db->insert('products', $Data_product);       
          

    }
    public function InsertCategoryName($data)
    {
        # code...
        $this->db->insert('category', $data);
        return true;
    }

    public function InsertSubCategoryName($data)
    {
        # code...
        $this->db->insert('sub_category', $data);
        return true;
    }

    public function GetCategories()
    {
        # code...
        $query=$this->db->query("SELECT * FROM category");
        return $query->result();
    }

    public function GetSubCategoriesForDashBoard()
    {
        # code...
        $query=$this->db->query("SELECT * FROM sub_category ");
        return $query->result();
    }
    public function GetSubCategories()
    {
        # code...
        $query=$this->db->query("SELECT * FROM category WHERE cat_status = 1 ");
        return $query->result();
    }
  //     GetSubCategoriesLists
    public function GetSubCategoriesLists()
    {
        # code...
        $query=$this->db->query("SELECT * FROM sub_category WHERE subcat_status = 1 ");
        return $query->result();
    }
    public function GetSubCategoriesForCategories()
    {
        # code...
        $query=$this->db->query("SELECT * FROM sub_category WHERE subcat_status = 1 ");
        return $query->result();
    }
    
    public function GetProductBySubCategories($SubCatID)
    {
        # code...
        $query=$this->db->query("SELECT * FROM products WHERE sub_category_id = '$SubCatID'");
        return $query->result();
        
    }
    public function GetSingleProductDetails($ProductID)
    {
        # code...
        $query=$this->db->query("SELECT * FROM products WHERE  product_id = '$ProductID'");
        return $query->result();
    } 
     function GetPopularProducts()
    {
        # code...
        
        $query=$this->db->query("SELECT * FROM products ORDER BY total_sale DESC LIMIT 10");
        return $query->result();
    }

    // public function getCat(){

    //     $query=$this->db->query("SELECT * FROM category GROUP BY category_name ASC");
    //     $category_name_session = $this->session->set_userdata('category_name');
    //     return $query->result();
    // }
    // public function getSubCat($category_name){
        
    //             $query=$this->db->query("SELECT sub_category_name FROM products WHERE category_name = '$category_name' ");
    //             return $query->result();
    // }
    // public function getProducts($sub_category_name){
        
    //     $query=$this->db->query("SELECT * FROM products WHERE sub_category_name = '$sub_category_name'  GROUP BY sub_category_name");
    //     return $query->result();
    // }



    // public function viewproduct(){
    //     $id = $this->input->get('id');
    //     $this->db->group_by('sub_category_name');     
    //     $this->db->where('sub_category_name', $id);   
	// 	$query = $this->db->get('products');
	// 	if($query->num_rows() > 0){
	// 		return $query->row();
	// 	}else{
	// 		return false;
	// 	}
    // }
    // public function VieWAll(){

    //     $query=$this->db->query("SELECT * FROM products GROUP BY product_name DESC");
    //     return $query->result();
    // }
    // public function signleitemdetails(){
    //     $id = $this->input->get('id');
	// 	$this->db->where('product_id', $id);
	// 	$query = $this->db->get('products');
	// 	if($query->num_rows() > 0){
	// 		return $query->row();
	// 	}else{
	// 		return false;
	// 	}
    // }
    // function getSeachResults($product_name){

    //     $this->db->like('product_name', $product_name);
    //     $this->db->orderby('product_name');
    //     $query = $this->db->get('products');
    //     if($query->num_rows() > 0){

    //         $output = '<ul>';
    //         foreach($query->result() as $product_info){

    //             if($product_info){
    //                 $output.= '<li><strong><a href="">'.$product_info->product_name.'</a></strong></li>';
    //             }
    //             else{
    //                 $output.= '<li><strong>'.$product_info->product_name.'</strong></li>';
    //             }
    //         }

    //         $output.='</ul>';
    //         return $output;
    //     }
    //     else{
    //         return "<p>Sorry No results found..</p>";
    //     }
    //    // return $this->db->get('products')->result();
    // }
    public function GetProductList(){

        $query=$this->db->query("SELECT * FROM category GROUP BY category_name");
        return $query->result();

    }
    public function get_subcat_name($category_id){

        // $query = $this->db->get_where('sub_category', array('category_id'=> $sub_cat_id));
        $query = $this->db->query("SELECT * FROM sub_category WHERE category_id = '$category_id'");
        return $query->result();
    }
    public function GetAllProducts($sub_cat_id){

        $query = $this->db->get_where('products', array('sub_category_id'=> $sub_cat_id));
        return $query->result();

    }
    public function deleteProduct($id){

        $this->db->delete('products', array('product_id' => $id));
        return true;
    }
    public function singleproductdetails($product_id){
		
		$this->db->where('product_id', $product_id);
		$query = $this->db->get('products');
		if($query->num_rows() > 0){
			return $query->row();
		}else{
			return false;
		}
    }
    public function updateProductIndividual(){
        $id = $this->input->post('product_id');
		$field = array(
		'product_name'=>$this->input->post('product_name'),
        'price'=>$this->input->post('price'),
        'sale'=>$this->input->post('sale'),
        'quantity'=>$this->input->post('quantity'),
        'measurement'=>$this->input->post('measurement'),
		//'updated_at'=>date('Y-m-d H:i:s')
		);
		$this->db->where('product_id', $id);
		$this->db->update('products', $field);
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
    }
    public function GetSubCategoriesList()
    {
        # code...
        $query = $this->db->query("SELECT * FROM sub_category");
        return $query->result();
    }





    public function InsertCCategoryName($data)
    {
        # code...
        $this->db->insert('c_category', $data);
        return true;
    }

    
    // public function products($sub_category_name){

    //     $query = $this->db->get_where('products', array('sub_category_name'=> $sub_category_name));
    //     return $query->result();
    // }
    
    

     
}
