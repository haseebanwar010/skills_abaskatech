<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ilm extends CI_Controller{

function __construct(){
parent:: __construct();
    $this->load->model('aboutus_model');
}

    public function index(){
        $result['page'] = 'ilm';
        $result['ilm']=$this->aboutus_model->getdata_byid(11);
        $this->load->view('template/header',$result);
        $this->load->view('ilm',$result);
        $this->load->view('template/footer',$result);
        
    }
}
?>