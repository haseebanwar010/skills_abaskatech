<?php
class Home_model extends CI_Model {
     public function __construct()
    {
        $this->load->database();
    }
    
    public function getbanners()
    {
        $query=$this->db->get('banners');
        if($query->result()!=''){
            return $query->result();
        }
        else{
            return false;
        }
        
        
    }
}
?>