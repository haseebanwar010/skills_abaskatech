<?php
class Aboutus_model extends CI_Model {
    
     public function __construct()
    {
        $this->load->database();
    }
    
    public function getdata(){
        $id=5;
        $this->db->where('id',$id);
        $query=$this->db->get('pages');
//        echo '<pre>';
//        var_dump($query->row_array());
//        exit;
        return $query->row_array();
    }
    public function getdata_byid($id){
        $this->db->where('id',$id);
        $query=$this->db->get('pages');
        return $query->row_array();
    }
    
}
?>