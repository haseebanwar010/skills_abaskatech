<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ourgoals extends CI_Controller{

function __construct(){
parent:: __construct();
    $this->load->model('Ourgoals_model');
}

    public function index(){
        $result['page'] = 'ourgoals';
        $result['ourgoals']=$this->Ourgoals_model->getdata();
        $this->load->view('template/header',$result);
        $this->load->view('ourgoals',$result);
        $this->load->view('template/footer',$result);
        
    }
}
?>