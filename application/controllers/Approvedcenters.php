<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Approvedcenters extends CI_Controller{

function __construct(){
parent:: __construct();
}

    public function index(){
        $result['page'] = 'approvedcenters';
        $this->load->view('template/header',$result);
        $this->load->view('approvedcenters',$result);
        $this->load->view('template/footer',$result);
        
    }
}
?>