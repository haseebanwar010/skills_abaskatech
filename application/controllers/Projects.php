<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Projects extends CI_Controller{

function __construct(){
parent:: __construct();
    $this->load->model('projects_model');
}

    public function index(){
        $result['page'] = 'projects';
        $result['projects']=$this->projects_model->getdata();
        $this->load->view('template/header',$result);
        $this->load->view('projects',$result);
        $this->load->view('template/footer',$result);
        
    }
}
?>