<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Newsandevent extends CI_Controller{

function __construct(){
parent:: __construct();
    $this->load->model('newsevent_model');
}

    public function index(){
        $result['page'] = 'newsevent';
        $result['newsevent']=$this->newsevent_model->getdata();
        $result['news']=$this->newsevent_model->getnews();
        $this->load->view('template/header',$result);
        $this->load->view('newsandevent',$result);
        $this->load->view('template/footer',$result);
        
    }
    
public function getspecificnews($id){
        $result['page'] = 'newsevent';
        $result['news']=$this->newsevent_model->getsinglenews($id);
        $this->load->view('template/header',$result);
        $this->load->view('newsdetail',$result);
        $this->load->view('template/footer',$result);
}
    
    
}
?>
    
