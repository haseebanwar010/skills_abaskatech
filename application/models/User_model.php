<?php
class User_model extends CI_Model {
    
     public function __construct()
    {
        $this->load->database();
    }
    
    public function validate_admin_pass(){
			// grab user input
			 $id = $this->security->xss_clean($this->input->post('staff_id'));
			  $password = $this->security->xss_clean(md5($this->input->post('old_password')));
			
			// Prep the query
			$this->db->where('id', $id);
			$this->db->where('password', $password);
			
			
			 $query = $this->db->get('admin');
			$res = $query->row_array();
						
			// Let's check if there are any results
			if(!empty($res))
			{
				return true;
			}
		}
    
    public function update_admin_password()
		{
			$this->load->helper('url');
			$data = array();
			
			
			if($this->input->post('new_password')){
				$data['password'] = md5($this->input->post('new_password'));
			}			
			
			
			$this->db->where('id', $this->input->post('staff_id'));
			return $this->db->update('admin', $data); 
		}
    
public function validate_email(){
			
$email = $this->security->xss_clean($this->input->post('email'));
			
			$this->db->where('email', $email);
            $query = $this->db->get('admin');
			$result = $query->row_array();
			if(!empty($result))
			{				
				return $result;
			}
}
    
public function randomPassword() {
			$alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
			$pass = array(); //remember to declare $pass as an array
			$alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
			for ($i = 0; $i < 8; $i++) {
				$n = rand(0, $alphaLength);
				$pass[] = $alphabet[$n];
			}
			return implode($pass); //turn the array into a string
		}
    
    
public function update_admin_password_by_email($pass)
		{
			$this->load->helper('url');
			$data = array();
			$data['password'] = md5($pass);
			$this->db->where('email', $this->input->post('email'));
			return $this->db->update('admin', $data); 
		}
    
}
?>