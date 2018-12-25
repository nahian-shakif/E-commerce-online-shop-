<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Order_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    

    public function getOrders(){
        
         $query=$this->db->query("SELECT order_details.* , order_master.*, client.* FROM order_master INNER JOIN order_details ON order_details.order_master_id=order_master.order_master_id INNER JOIN client ON client.client_id = order_master.client_id  GROUP BY order_master.transaction_id ");
        return $query->result();
      }
      public function getOrderDetails($order_id,$order_master_id,$client_id){
        $query=$this->db->query("SELECT order_details.* , order_master.*, client.* FROM order_master INNER JOIN order_details ON order_details.order_master_id=order_master.order_master_id INNER JOIN client ON client.client_id = order_master.client_id WHERE order_master.order_master_id='$order_master_id' AND client.client_id = '$client_id'");
        return $query->result();
      }
      public function getCustomeretails($client_id){

        $query=$this->db->query("SELECT * FROM client WHERE client_id='$client_id'");
        return $query->result();
      }
      public function getUserOrders($client_id){

        $query=$this->db->query("SELECT order_details.* , order_master.*, client.* FROM order_master INNER JOIN order_details ON order_details.order_master_id=order_master.order_master_id INNER JOIN client ON client.client_id = order_master.client_id WHERE client.client_id = '$client_id' GROUP BY reference_no ORDER BY order_id");
        return $query->result();
      }

      public function getShippedOrders()
      {
        # code...
        $query=$this->db->query("SELECT order_details.* , order_master.*, client.* FROM order_master INNER JOIN order_details ON order_details.order_master_id=order_master.order_master_id INNER JOIN client ON client.client_id = order_master.client_id WHERE status='4' GROUP BY reference_no ORDER BY order_id ");
        return $query->result();
      }
    

     
}




 