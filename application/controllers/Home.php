<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{

function __construct(){
parent:: __construct();
    $this->load->model('Home_model');
}

    public function index(){
        $result['page'] = 'home';
        $result['result']=$this->Home_model->getbanners();
        
        $this->load->view('template/header',$result);
        $this->load->view('home',$result);
        $this->load->view('template/footer',$result);
    }
    
}
?>
    
    