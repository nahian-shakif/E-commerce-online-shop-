<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User_model extends CI_Model{
   
        public function GetLoggedInUserData($UserID)
        {
            # code...
            $query=$this->db->query("SELECT * FROM client WHERE client_id = '$UserID'");
             return $query->result();
        }

        public function AddToFavourite($dataProduct)
        {
            # code...
            $this->db->insert('favourite', $dataProduct);
		    return true;
        }
        public function CheckIfAddedToFvrt($ProductID,$UserID)
        {
            # code...
            $query=$this->db->query("SELECT * FROM favourite WHERE client_id = '$UserID' AND product_id = '$ProductID'");
            if($query->result()){
                return true;
            }else{
                return false;
            }
        }
        public function Favourites($UserID)
        {
            # code...
            $query=$this->db->query("SELECT products.*, favourite.* FROM products INNER JOIN favourite ON favourite.product_id = products.product_id WHERE favourite.client_id='$UserID'");
            return $query->result();
        }

        public function ProductRating($dataProduct)
        {
            # code...
            $this->db->insert('rating', $dataProduct);
		    return true;
        }

        public function GetRating($ProductID)
        {
            # code...
            $query=$this->db->query("SELECT  AVG(rating) AS AverageRating FROM rating WHERE product_id ='$ProductID'");
            return $query->result();
        }
        public function GetMyProducts($UserID)
        {
            # code...
            $query=$this->db->query("SELECT order_details.* , order_master.*, client.* FROM order_master INNER JOIN order_details ON order_details.order_master_id=order_master.order_master_id INNER JOIN client ON client.client_id = order_master.client_id WHERE client.client_id = '$UserID' GROUP BY reference_no ORDER BY order_id");
             return $query->result();
        }
}