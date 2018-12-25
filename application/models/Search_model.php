
<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Search_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    


        
        public function GetProducts($keyword){

            $query=$this->db->query("SELECT * FROM products WHERE product_name  like '%$keyword%' ");
            
            $output = '';
            //$anchor = '<a href="Categories/GetProductBySubCategory/';
            if(!empty($query->result())){

                foreach($query->result() as $row){

                    $output .= '<tr style="border: 0px solid black;text-align:center;line-height:30px;border-bottom: 1px dotted blue;">';
                  
                    $output .= '<td>'.'<a href="http://localhost/ecommerce/Categories/GetProductBySubCategory/'.$row->sub_category_id.'/'.$row->product_name.'" style="color:blue;font-size:18px;">'.$row->product_name.'</a>'.'</td>';
                  
                    $output .= '</tr>';
               }
               
                   return $output;

            }else{
                $output .= '<tr style="border: 0px solid black;text-align:center;line-height:30px;border-bottom: 1px dotted blue;">';
                $output .= '<td> No Product Found</td>';
                $output .= '</tr>';
                return $output;
            }
            
        }
            
    
     
    

     
}
