<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Access_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    

    
    function CheckZipCode($zip_code){
        
        // $attribute = array(
        //        'zip_code' => $zip_code 
        //     );
            $code = $zip_code;
            $query =$this->db->query("SELECT * FROM zip_code_table WHERE zip_code='".$code."'");
            //var_dump($query->result());
           return $query->result();
           // $query = $this->db->query("SELECT zip_code FROM zip_code_table WHERE zip_code='$code'");
            //return $query->result();                
                 
                        
            
                    
                        
                    
                      
                
              
        
     }
    

     
}
