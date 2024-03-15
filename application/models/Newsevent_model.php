<?php
class Newsevent_model extends CI_Model {
    
     public function __construct()
    {
        $this->load->database();
    }
    public function getdata(){
        $id=4;
        $this->db->where('id',$id);
        $query=$this->db->get('pages');

        return $query->row_array();
    }
    
public function getnews(){
        $query=$this->db->get('new_and_events');
//        echo '<pre>';
//        var_dump($query->result_array());
//        exit;
        return $query->result_array();
    }
    
public function getsinglenews($id){
        $this->db->where('id',$id);
        $query=$this->db->get('new_and_events');
        return $query->row_array();
}

    
}
?>