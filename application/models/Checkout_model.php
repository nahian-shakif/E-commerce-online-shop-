<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Checkout_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    

    
    public function getUserInformation($clientID){

        
        
        $this->db->where('client_id', $clientID);   
		$query = $this->db->get('client');
		return $query->result();
    }

    
   
    public function  place_order($cartArray,$UserID,$grand_total,$ReferrenseId,$TransactionID){
        
       
        $query=$this->db->query("SELECT * FROM client WHERE client_id = '$UserID'");

        $ClientInfo = $query->result();
        $address = $ClientInfo[0]->address;
        $name = $ClientInfo[0]->fullname;

        $transaction_id = $TransactionID;
        $referrence_id = $ReferrenseId;
    
        $OderMasterArray = array(

            'reference_no' => $referrence_id,
            'order_date_time' => date("Y-m-d h:i"),
            'client_id' => $UserID,
            'client_address' => $address,
            'grand_total' => $grand_total,
            'transaction_id' => $transaction_id,
            'status' => 3
        );

       
        $this->db->insert('order_master',$OderMasterArray);
        $order_master_id = $this->db->insert_id();

        foreach($cartArray as $item){

            $item_price = $item->price * $item->qnty;
       
            $this->db->query("INSERT INTO `order_details` (`order_id`, `order_master_id`, `product_id`, `product_name`, `product_unit_price`, `product_quantity`) VALUES (NULL, '$order_master_id', '$item->id', '$item->name', '$item->price', '$item->qnty');");

            $this->db->query("UPDATE products SET total_sale=total_sale+" . $item->qnty . ", quantity=quantity-" . $item->qnty . " WHERE product_id=" . $item->id);
            
        }

        return true;

    }
    

     
}
