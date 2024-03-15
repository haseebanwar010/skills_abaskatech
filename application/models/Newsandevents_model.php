<?php
class Newsandevents_model extends CI_Model {
    
    public function __construct()
    {
        $this->load->database();
    }
    public function addnews($userData)
    {
		return $this->db->insert('new_and_events', $userData);
    }
    public function get_newsandevents( $id = FALSE)
    {
        if($id === FALSE){  
            $query = $this->db->get('new_and_events');
            return $query->result_array(); 
        }
        else{
        $query = $this->db->where('id', $id)->get('new_and_events');
            return $query->result_array();
        }
    }
    public function update_newsandevents($dataarray)
    {
        $this->db->where('id', $this->input->post('id'));
        return $this->db->update('new_and_events', $dataarray); 
    }
    public function getnewsname($id = NULL){
		$newsimage=$this->db->where('id', $id)->get('new_and_events');
        return $newsimage->result_array();
    }
    public function delete_newsandevents($id = NULL)
    {
        $this->load->helper('url');
		$this->db->where('id', $id);
		return $this->db->delete('new_and_events'); 
    }
}
?>