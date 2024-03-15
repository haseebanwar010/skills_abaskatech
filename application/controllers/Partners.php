<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Partners extends CI_Controller{

function __construct(){
parent:: __construct();
    $this->load->model('aboutus_model');
}

    public function index(){
        $result['page'] = 'partners';
        $result['aboutus']=$this->aboutus_model->getdata_byid(9);
        $this->load->view('template/header',$result);
        $this->load->view('partners',$result);
        $this->load->view('template/footer',$result);
        
    }
}
?>