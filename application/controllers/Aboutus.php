<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aboutus extends CI_Controller{

function __construct(){
parent:: __construct();
    $this->load->model('aboutus_model');
}

    public function index(){
        $result['page'] = 'aboutus';
        $result['aboutus']=$this->aboutus_model->getdata();
        $this->load->view('template/header',$result);
        $this->load->view('aboutus',$result);
        $this->load->view('template/footer',$result);
        
    }
}
?>