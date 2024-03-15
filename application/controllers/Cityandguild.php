<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cityandguild extends CI_Controller{

function __construct(){
parent:: __construct();
    $this->load->model('aboutus_model');
}

    public function index(){
        $result['page'] = 'cityandguild';
        $result['cityandguild']=$this->aboutus_model->getdata_byid(10);
        $this->load->view('template/header',$result);
        $this->load->view('cityandguild',$result);
        $this->load->view('template/footer',$result);
        
    }
}
?>