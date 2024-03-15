<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Assured extends CI_Controller{

function __construct(){
parent:: __construct();
    $this->load->model('aboutus_model');
}

    public function index(){
        $result['page'] = 'assured';
        $result['assured']=$this->aboutus_model->getdata_byid(12);
        $this->load->view('template/header',$result);
        $this->load->view('assured',$result);
        $this->load->view('template/footer',$result);
        
    }
}
?>