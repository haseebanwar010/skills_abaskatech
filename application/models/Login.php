<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Model{



public function dologin($name,$password){

    $this->db->where('name',$name);
    $this->db->where('password',$password);
//    $this->db->where('email',$email);
    $query=$this->db->get('admin');
    
    if($query->num_rows()>0){
        return $query->row_array();
    }
    else
    {

        return false;
    }
}
    
    
public function validate_email(){
    
}
    
    
}
?>