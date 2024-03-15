<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Whatwedo extends CI_Controller{

function __construct(){
parent:: __construct();
    $this->load->model('Whatwedo_model');
}

    public function index(){
        $result['page'] = 'whatwedo';
        $result['whatwedo']=$this->Whatwedo_model->getdata();
        $this->load->view('template/header',$result);
        $this->load->view('whatwedo',$result);
        $this->load->view('template/footer',$result);
        
    }
}
?>
    
