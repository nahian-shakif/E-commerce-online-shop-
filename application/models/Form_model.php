<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Form_model extends CI_Model
{
    public function InsertContactMessages($ContactPageData)
    {

        $this->db->insert('contact_page', $ContactPageData);
    }

     
}
