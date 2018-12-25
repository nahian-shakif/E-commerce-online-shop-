<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Forget_password_model extends CI_Model
{
    public function getUserInfoByEmail($clean)
    {
        $q = $this->db->get_where('client', array('email' => $clean), 1);  
        if($this->db->affected_rows() > 0){
            $row = $q->row();
            return $row;
        }else{
            error_log('no user found getUserInfo('.$clean.')');
            return false;
        }
    }
    
    

     
}

