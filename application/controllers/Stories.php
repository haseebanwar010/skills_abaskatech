<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stories extends CI_Controller{

function __construct(){
parent:: __construct();
    $this->load->model('aboutus_model');
}

    public function index(){
        $result['page'] = 'stories';
        $result['aboutus']=$this->aboutus_model->getdata_byid(8);
        $this->load->view('template/header',$result);
        $this->load->view('stories',$result);
        $this->load->view('template/footer',$result);
        
    }
}
?>