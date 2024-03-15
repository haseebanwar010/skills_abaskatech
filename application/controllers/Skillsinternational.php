<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Skillsinternational extends CI_Controller{

function __construct(){
parent:: __construct();
    $this->load->model('aboutus_model');
}

    public function index(){
        $result['page'] = 'skillsinternational';
        $result['aboutus']=$this->aboutus_model->getdata_byid(7);
        $this->load->view('template/header',$result);
        $this->load->view('skillsinternational',$result);
        $this->load->view('template/footer',$result);
        
    }
}
?>