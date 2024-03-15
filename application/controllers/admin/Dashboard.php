<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller{
  
    public function index(){
        
        $data=array();
        $data['page'] = 'dashboard'; 
        if($this->session->userdata('validated')){
        $this->load->view('admin/templates/header',$data);
        $this->load->view('admin/templates/sidebar',$data);
        $this->load->view('admin/dashboard',$data);
        $this->load->view('admin/templates/footer',$data);
        }
        else{
            redirect('auth');
        }
        

    }
    
    
    public function logout(){
        $this->session->sess_destroy();
            redirect('auth');
        
//        if(1=1){
//        
//            }
//        else{
//            echo 'not working';
//            exit();
//        }
        

        }


    }
    

?>