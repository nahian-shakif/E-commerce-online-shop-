<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class creation_model extends CI_Model
{
    public function GetAdminList(){
        
         $this->db->select("*");
         $this->db->from('admin');
         $query = $this->db->get();
         return $query->result();
    }
    var $table_zip = 'zip_code_table';
    var $table_admin = 'admin';
    var $table_client = 'client';

    public function AdminCreateRequest($CreateAdminData){

        $this->db->insert($this->table_admin, $CreateAdminData);
		return $this->db->insert_id();

    }
    
    function getAll(){
        $query=$this->db->query("SELECT * FROM admin");
        return $query->result();
        //returns from this string in the db, converts it into an array
    }
    function GetAdminDetails($id){
        $query=$this->db->query("SELECT * FROM admin  where admin_id='$id'");
        return $query->result();
        //returns from this string in the db, converts it into an array
    }

    public function InsertZipCode($Data){
        
        $this->db->insert($this->table_zip, $Data);
		return $this->db->insert_id();
        
     }
    //  function SingleAdminDetails($adminID){

    //     $id = $adminID;
    //     $query = "SELECT * FROM admin WHERE admin_id = '".$id."' ";
    //     return $query->result();

    //  }
     public function signleadmindetails(){
		$id = $this->input->get('id');
		$this->db->where('admin_id', $id);
		$query = $this->db->get('admin');
		if($query->num_rows() > 0){
			return $query->row();
		}else{
			return false;
		}
    }
    public function updateAdminIndividual(){
		$id = $this->input->post('admin_id');
		$field = array(
		'username'=>$this->input->post('username'),
		'password'=>$this->input->post('password'),
		//'updated_at'=>date('Y-m-d H:i:s')
		);
		$this->db->where('admin_id', $id);
		$this->db->update('admin', $field);
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
    }
    public function UserCreateRequest($CreateUserData){

        $this->db->insert($this->table_client, $CreateUserData);
		return true;

    }
    public function getALLData($client_id){

        $query=$this->db->query("SELECT * FROM client  where client_id='$client_id'");
        return $query->result();

    }
    public function singleclientdetails(){

       
            $id = $this->input->get('client_id');
            $this->db->where('client_id', $id);
            $query = $this->db->get('client');
            if($query->num_rows() > 0){
                return $query->row();
            }else{
                return false;
            }
        
    }
    public function updateClientIndividual(){

        $id = $this->input->post('client_id');
		$field = array(
		'fullname'=>$this->input->post('fullname'),
        'address'=>$this->input->post('address'),
        'phone'=>$this->input->post('saphonele'),
		//'updated_at'=>date('Y-m-d H:i:s')
		);
		$this->db->where('client_id', $id);
		$this->db->update('client', $field);
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}

    }

    // Search 
    function ProductSearch($search){
        $this->db->select("*");
        //$whereCondition = array('product_name' =>$search);
        $this->db->like('product_name', $search);
        //$this->db->where($condition);
        $this->db->from('products');
        $query = $this->db->get();
        return $query->result();
     }
     public function getSearchedItem($category_name,$sub_category_name,$product_name,$product_id){

        $query=$this->db->query("SELECT * FROM products WHERE product_name LIKE '$product_name'");
        
       return $query->result();
     
       //var_dump($num_rows);

     }
    

    
     
   
   
    
        

     
}